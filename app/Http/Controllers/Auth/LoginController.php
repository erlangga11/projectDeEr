<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use app\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
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
    public function redirectTo()
     {
      $for = [
      'admin' => 'homesiswa',
      'siswa' => 'homesiswa',
      'dosen' => 'homesiswa',
      ];
      return $this->redirectTo = route($for[auth()->user()->roles]);
     }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            ],[
            'email.required' => 'Email Tidak Boleh kosong',
            'password.required' => 'Password Tidak Boleh kosong',
        ]);
    }
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
