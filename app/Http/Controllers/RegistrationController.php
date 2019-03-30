<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create(){
    	// if($request->isMethod('post')){
    	// 	$data = $request->all();
    	// 	echo "<pre>";
    	// 	print_r($data);
    	// 	die;
    	// }
    	return view('home.register');
    }

    public function store(){
 			$this->validate(request(), [
 				'name' => 'required',
 				'email' => 'required',
 				'password' => 'required|confirmed'

 			]);

 			// create and save the user 

 			$user = User::create([
 				'name' => request('name'),
 				'email' => request('email'),
 				'password' => bcrypt(request('password'))
 			]);

 			//sigin them in

 			auth()->login($user);

 			return redirect()->home();  	
    }
}
