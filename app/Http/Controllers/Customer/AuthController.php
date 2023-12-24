<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\ProductSubcategory;

class AuthController extends Controller
{
    /**
     * Display a login page.
     */
    public function login()
    {
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();

        return view('pages.customer.my-account.login', [
            "title" => "Login",
            "page"  => "login",
            "product_subcategories" => $product_subcategories,
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
            return redirect()->route('home')
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
        $product_subcategories = ProductSubcategory::with(['products', 'details'])->orderBy('id')->get();

        return view('pages.customer.my-account.register', [
            "title" => "Register",
            "page"  => "register",
            "product_subcategories" => $product_subcategories,
        ]);
    }

    /**
     * Attempt Authentication
     */
    public function register_store(Request $request)
    {
        $credentials = $request->validate([
            'name'      => 'required|string|max:255',
            'type'      => 'required|string|max:255',
            'email'     => 'required|email|unique:App\Models\Customer,email',
            'password'  => 'required|string|max:255',
            'phone'     => 'required|string|max:255',
        ]);

        $customer = new Customer;
        $customer->name     = $request->name;
        $customer->type     = $request->type;
        $customer->email    = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->phone    = $request->phone;
        $customer->save();

        return to_route('login')->with('success', 'Registration success!');
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }
}
