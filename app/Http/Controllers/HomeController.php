<?php

namespace App\Http\Controllers;


use Auth;
use Session;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function loadHome(Request $request){
    	$user = Auth::user();
    	
    	//print_r($user);
    	return view('home',$user);
    }
}
