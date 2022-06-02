<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('welcome');
        }
        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $rules = [
            'email' => 'required|exists:users',
            'password' => 'required',
        ];
        $messages = [
            'password.required' => 'Şifre zorunludur.',
            'email.required' => 'Email zorunludur.',
            'email.exists' => 'Bu email kayıtlı değil.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('welcome');
        }
        return redirect()->route('login')->withError('Şifre yanlış!');
    }
    
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}