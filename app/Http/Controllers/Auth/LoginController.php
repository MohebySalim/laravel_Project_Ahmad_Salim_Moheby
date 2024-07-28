<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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

    // overwrite by noor tawhidi
    protected function credentials(Request $request)
    {
        return ['email'=>$request->email, 'password'=>$request->password, 'status'=>1];
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|exists:users,' . $this->username() . ',status,1',
            'password' => 'required',
        ], [
            $this->username() . '.exists' => 'کاربر متذکره غیر فعال و یا موجود نمیباشد'
        ]);
    }


    protected function authenticated()
    {
        app()->setLocale('en');
        session()->put('locale', 'en');
        return redirect('/home');
    }
}
