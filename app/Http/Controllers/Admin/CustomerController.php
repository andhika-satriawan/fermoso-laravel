<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Carbon\Carbon as Carbon;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\Facades\Image;
// use DataTables;
use App\Models\Customer;

class CustomerController extends Controller
{
    private $view_path = 'pages.admin.customer.';
    private $route_path = 'admin.customer.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Customer';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderBy('name', 'desc')->get();
        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'customers' => $customers
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
