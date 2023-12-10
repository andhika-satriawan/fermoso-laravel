<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    /**
     * Display a login page.
     */
    public function login()
    {
       return view('pages.customer.login', [
            "title" => "Login",
            "page"  => "login"
        ]);
    }

    /**
     * Attempt Authentication
     */
    public function login_store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('/')
                ->with('success', 'Login success!');
            // return redirect()->intended(RouteServiceProvider::HOME);
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }



    /**
     * Display a register page.
     */
    public function register()
    {
        return view('pages.customer.register', [
            "title" => "Register",
            "page"  => "register"
        ]);
    }

    /**
     * Attempt Authentication
     */
    public function register_store(Request $request)
    {
        //
    }

}
