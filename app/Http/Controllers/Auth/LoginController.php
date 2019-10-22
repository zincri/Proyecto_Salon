<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;

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
    public function login(){
        $request =  request();
        $credentials=$this->validate(request(),[
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        if($email == "zincri@gmail.com" && $password == "123456" || $email == "jhoana@gmail.com" && $password == "123456"){
            return Redirect::to('administrador/dashboard');
        }
        elseif($email == "empleado@gmail.com" && $password == "123456"){
            return Redirect::to('administrador/empleado');
        }
        elseif($email == "cliente@gmail.com" && $password == "123456"){
            return Redirect::to('sesion');
        }
        else{
            return back()->withErrors(['email'=> trans('Este usuario no existe')]);
        }
    }

    public function logout(){
        return Redirect::to('/login');
    }

}
