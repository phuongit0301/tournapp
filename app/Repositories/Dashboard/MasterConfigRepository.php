<?php

namespace App\Repositories\Dashboard;

use App\Models\Jobtitles;
use App\Models\Countries;
use App\Models\PICPositions;
use App\Models\Timezones;
use App\Models\Sports;
use App\Models\CompetitionTypes;
use App\Models\Genders;

class MasterConfigRepository {
        
    public function __construct() {
       
    }   

    public function get_all_competition_types(){
    	return CompetitionTypes::orderBy('ctype_name', 'asc')->get();
    } 
    
    public function get_all_job_titles(){
    	return Jobtitles::orderBy('jobtitle')->get();
    }
    public function get_all_pic_positions(){
    	return PICPositions::orderBy('position_name')->get();
    }

    public function get_all_sports(){
    	return Sports::orderBy('sport_name', 'asc')->get();
    }

    public function get_all_timezones(){
    	return Timezones::orderBy('timezone_name', 'asc')->get();
    }

    public function get_all_genders(){
    	return Genders::orderBy('gender_name', 'asc')->get();
    }

    public function get_all_countries(){
    	return Countries::orderBy('country_name', 'asc')->get();
    }
    
}