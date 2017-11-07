<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\OrganizationRepository;
use App\Repositories\Dashboard\MasterConfigRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Helpers\AppHelper;

use App\Models\Organization;
use App\Models\UserOrganizations;
use App\Models\Countries;
use Carbon\Carbon;

// use Illuminate\Http\Request;
use Request;
use Redirect;
use Image;
use Uuid;
ini_set('max_execution_time', 180); //3 minutes
class OrganizationController extends Controller
{
    protected $organization_rp;
    protected $masterconfig_rp;
    protected $AppHelper;
    public function __construct(OrganizationRepository $organization_rp, MasterConfigRepository $masterconfig_rp, AppHelper $AppHelper)
    {
        $this->organization_rp = $organization_rp;
        $this->masterconfig_rp = $masterconfig_rp;
        $this->AppHelper = $AppHelper;
    }
        
    

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        // dump(Auth::user());die();
        if(!Auth::check()){
            return view('dashboard.login');
        }  
        Log::info('index: called');
        $data = array();

        $data['current_user'] = Auth::user();

        $list_countries = $this->masterconfig_rp->get_all_countries();

        $data['list_countries'] = $list_countries;
        $data['list_jobtitles'] = $this->masterconfig_rp->get_all_job_titles();
        // $data['list_positions'] = $this->masterconfig_rp->get_all_pic_positions();

        //query current organization information and sub organization for the current user.
        $data['organization'] = $this->organization_rp->get_organization();
        if ($data['organization'] instanceof Organization) {
            if ($data['organization'] && $data['organization']->id) {
                $data['sub_organizations'] = $this->organization_rp->get_sub_organizations($data['organization']->id);    
            }else{
                Log::info('index: could not find an existing Organization for the current user. Created an empty Organization and Sub Organization object.');
                $data['organization'] = new Organization();
                $data['sub_organizations'] = array();
            }    
        }else{
            Log::info('index: could not find an existing Organization for the current user. Created an empty Organization and Sub Organization object.');
            $data['organization'] = new Organization();
            $data['sub_organizations'] = array();
        }
        

        //get current sport from db
        $lst_sports = $this->masterconfig_rp->get_all_sports();
        foreach($lst_sports as $r){
            $data['current_sport'] = $r;
            break;
        }

        $active = 'vi_du';
        return view('dashboard.organization',[
            'data' => $data,
            'active' => $active
            ] );


    }


    /**
     * Display organization start page
     *
     * @return Response
     */
    public function organization_start(){
        return view('dashboard.organization_start');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        //dump($errors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        //$request = Request::all();
        //$this->leagues_rp->insertDataLeagues($request);

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

    /**
    *Store organization information
    */
    public function storeOrganization(){

        Log::info('index: storeOrganization called');

        
        $request = Request::all();

        // $this->validate($request, [
        //     'organization_name' => 'bail|required|max:255',
        //     'pic_fullname' => 'bail|required|max:255',
        //     'pic_position' => 'bail|required|max:255',
        //     'pic_email' => 'bail|required|max:255',
        //     'organization_phone' => 'bail|required|max:255',
        //     'organization_fax' => 'bail|required|max:255',
        // ]);

        $data = new Organization();

        $id = $request['organization_id'];
        $data->organization_name = $request['organization_name'];
        $data->organization_logo = "";
        $data->sport_id = $request['sport_id'];

        $data->pic_fullname = $request['pic_fullname'];
        if(isset($request['pic_position']) && isset($request['pic_other_position']) && $request['pic_position'] == "Other"){
            $data->pic_position = $request['pic_other_position'];
        }else{
            $data->pic_position = $request['pic_position'];
        }
        $data->pic_email = $request['pic_email'];
        $data->pic_jobtitle = $request['pic_jobtitle'];
        $data->pic_phone = $request['pic_phone'];
        $data->pic_phone_other = $request['pic_phone_other'];

        $data->organization_fax = $request['organization_fax'];
        $data->organization_website = $request['organization_website'];
        $data->organization_email = $request['organization_email'];
        $data->organization_phone = $request['organization_phone'];
        $data->organization_address = $request['organization_address'];
        $data->organization_city = $request['organization_city'];
        $data->organization_state = $request['organization_state'];
        $data->organization_zip = $request['organization_zip'];
        $data->organization_country = $request['organization_country'];

        if(isset($request['organization_logo']))
        {

            // $this->validate($request, [
            //     'organization_logo' => 'mimes:jpeg,png,jpg,gif | max:5000',
            // ]);

            $image = $request['organization_logo'];
            $path = $this->AppHelper->uploadFileToS3($image);
            $data->organization_logo = $path;
        }


        if ($id != null && !empty($id)) {
            //update organization
            $result = $this->organization_rp->updateOrganization($id, $data);            
        }else{
            //create new
            $result = $this->organization_rp->insertOrganization($data);            
        }

        $response = array(
            "status" => "success",
            "message" => $result
            );
        
        return  response()->json($response);
    }


    public function storeSubOrganization(){

        $request = Request::all();

        Log::info('index: storeSubOrganization called');

        // $this->validate($request, [
        //     'organization_name' => 'bail|required|max:255',
        //     'pic_fullname' => 'bail|required|max:255',
        //     'pic_position' => 'bail|required|max:255',
        //     'pic_email' => 'bail|required|max:255',
        //     'organization_phone' => 'bail|required|max:255',
        //     'organization_fax' => 'bail|required|max:255',
        // ]);

        $data = new Organization();

        $id = $request['organization_id'];
        $parent_organization = $request['parent_organization'];

        $data->parent_organization = $request['parent_organization'];
        $data->organization_name = $request['organization_name'];
        $data->organization_logo = "";
        $data->sport_id = $request['sport_id'];

        $data->pic_fullname = $request['pic_fullname'];
        // $data->pic_position = $request['pic_position'];
        // $data->pic_email = $request['pic_email'];
        $data->pic_jobtitle = $request['pic_jobtitle'];
        $data->pic_phone = $request['pic_phone'];
        $data->pic_phone_other = $request['pic_phone_other'];

        $data->organization_fax = $request['organization_fax'];
        $data->organization_website = $request['organization_website'];
        $data->organization_email = $request['organization_email'];
        $data->organization_phone = $request['organization_phone'];
        $data->organization_address = $request['organization_address'];
        $data->organization_city = $request['organization_city'];
        $data->organization_state = $request['organization_state'];
        $data->organization_zip = $request['organization_zip'];
        $data->organization_country = $request['organization_country'];

        if(isset($request['sub_organization_logo']))
        {
            // $this->validate($request, [
            //     'organization_logo' => 'mimes:jpeg,png,jpg,gif | max:5000',
            // ]);

            $image = $request['sub_organization_logo'];
            $path = $this->AppHelper->uploadFileToS3($image);
            $data->organization_logo = $path;
        }


        if ($id != null && !empty($id)) {
            //update organization
            $result = $this->organization_rp->updateOrganization($id, $data);            
        }else{
            //create new
            $result = $this->organization_rp->insertOrganization($data);            
        }

        $response = array(
            "status" => "success",
            "message" => $result
            );
        
        return  response()->json($response);
    }
}