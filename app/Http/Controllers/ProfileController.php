<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\InfoUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function view($id){
    	$user = Auth::user();
    	return view('profile',$user);
    }

    public function edit(){
    	echo "VAS A EDITAR";
    }

    public function myprofile(){

    	$user = Auth::user();
    	$id=$user["id"];
    	$mod_user = User::find($id);
    	//$extras=InfoUser::find($id);
    	$extra=$mod_user->infouser;
    	return view('profile')->with('user',$mod_user)->with('extra',$extra);
    }
}
