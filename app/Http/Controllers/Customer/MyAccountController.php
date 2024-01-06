<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\ProductSubcategory;

class MyAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.customer.my-account.index', [
            "page"  => "dashboard",
        ]);
    }

    public function order()
    {
        $transactions = Transaction::where([
            ['customer_id', Auth::id()],
        ])->with(['transaction_details'])->orderBy('id', 'DESC')->get();
        
        return view('pages.customer.my-account.orders', [
            "page"  => 'Orders',
            "transactions"  => $transactions,
        ]);
    }

    public function addresses()
    {
        return view('pages.customer.my-account.addresses', [
            "page"  => "addresses",
        ]);
    }

    public function editaccount()
    {
        return view('pages.customer.my-account.edit-account', [
            "page"  => "edit-account",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'type'      => 'required|string|max:255',
            'email'     => 'required|email|unique:App\Models\Customer,email,'.Auth::id().'',
            'phone'     => 'required|string|max:255',
        ]);

        $customer = Customer::where('id', Auth::id())->firstOrFail();
        $customer->name     = $request->name;
        $customer->type     = $request->type;
        $customer->email    = $request->email;
        $customer->phone    = $request->phone;
        $customer->save();

        return to_route('my_account.dashboard')->with('success', 'Data akun berhasil diubah!');
    }

    public function changePassword(Request $request)
    {
        $validated = $request->validate([
            'password_current'  => 'required',
            'password'          => 'required|confirmed|min:6',
        ]);

        if (Hash::check($request->password_current, Auth::user()->password)) {

            $customer = Customer::where('id', Auth::id())->firstOrFail();
            $customer->password = Hash::make($request->password);
            $customer->save();

            return to_route('my_account.dashboard')->with('success', 'Kata sandi berhasil diubah!');
        }

        return back()->withErrors([
            'password_current' => 'Kata sandi tidak sesuai',
        ])->onlyInput('password');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
