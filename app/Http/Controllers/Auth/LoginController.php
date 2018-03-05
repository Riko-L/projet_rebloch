<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/profil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {

        session()->flash('status', 'Bienvenue sur rebloch\' Social');

        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        // Do your logic to flash data to session...

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';


        // Return the results of the method we are overriding that we aliased.

    }

}
