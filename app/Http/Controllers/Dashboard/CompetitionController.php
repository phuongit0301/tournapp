<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\CompetitionRepository;
use Request;
use Redirect;

use App\Repositories\Dashboard\OrganizationRepository;
use App\Repositories\Dashboard\MasterConfigRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use App\Models\Organization;
use App\Models\UserOrganizations;
use App\Models\Countries;
use Carbon\Carbon;

use Image;
use Uuid;

class CompetitionController extends Controller
{
    protected $competition_rp;

    public function __construct(CompetitionRepository $competition_rp){
        $this->competition_rp = $competition_rp;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   

        $data = array();

        $data['current_user'] = Auth::user();
        $data['tournament_id'] = isset($_GET['t_id']) ? $_GET['t_id'] : "";
        return view('dashboard.competition_setup',[
            'data' => $data] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $request = Request::all();
        $this->competition_rp->insertDataCompetition($request);

        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /*
    * Competition category
    */
    public function competition_category(){
        $data = array();

        $data['current_user'] = Auth::user();
        $data['tournament_id'] = isset($_GET['t_id']) ? $_GET['t_id'] : "";
        return view('dashboard.competition_category',[
            'data' => $data] );
    }

    /*
    * Competition category chart
    */
    public function competition_category_chart(){
        return view('dashboard.competition_category_chart');
    }

    /*
    * Competition stages
    */
    public function competition_stages(){
        $data = array();
        $data['tournament_id'] = isset($_GET['t_id']) ? $_GET['t_id'] : "";
        return view('dashboard.competition_stages', ["data" => $data]);
    }
}