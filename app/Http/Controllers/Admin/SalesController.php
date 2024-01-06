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
use App\Models\Transaction;
use App\Models\TransactionDetail;

class SalesController extends Controller
{
    private $view_path = 'pages.admin.sales.';
    private $route_path = 'admin.sales.';
    private $page_info = [];

    public function __construct()
    {
        $this->page_info['title'] = 'Sales';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with('transaction_details')->orderBy('id')->get();

        return view($this->view_path . 'index', [
            'page_info' => $this->page_info,
            'transactions'  => $transactions
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Transaction::with('transaction_details')
                ->with('transaction_details.product')
                ->with('transaction_details.product_detail')
                ->withSum('transaction_details', 'original_price')
                ->withSum('transaction_details', 'price')
                ->findOrFail($id);

        return view($this->view_path . 'show', [
            'page_info' => $this->page_info,
            'item'      => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_status(Request $request, string $id)
    {
        $validated = $request->validate([
            'status'    => 'required|string|max:255',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status    = $request->status;
        $transaction->save();

        return to_route($this->route_path . 'index')
            ->with('success', 'Transaction status data has been updated successfully');
    }

    public function update_resi(Request $request, string $id)
    {
        $validated = $request->validate([
            'resi'    => 'required|string|max:255',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->resi    = $request->resi;
        $transaction->save();

        return to_route($this->route_path . 'index')
            ->with('success', 'Resi data has been updated successfully');
    }

}
