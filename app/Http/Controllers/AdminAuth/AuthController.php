<?php

namespace App\Http\Controllers\AdminAuth;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

   
    protected $redirectTo = 'loginform';
    protected $guard='admin';

    public function showlogin()
    {
        if (Auth::guard('admin')->check()) {
            return "login";
        }
        return view('layouts.loginform');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('loginform');
    }
   
}
