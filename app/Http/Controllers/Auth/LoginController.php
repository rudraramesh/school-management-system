<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
   public function showloginform()
   {
    return view('auth.login');
   }
   public function login(Request $request)
   {

    $this->validate($request,[
        'email'=>'required',
        'password'=>'required'
        ]);

        if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
        {
            return redirect()->intended(route('admin.home'));
        }
            return redirect()->route('adminlogin')->with('error','username or password doesnot match');
        }


        public function logout(){

Auth::guard('web')->logout();
return redirect()->route('adminlogin');
}

    
}
