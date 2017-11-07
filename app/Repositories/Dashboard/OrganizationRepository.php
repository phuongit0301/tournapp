<?php

namespace App\Repositories\Dashboard;

use Illuminate\Support\Facades\Auth;
use App\Models\Organization;
use App\Models\UserOrganizations;
use App\Models\Countries;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;

class OrganizationRepository {
        
    public function __construct() {
       
    }    
    

     private function checkSessionValid () {
        if (!Auth::check()) {
            Log::info('checkSessionValid: user not logged in.');
            return false;
        }
        // Get the currently authenticated user...
        $user = Auth::user();
        if (!$user) {
            return false;
        }

        return true;
    }

    private function validateData($model) {

        if (trim($model->organization_name) == "") {
            return __('errormsg.MsgID_3.1');
        }
        return "";
    }

    /**
    param: 
        $id: current organization id to update data
        $model as Organization
    return: the msg for any error or success case. controller should display the message as result of action.
    */
    public function updateOrganization ($id, $model)  {
        Log::info('updateOrganization called: ' .$id . ' with data: ' . print_r( $model, true ));

        if (!$this->checkSessionValid()) {
            // The user is not logged in...
            $resp = __('errormsg.MsgID_1.2');
            Log::info('updateOrganization called: ' .$id . ' resp ==> ' . $resp);            
            return $resp;
        }

        $validateData = $this->validateData($model);

        if (!empty($validateData)) {
            Log::info('updateOrganization called: ' .$id . ' resp ==> ' . $validateData);            
            return $validateData;
        }

        $data = array(
                'organization_name' => $model->organization_name,
                'organization_logo' => $model->organization_logo,
                'sport_id' => $model->sport_id,
                'pic_fullname' => $model->pic_fullname,
                'pic_position' => $model->pic_position,
                'pic_email' => $model->pic_email,
                'pic_jobtitle' => $model->pic_jobtitle,
                'pic_phone' => $model->pic_phone,
                'pic_phone_other' => $model->pic_phone_other,
                'organization_email' => $model->organization_email,
                'organization_website' => $model->organization_website,
                'organization_fax' => $model->organization_fax,
                'organization_phone' => $model->organization_phone,
                'organization_address' => $model->organization_address,
                'organization_city' => $model->organization_city,
                'organization_state' => $model->organization_state,
                'organization_zip' => $model->organization_zip,
                'organization_country' => $model->organization_country,
                'parent_organization' => $model->parent_organization,
                'updated_at' => Carbon::now()
            );
        Organization::where('id', $id)->update($data);
        $resp = __('errormsg.MsgID_3.2'); 
        Log::info('updateOrganization called: ' .$id . ' resp ==> '. $resp);
        return $resp;
    }

    /**
    param: $model as Organization
    return: the msg for any error or success case. controller should display the message as result of action.
    */
    public function insertOrganization ($model)  {
        Log::info('insertOrganization called: with data: ' . print_r( $model, true ));
        if (!$this->checkSessionValid()) {
            //The user is not logged in...
            $resp = __('errormsg.MsgID_1.2');
            Log::info('insertOrganization called: resp ==> ' . $resp);            
            return $resp;    
        }

        $user = Auth::user();
        // var_dump($user);die();
        //checking if there is any existing master organization for this user.
        if ($model->parent_organization == null || empty($model->parent_organization)) {
            $data = Organization::whereHas('user_organization_mapping', function ($query) use ($user) {
                $query->where('user_id', $user->id); 
                })->where('parent_organization', null)->first();
            // var_dump($data);die();
            if ($data != null) { 
                $resp = __('errormsg.MsgID_3.3');
                Log::info('insertOrganization called: resp ==> ' . $resp);            
                return $resp;   
            }
        }
        

        $validateData = $this->validateData($model);
        // var_dump($validateData);die();
        if ($validateData != "") {
            Log::info('insertOrganization called: resp ==> ' . $validateData); 
            return $validateData;
        }

        $data = array(
                'organization_name' => $model->organization_name,
                'organization_logo' => $model->organization_logo,
                'sport_id' => $model->sport_id,
                'pic_fullname' => $model->pic_fullname,
                'pic_position' => $model->pic_position,
                'pic_email' => $model->pic_email,
                'pic_jobtitle' => $model->pic_jobtitle,
                'pic_phone' => $model->pic_phone,
                'pic_phone_other' => $model->pic_phone_other,
                'organization_email' => $model->organization_email,
                'organization_website' => $model->organization_website,
                'organization_phone' => $model->organization_phone,
                'organization_fax' => $model->organization_fax,
                'organization_address' => $model->organization_address,
                'organization_city' => $model->organization_city,
                'organization_state' => $model->organization_state,
                'organization_zip' => $model->organization_zip,
                'organization_country' => $model->organization_country,
                'parent_organization' => $model->parent_organization,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            );
        $newOrgid = Organization::insertGetId($data);
        //insert this organization into mapping
        
        $mappingData = array('organization_id' => $newOrgid, 
                             'user_id' => $user->id,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now());
        $newid = UserOrganizations::insertGetId($mappingData);
        $resp = __('errormsg.MsgID_3.2'); 
        Log::info('insertOrganization called: resp ==> '. $resp);
        return $resp;
    }

    /**
        param:
            $parent_organization parent organization id
        return: array of Organization model
    */
    public function get_sub_organizations($parent_organization) {
        Log::info('get_sub_organizations called: ' .$parent_organization);
        return Organization::where('parent_organization', $parent_organization)->get();
    }

    /**
        param:
            $id organization id
        return: Organization model
    */
    public function get_organization_by_id ($id) {
        Log::info('get_organization_by_id called: ' .$id);
        return Organization::where('id', $id)->first();
    }	

    /** Get the current organization for current user.
        param:
            none
        return: Organization model
    */
    public function get_organization () {
        Log::info('get_organization called');
        if (!$this->checkSessionValid()) {
            // The user is not logged in...
            $resp = __('errormsg.MsgID_1.2');
            Log::info('get_organization called: resp ==> ' . $resp);            
            return $resp;    
        }

        $user = Auth::user();
        $data = Organization::whereHas('user_organization_mapping', function ($query) use ($user) {
                $query->where('user_id', $user->id); 
            })->where('parent_organization', null)->first();
        return $data;
    }
}