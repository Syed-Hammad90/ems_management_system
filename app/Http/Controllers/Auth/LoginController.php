<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Client\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated()
    {

        if (Auth::User()->role_id == 1) {

                return redirect()->route('admin.dashboard');
            } elseif (Auth::User()->role_id == 2) {

                return redirect()->route('member.dashboard');
        } else {

            Auth::logout();
            return redirect()->route('login')->with('delete', 'You are deactivated !');
        }

        // Default redirection if no specific role is matched
        // return redirect('/default-route');
    }
}
