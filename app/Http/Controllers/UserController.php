<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    public function getLogin(Request $request){
			//return view('login');
        echo "tesst";
    }
    public function postLogin(Request $request){
    	$email = $request->email;
    	$password = $request->password;
    	echo $request->email;
    	if (Auth::attempt(array('email' => $email, 'password' => $password), true))
		{
		    echo "vl";
		}else{
			echo "vl2";
		}
    }
    public function getResgiter(Request $request){
			return view('resgiter');
    }
    public function logOut(Request $request){
            $this->middleware('guest')->except('logout');
    }
    public function postResgiter(Request $request){
    	$email = $request->email;
    	$password = $request->password;

    	if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
		    //redirect()->route('get.home');
		}else{
			echo "vl2";
		}
    }
}
