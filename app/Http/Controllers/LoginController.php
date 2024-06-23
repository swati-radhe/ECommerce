<?php

namespace App\Http\Controllers;
use App\Models\User;
use Carbon\Exceptions\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function getLogin()
    {
        try {
            return view('login');
        } catch (Exception $e) {
        }
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = User::where('email',  $credentials['email'])->first();
// dd($user);
        $credentials['status'] = 'active';
        if (Auth::attempt($credentials)) {
            // dd($credentials);

            if ($user->Type === "Admin") {
                return redirect()->intended('');
            } else {
                return redirect()->intended('/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match.',
        ])->onlyInput('email');
    }
    
}
