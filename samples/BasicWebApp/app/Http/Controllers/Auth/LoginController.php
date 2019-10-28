<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\GenericUser;
use Illuminate\Support\Facades\Auth;
use Socialite;

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

    // use AuthenticatesUsers;

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

    /**
     * Redirect the user to the Freee Accounting authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('freeeaccounting')->redirect();
    }

    /**
     * Obtain the user information from Freee Accounting.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('freeeaccounting')->user();

        $genericUser = $user->getRaw();
        $genericUser['token'] = $user->token;
        $genericUser['remember_token'] = '';
        Auth::login(new GenericUser($genericUser));

        return redirect()->intended($this->redirectTo);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
