<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the login data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard'); // Redirect to dashboard or any other authenticated page
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput($request->only('email'));
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
