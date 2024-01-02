<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return view('pages.customer.my-account.orders', [
            "page"  => "orders",
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
