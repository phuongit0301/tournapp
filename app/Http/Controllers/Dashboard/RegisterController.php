<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Request;
// use Auth;

class RegisterController extends Controller
{
    /**
     * Login tourn app
     *
     * @return view
     */
    public function login()
    { 
        $request = Request::all();
        // dump($request);die();
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $data = array (
                'status' => 'success',
                'msg' => 'Login success.'
                );
            // return view('dashboard.organization', $data);
            // return redirect('organization');
            return response()->json($data);

        }else{
            $data = array (
                'status' => 'error',
                'msg' => __('errormsg.MsgID_1.1')
                );
            return response()->json($data); 
        }


        // return response()->json($data); 
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    
}