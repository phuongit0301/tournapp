<?php

namespace App\Repositories\Dashboard;

use App\Models\Leagues;

class LeaguesRepository {
        
    public function __construct() {
       
    }    
    
    // Insert value for Organization
    public function insertDataLeagues($request){
        return Leagues::where()->get();
    }	
}