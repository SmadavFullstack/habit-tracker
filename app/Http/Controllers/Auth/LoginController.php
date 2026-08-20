<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(LoginRequest $request)
    {
        // Validate the login form data
        $credentials = $request->only('email', 'password');

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the intended page
            $request->session()->regenerate();
            return redirect()->intended(route('site.dashboard'));
        }

        // Authentication failed, redirect back with an error message
        return back()->withErrors([
            'email' => 'Credências inválidas. Por favor, tente novamente.',
        ]);
    }
    // Logout
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login'));
    }
}
