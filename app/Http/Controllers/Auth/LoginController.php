<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;  //ESTO HE FUNCIONE EL LOGOUT
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesUsers; //ESTO HE FUNCIONE EL LOGOUT

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/administrador/dashboard';

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
            
        if(Auth::attempt($credentials)){//Si no se ejecuta esta linea el loggeo no se guarda
            $usuario=User::where('email', '=', $email)->first();
            if (Hash::check($password, $usuario->password)){
                if (Auth::user()->rol == "manager" || Auth::user()->rol == "employee"){
                    return redirect('administrador/dashboard');
                }/*
                    elseif($usuario->rol == "employee"){
                        return Redirect::to('administrador/empleado');
                    }*/
                    elseif($usuario->rol == "client"){
                        return Redirect::to('sesion');
                    }
            }
            else {
                return back()->withErrors(['password'=> trans('La contraseña es incorrecta')]);
            }
        
        }
        else{
            return back()->withErrors(['email'=> trans('Verifica tus datos')]);
        }
        
    }
    /*
    public function logout(){ //no lo estoy usando, estoy usando el de laravel
        return Redirect::to('login');
    }
    */

}
