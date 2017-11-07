<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Request;

class RegisterController extends Controller
{
    /**
     * Login tourn app
     *
     * @return view
     */
    public function login()
    {
        $email = Request::get ( 'email' );
        $password = Request::get ( 'pass' );

        if( $email == 'admin@gmail.com' && $password == 123456){
            $data = array (
                    'status' => 'success',
                    'msg' => ''
            );

            return response()->json($data);
        }else{
            $data = array (
                    'status' => 'error',
                    'msg' => 'Your email / password is incorrect! Please try again.'
            );

            return response()->json($data);
        }        
        
    }

    
}