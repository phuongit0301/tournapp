<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {
        
    public function __construct() {
       
    }    
    
    public function getAllUser(){
        // code here
    }
    public function save($user_data){
    	$user = User::create(['name' => 'admin'], 'email' => 'admin@gmail.com', 'password' => bcrypt('abcd1234'));
    }
}