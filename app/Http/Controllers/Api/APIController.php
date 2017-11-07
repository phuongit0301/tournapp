<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use File;


class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        // Set default to Israel timezone
        @date_default_timezone_set( 'Asia/Jerusalem' );
    }

    /**
     * Sessions Manager page
     *
     * @return void
     */
    public function index() {
        return view('admin.session.index');
    }

    /**
     * Get sessions by category id
     * @param $request
     * @param string category id - uuid
     * @return array sessions
     */
    public function get_sessions( Request $request, $category_id ) {
        $sessions = [];
        try {
            $sessions = DB::table('sessions')
                            ->where('category_id', $category_id)
                            ->get();
        }
        catch( \Illuminate\Database\QueryException $e ) {}

        return response()->json( $sessions );
    }

    /**
     * Get session by id
     * @param $request
     * @param string session id - uuid
     * @return session | false if id is not exists
     */
    public function get_session( Request $request, $session_id ) 
    {
        if ( $request->isMethod('post') )
            return $this->update_session( $request, $session_id );

        $session = NULL;
        try 
        {
            $session = DB::table('sessions')
                        ->where('id', $session_id)
                        ->first();

            if ( $session ) 
            {
                $referees = DB::table('referees')
                                ->join('session_referees', 'referees.id', '=', 'session_referees.referee_id')
                                ->where('session_referees.session_id', $session_id)
                                ->select('referees.*')
                                ->get();

                $session->referees = $referees;                
                $session->court = $this->prepare_courts( json_decode( $session->court ) );

                // Get all matches
                $matches = DB::table('matches')
                            ->join('categories', 'categories.id', '=', 'matches.category_id')
                            ->where('matches.session_id', $session_id)
                            ->select('matches.*', 'categories.name as category_name')
                            ->orderBy('matches.id', 'ASC')
                            ->get();

                $times = array();
                $start = strtotime( '00:00' );
                $end = strtotime( '24:00' );

                do {
                    $times[] = date('H:i', $start);
                    $start = strtotime("+5 minutes", $start );
                }
                while( $start < $end );

                $session->times = $times;

                // Prepare matches
                $data = [];
                foreach( $matches as $key => $match ) 
                {
                    $teams = DB::table('team_matches')
                                    ->join('teams', 'teams.id', '=', 'team_matches.team_id')
                                    ->where('match_id', $match->id)
                                    ->select('teams.*', 'team_matches.team_status')
                                    ->orderBy('team_matches.id', 'asc')
                                    ->get();

                    if ( count($teams) < 2 )
                        continue;                    

                    $late = false;
                    $details = array();
                    foreach( $teams as $team ) 
                    {
                        if ( !$team->team_status )
                            $late = true;

                        $members = json_decode( $team->members );
                        $members = !is_array($members) ? [ $members ] : $members;
                        $team->members = [];

                        foreach( $members as $member ) 
                        {
                            $player = DB::table('players')
                                        ->where('id', $member->player_id)
                                        ->first();
                                        
                            if ( $player ) {
                                $club = DB::table('clubs')
                                        ->where('id', $player->club_id)
                                        ->first();
                                $player->club = $club;
                            }
                            $team->members[] = $player;
                        }
                        $details[] = $team;
                    }

                    $match->round = '1/8';
                    if ( $match->match_results )
                        $match->match_results = json_decode($match->match_results);
                    $match->teams = $details;
                    $data[] = $match;

                    // Check if match is late?
                    if ( $late && in_array($match->match_status, [5]) 
                        && $match->estimated_time 
                        && ( strtotime($match->estimated_time) <= strtotime(date("H:i")) ) 
                    ) 
                    {
                        DB::table('matches')->where('id', $match->id)
                                            ->update(['match_status' => 6]);
                        $match->match_status = 6;
                    }
                }

                $session->data = $data;
            }
            else {
                $session = false;
            }
        }
        catch( \Illuminate\Database\QueryException $ex ) {}        

        return response()->json( $session );
    }

    /**
     * Update session
     */
    public function update_session( Request $request, $session_id ) {

        $updated = false;

        // Extract all POST parameters
        $inputs = $request->all();        
        extract( $inputs, EXTR_OVERWRITE );

        $court = isset( $court ) ? $court : array();
        $court = is_array( $court ) ? $court : array( $court );

        try 
        {
            $session = DB::table('sessions')
                        ->where('id', $session_id)
                        ->first();

            if ( $session )  {

                if ( isset($court['id']) ) 
                {                   
                    $courts = json_decode( $session->court );
                    foreach( $courts as $key => $c ) 
                    {
                        if ( $c->id == $court['id'] ) {
                            $merge = array_replace( (array)$c, $court );
                            $courts[ $key ] = $merge;
                            break;
                        }
                    }

                    DB::table('sessions')
                        ->where( 'id', $session_id )
                        ->update(['court' => json_encode($courts)]);

                    // Check if court is available or not
                    // If court is not available, we remove all the court inside
                    if ( isset($court['available']) && !$court['available'] ) 
                    {
                        DB::table('matches')
                            ->where([ 'court' => $court['id'] ])
                            ->update(['court' => 0]);
                    }
                }

                $updated = true;
            }
        }
        catch( \Illuminate\Database\QueryException $ex ) {}        

        return response()->json( [ 'status' => ( $updated ? 'success' : 'error' ) ] );
    }

    public function update_player( Request $request ) {

        $inputs = $request->all();

        extract( $inputs, EXTR_OVERWRITE );

        $args   = array();
        $paid   = isset($paid) ? ($args['paid'] = (int)$paid) : false;
        $id     = isset($id) ? $id : false;
        
        $args['paid'] = $args['paid'] > 1 ? 1 : $args['paid'];

        if ( !empty($args) && $id ) 
        {
            try {
                DB::table('teams')
                    ->where([ 
                        'id'   => $id
                    ])
                    ->update( $args );
            }
            catch( \Illuminate\Database\QueryException $e ) {
                $status = $e->getMessage();
            }
        }
        return response()->json([ 'status' => 'success' ]);
    }

    /** 
     * Update payment status
     */
    public function update_payment_status( Request $request ) {

        $team_id = $request->input( 'team_id' );
        $paid_status = $request->input('status');
        if ( $team_id ) {
            DB::table('teams')
                    ->where([ 
                        'id'   => $team_id
                    ])
                    ->update([ 'paid' => $paid_status ]);
        }

        return response()->json([ 'status' => 'success' ]);
    }

    /**
     * Update team status
     */
    public function update_team_status( Request $request ) {

        $inputs = $request->all();

        extract( $inputs, EXTR_OVERWRITE );

        $response = [ 'matchUpdated' => false, 'match_id' => '', 'status' => 'success' ];

        if (    (isset($team_id) && $team_id)
                && (isset($match_id) && $match_id) 
                && (isset($team_status) && is_bool($team_status)) 
        ) {
            try 
            {
                $match = DB::table('matches')->where('id', $match_id)->first();
                if ( in_array($match->match_status, [4,5,6]) )
                {

                    DB::table('team_matches')
                        ->where([ 
                            'team_id'   => $team_id,
                            'match_id'  => $match_id
                        ])
                        ->update([ 'team_status' => $team_status  ]);
                }
                else {
                    $response['status'] = 'error';
                    return $response;
                }
            }
            catch( \Illuminate\Database\QueryException $e ) {
                $status = $e->getMessage();
            }
        }

        // Check if need to update match status?
        $teams = DB::table('team_matches')
                    ->where([
                        'match_id'      => $match_id,
                        'team_status'   => 1
                    ])->count();

        if ( $teams == 2 ) {

            $response['matchUpdated'] = true;
            $response['match_id'] = $match_id;

            // Update match status to Ready to go
            DB::table('matches')
                ->where('id', $match_id)
                ->update(['match_status' => 4] );
        }
        else {
            $match = DB::table('matches')
                        ->where('id', $match_id)->first();

            // If match status is Ready to go, reset it to Pre match | Late
            $late = ( $match->estimated_time && strtotime($match->estimated_time) <= strtotime(date('H:i')) );
            $match_status = ( $late ) ? 6 : 5;

            if ( $match && $match->match_status == 4 ) 
            {
                DB::table('matches')
                ->where('id', $match_id)
                ->update(['match_status' => $match_status] );

                $response['matchUpdated'] = true;
                $response['match_id'] = $match_id;
            }
        }
 
        return response()->json( $response );
    }

    /**
     * Update a match
     */
    public function update_match( Request $request ) {

        $inputs = $request->all();


        extract( $inputs, EXTR_OVERWRITE );

        $args = [];

        $id                 = isset( $id ) ? ( $args['id'] = $id ) : false;
        $scheduled_time     = isset( $scheduled_time ) ? ( $args['scheduled_time'] = $scheduled_time ) : '';
        $estimated_time     = isset( $estimated_time ) ? ( $args['estimated_time'] = $estimated_time ) : '';
        $court              = isset( $court ) ? ( $args['court'] = $court ) : '';
        $referee            = isset( $referee_id ) ? ( $args['referee_id'] = $referee_id ) : '';
        $winner_id          = isset( $winner_id ) ? ( $args['winner_id'] = $winner_id ) : '';
        $match_status       = isset( $match_status ) ? ( $args['match_status'] = $match_status ) : '';

        $games = isset( $games ) ? $games : array();
        $post_games = is_array($games) ? $games : array( $games );
        $game_data = array();

        foreach( $post_games as $g ) 
        {
            $g = is_array($g) ? $g : array($g);
            $pass = true;
            foreach( $g as $key => $records ) {   
                if ( !(count($records) == 2 && in_array($key, ['games', 'points', 'tb'])) ) {                    
                    $pass = false;
                }
            }
            if ( $pass )
                $game_data[] = $g;
        }

        if ( count($game_data) === 3 ) 
            $args['match_results'] = json_encode($game_data);

        $response = [ 'status' => 'success' ];

        $now = strtotime(date('H:i'));
        if ( (isset($args['scheduled_time']) && strtotime($args['scheduled_time']) < $now) 
            || (isset($args['estimated_time']) && strtotime($args['estimated_time']) < $now) )
        {
            $response = [
                'status'    => 'error',
                'message'   => "Time has been passed!"
            ];
            return $response;
        }    

        if ( isset($args['id']) && count($args) > 1 ) 
        {
            // 
            // Start transaction here to check if we can update a match or not?
            // 
            DB::beginTransaction();

            $match_id = $args['id'];
            unset( $args['id'] );

            $match = DB::table('matches')
                        ->where( 'id', $match_id )->first();
            if ( $match ) 
            {
                if ( isset($args['scheduled_time']) ) {
                    $start = strtotime( $args['scheduled_time'] );
                    $end = strtotime("+{$match->length} minutes", $start );
                    $args['scheduled_end_time'] = date('H:i', $end);
                    $args['estimated_time'] = $args['scheduled_time'];
                }

                else if ( isset($args['estimated_time']) ) {
                    $start = strtotime( $args['estimated_time'] );
                    $end = strtotime("+{$match->length} minutes", $start );
                    $args['scheduled_end_time'] = date('H:i', $end);
                    if ( !$match->scheduled_time )
                        $args['scheduled_time'] = $args['estimated_time'];
                }


                try 
                {
                    DB::table('matches')
                        ->where( 'id', $match_id )
                        ->update( $args );

                    $match = DB::table('matches')
                            ->join('categories', 'categories.id', '=', 'matches.category_id')
                            ->where( ['matches.id' => $match_id] )
                            ->select('matches.*', 'categories.name as category_name')
                            ->first();

                    $match->round = '1/8';

                    // If match status is not "Match Late", "Pre-match", both players need to be arrived
                    if ( !in_array($match->match_status, [6, 5]) ) {
                        DB::table('team_matches')
                            ->where('match_id', $match->id)
                            ->update(['team_status' => 1]);
                    }

                    if ( $match->estimated_time && $match->court )
                    {

                        $matches = DB::table('matches')
                                    ->where(['session_id' => $match->session_id, 'court' => $match->court, ['estimated_time', '<>', 'NULL'] ])
                                    ->whereNotIn('id', [$match->id])
                                    ->get();

                        $session = DB::table('sessions')
                                    ->where('id', $match->session_id)
                                    ->first(); 

                        $start = strtotime( $match->estimated_time );
                        $end = strtotime( $match->scheduled_end_time );

                        $rollback = false;

                        foreach( $matches as $m ) 
                        {
                            if ( !$m->estimated_time ) 
                                continue;                            
                            $m_start = strtotime( $m->estimated_time );
                            $m_end = strtotime( $m->scheduled_end_time );
                            if ( ($m_start < $start && $start < $m_end) || ($m_start < $end && $end < $m_end) ) {
                                $rollback = true; 
                                break;
                            }

                            // If match in same court in Waiting, set it to InProgress
                            if ( $m->match_status == 3 ) 
                            {
                                DB::table('matches')
                                    ->where('id', $m->id)
                                    ->update([ 'match_status' => 2 ]);
                            }
                        }

                        if ( $rollback ) {
                            DB::rollback();
                            $response = [
                                'status'    => 'error',
                                'message'   => "There're another match playing in this court at this time"
                            ];
                        }
                        else 

                        {
                            DB::commit();
                        }
                    }
                    // if ( $match->estimated_time && $match->court )
                    else {
                        DB::commit();
                    }

                    // Pre-get match
                    $teams = DB::table('team_matches')
                        ->join('teams', 'teams.id', '=', 'team_matches.team_id')
                        ->where('match_id', $match->id)
                        ->select('teams.*', 'team_matches.team_status')
                        ->get();

                    $match->teams= [];    
                    foreach( $teams as $team ) 
                    {
                        $members = json_decode( $team->members );
                        $members = !is_array($members) ? [ $members ] : $members;
                        $team->members = [];
                        foreach( $members as $member ) 
                        {
                            $player = DB::table('players')
                                        ->where('id', $member->player_id)
                                        ->first();
                                        
                            if ( $player ) {
                                $club = DB::table('clubs')
                                        ->where('id', $player->club_id)
                                        ->first();
                                $player->club = $club;
                            }
                            $team->members[] = $player;
                        }
                        $match->teams[] = $team;
                    }
                    $response['match'] = $match;
                }
                catch( \Illuminate\Database\QueryException $e ) {
                    DB::rollback();
                    $response = [
                        'status'    => 'error',
                        'message'   => $e->getMessage()
                    ];
                }
            }
        }
        return response()->json( $response );
    }

    /**
     * Get list of match statuses
     */
    public function get_match_status() {
        $statuses = DB::table('match_status')
                        ->orderBy('id', 'asc')->get();
        return response()->json( $statuses );
    }

    /**
     * Prepare courts data
     */
    private function prepare_courts( $courts ) {
        if ( empty($courts) )
            return [];

        return (array)$courts;
    }

    private function prepare_courts_old( $courts ) {
        if ( empty($courts) )
            return [];

        $data = array();

        foreach( $courts as $court ) {
            $i = 1;
            while( $i <= $court->number )
            {
                $times = array( $court->from );
                $start = strtotime( $court->from );
                $end = strtotime( $court->to );

                while( $start < $end ) {

                    $start = strtotime("+5 minutes", $start );
                    $times[] = date('H:i', $start);
                }
                $data[] = [
                    "content" => sprintf("%d", $idx),
                    "id" => sprintf("%d", $idx),
                    "value" => $idx,
                    "className" => "circle-right circle timelines-bg-grey",
                    "statusReady" => true,
                    "start_time"  => $court->from,
                    "end_time"  => $court->to,
                    "times" => $times,
                    "available" => false
                ];
                $idx++;
                $i++;
            }
        }

        return $data;
    }

    public function courts() {

        $courts = DB::table('session_court_hours')
                        ->where('session_id', 1)->get();
        $data = array();

        $idx = 1;
        foreach( $courts as $key => $court ) {
            $i = 1;
            while( $i <= $court->number_of_courts )
            {
                $times = array( $court->available_time_start );
                $start = strtotime( $court->available_time_start );
                $end = strtotime( $court->available_time_end );

                while( $start < $end ) {

                    $start = strtotime("+5 minutes", $start );
                    $times[] = date('h:i', $start);
                }
                $data[] = [
                    "content" => sprintf("%d", $idx),
                    "id" => sprintf("%d", $idx),
                    "value" => $idx,
                    "className" => "circle-right circle timelines-bg-grey",
                    "statusReady" => true,
                    "start_time"  => $court->available_time_start,
                    "end_time"  => $court->available_time_end,
                    "times" => $times,
                    "available" => true
                ];
                $idx++;
                $i++;
            }
        }

        return response()->json( $data );
    }

    public function time_group() {
        $matches = DB::table('match_detail')->get();
        $data = array();

        $time_id = 1;
        foreach( $matches as $key => $match ) 
        {
            if ( !array_key_exists($match->scheduled_time, $data) ) {
                $data[ $match->scheduled_time ] = array( 
                    "id"    => $time_id,
                    "time"  => $match->scheduled_time,
                    "player"    => []
                );
                $time_id++;
            }
                
            $player1 = DB::table('athlete')->where('id', $match->player_1_id )->get()->first();
            $player2 = DB::table('athlete')->where('id', $match->player_2_id )->get()->first();

            $data[ $match->scheduled_time ]['player'][] = [
                'name'  => sprintf('[%s] %s %s', $match->category_name, $player1->firstname, $player1->lastname),
                'late'  => ( $match->player_1_status == 'Late' ? true : false ),
                'pay'   => true
            ];
            $data[ $match->scheduled_time ]['player'][] = [
                'name'  => sprintf('[%s] %s %s', $match->category_name, $player2->firstname, $player2->lastname),
                'late'  => ( $match->player_2_status == 'Late' ? true : false ),
                'pay'   => true
            ];                 
        }

        uksort( $data, [$this, 'uksort'] );

        $data = array_values( $data );

        return response()->json( $data );
    }

    /**
     * Sort array by key (time)
     */
    public function uksort( $a, $b, $i = 0 ) {
        return ( strtotime($a) < strtotime($b) ) ? -1 : 1;
    }
	
    /**
     * Get matches inside session
     */
	public function get_matches() {

		$matches = DB::table('match_detail')->get();
        $data = array();

        foreach ( $matches as $match ) {

            $player1 = DB::table('athlete')->where('id', $match->player_1_id )->get()->first();
            $player2 = DB::table('athlete')->where('id', $match->player_2_id )->get()->first();

            /**
            $round = DB::table('session_round_match')
                        ->where('session_id', $match->session_id)
                        ->where('match_id', $match->id)
                            ->get();
            */

            $data[] = array(
                "id" => $match->id,
                "time" => $match->scheduled_time,
                "category" => $match->category_name,
                "round" => '1/8',
                "player1" => [
                    "name" => sprintf('%s %s', $player1->firstname, $player1->lastname),
                    "ready" => false,
                    "paid" => "PAID",
                    "statusStyle" => "bg-white",
                    "textPaidStatus" => "text-black"
                ],
                "player2" => [
                    "name" => sprintf('%s %s', $player2->firstname, $player2->lastname),
                    "ready" => true,
                    "paid" => "",
                    "statusStyle" => "bg-white",
                    "textPaidStatus" => "text-black"
                ],
                "court" => $match->court_number,
                "sms" => true,
                "disabledButton" => true,
                "matchStatus" => 2
            );
        }

        return response()->json( $data );
	}

    /*
        get data from json
     */
    public function get_data() {
        $data = File::get(public_path('/data/data.json'));
        return response()->json($data);
    }
}