<?php

namespace App\Repositories\Dashboard;

use App\Models\Tournament;

class TournamentRepository {
        
    public function __construct() {
       
    }    
    
    // Insert value for Organization
    public function insertDataTournament($request){
        return Leagues::where()->get();
    }	
}