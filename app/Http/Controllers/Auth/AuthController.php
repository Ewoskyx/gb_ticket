<?php
namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('stats');
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
            return redirect()->route('stats');
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