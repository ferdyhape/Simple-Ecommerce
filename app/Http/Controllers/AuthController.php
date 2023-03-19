<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function authenticate(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('toast_error', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function store(StoreUserRequest $request)
    {

        $newUser = $request->all();
        $newUser['role_id'] = 2;
        $newUser['password'] = Hash::make($newUser['password']);
        User::create($newUser);

        // $request->session()->with('success', 'Registration is successful, please login');

        return redirect('/login')->with('toast_success', 'Registration is successful, Please login!');
    }
}
