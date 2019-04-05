<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(Request $request){

         if($request->isMethod('post')){
                $data =$request->input();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'0'])){
                   return  redirect()->home();
                }else{ 
            return back()->withErrors([
            'message'=> 'Please Check your Credentials and try again.']); 
      
                }
            }
         return view('home.login');

        //redirect  to home
    }

    // public function store(){
    //     //authenticate the user 
    //     if(! auth()->attempt(request(['email','password']))){
    //         return back()->withErrors([
    //         'message'=> 'Please Check your Credentials and try again.']);
    //     }

    //     //redirect  to home
    //     return redirect()->home();
    // }

}
