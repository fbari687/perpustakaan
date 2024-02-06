<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('main.login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1 || auth()->user()->role_id === 2) {
                return redirect('/dashboard');
            } else {
                return redirect('/');
            }
        }

        return redirect('/login')->with([
            'failed' => 'Invalid Username / Password'
        ]);
    }

    public function registerView()
    {
        return view('main.register', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'username' => 'required|min:2|unique:users,username',
            'email' => 'required|email|min:4',
            'telp' => 'required|numeric|min:8',
            'password' => 'required'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);

        if ($user) {
            return redirect('/register/success')->with('success', $user->name);
        } else {
            return redirect('/register');
        }
    }

    public function registerSuccess(Request $request)
    {
        if ($request->session()->get('success')) {
            return view('main.registerSuccess');
        }
        return redirect('/register');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
