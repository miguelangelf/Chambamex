<?php

namespace App\Http\Controllers;


use Auth;
use Hash;
use Session;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input as input;


class LoginController extends Controller
{
    
    public function loadLogin(){
    	return view("login");
    }

    public function closeSession(){
    	//echo "MAL";
    	Auth::logout();
    	return redirect('login');

    }

  

    public function doLogin(Request $request){

    	$rules = array(
		    'email'    => 'required', // make sure the email is an actual email
		    'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		    //alphaNum
		    //email
		);

    	$email=$request->email;
    	$password=$request->password;

    	$userdata = array(
	        'email'     => $email,
	        'password'  => $password
    	);


    	$validator = Validator::make($userdata, $rules);

    	if ($validator->fails()) {
		    return Redirect::to('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); 
		} else{
			if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
				$user = Auth::user();
				Session::put('key', 'value');
        		return redirect('home');            
	        }else{
	        	
	        	return redirect('login');
	        }
		}
   

    }
}
