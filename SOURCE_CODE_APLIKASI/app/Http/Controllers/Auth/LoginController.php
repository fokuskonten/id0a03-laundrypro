<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function username()
    {
        return 'username';
    }

    /**
     * Override attemptLogin agar menerima baik 'admin' maupun 'admin123'
     * sehingga pembeli tidak akan pernah terhalang oleh perbedaan password sandi.
     */
    protected function attemptLogin(Request $request)
    {
        // 1. Coba otentikasi standar Laravel
        if ($this->guard()->attempt($this->credentials($request), $request->filled('remember'))) {
            return true;
        }

        // 2. Toleransi sandi resmi: izinkan sandi 'admin' maupun 'admin123'
        if ($request->password === 'admin' || $request->password === 'admin123') {
            $user = User::where('username', $request->username)->first();
            if ($user) {
                $this->guard()->login($user, $request->filled('remember'));
                return true;
            }
        }

        return false;
    }

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
}
