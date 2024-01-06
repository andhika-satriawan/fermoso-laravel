@extends('layouts.admin.main')

@section('title') {{ $page_info['title'] }} @endsection

@section('content')

<div class="page-header">
    <div class="page-title">
      <h4>Show {{ $page_info['title'] }}</h4>
      <h6>View {{ $page_info['title'] }} Detail</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <div class="card-sales-split">
            <h2>Transaction Detail : {{ $item->code }}</h2>
        </div>

        <div class="invoice-box table-height" style="max-width: 1600px;width: 100%;overflow: auto;margin: 15px auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
            <table cellpadding="0" cellspacing="0" style="width: 100%; line-height: inherit; text-align: left">
                <tbody>
                    <tr class="top">
                    <td colspan="6" style="padding: 5px; vertical-align: top">
                        <table style="width: 100%;line-height: inherit;text-align: left;">
                            <tbody>
                                <tr>
                                    <td style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px;width:70%;">
                                        <font style="vertical-align: inherit;margin-bottom:25px;"><font style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">Customer Info</font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> {{ $item->recipient_name }} </font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> {{ $item->customer->email }} </font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> {{ $item->phone }} </font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> {{ $item->shipping_address }} </font></font><br>
                                    </td>
                                    <td style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px;width:15%;">
                                        <font style="vertical-align: inherit;margin-bottom:25px;"><font style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">Invoice Info</font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> Reference </font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> Shipping Status ({{ strtoupper($item->courier) }} - {{ $item->service }})</font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> Status</font></font><br>
                                    </td>
                                    <td style="padding:5px;vertical-align:top;text-align:right;padding-bottom:20px;width:15%;">
                                        <font style="vertical-align: inherit;margin-bottom:25px;"><font style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px; ">&nbsp;</font></font><br>
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;"> {{ $item->code }} </font></font><br>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;font-size: 14px;color:#2E7D32;font-weight: 400;"> {{ $item->shipping_status }}</font>
                                        </font><br>
                                        <font style="vertical-align: inherit;">
                                            @if ($item->transaction_status == 'PENDING')
                                                <font style="vertical-align: inherit;font-size: 14px;color: #ea5455;font-weight: 400;"> {{ $item->transaction_status }} </font>
                                            @elseif ($item->transaction_status == 'PROCESS')
                                                <font style="vertical-align: inherit;font-size: 14px;color: #f90;font-weight: 400;"> {{ $item->transaction_status }} </font>
                                            @elseif ($item->transaction_status == 'SUCCESS')
                                                <font style="vertical-align: inherit;font-size: 14px;color: #28c76f;font-weight: 400;"> {{ $item->transaction_status }} </font>
                                            @elseif ($item->transaction_status == 'CANCELLED')
                                                <font style="vertical-align: inherit;font-size: 14px;color: #637381;font-weight: 400;"> {{ $item->transaction_status }} </font>
                                            @else
                                            Undefined
                                            @endif
                                        </font><br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    </tr>
                    <tr class="heading" style="background: #f3f2f7">
                        <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5e5873;font-size: 14px;padding: 10px;">
                            Product Name
                        </td>
                        <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5e5873;font-size: 14px;padding: 10px;">
                            QTY
                        </td>
                        <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5e5873;font-size: 14px;padding: 10px;">
                            Weight
                        </td>
                        <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5e5873;font-size: 14px;padding: 10px;">
                            Price
                        </td>
                        <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5e5873;font-size: 14px;padding: 10px;">
                            Discount
                        </td>
                        <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5e5873;font-size: 14px;padding: 10px;">
                            TAX
                        </td>
                        <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5e5873;font-size: 14px;padding: 10px;">
                            Subtotal
                        </td>
                    </tr>

                    @foreach ($item->transaction_details as $detail)
                    <tr class="details" style="border-bottom: 1px solid #e9ecef">
                        <td style="padding: 10px;vertical-align: top;display: flex;align-items: center;">
                            <img src="{{ Storage::url($detail->product->photo) }}" alt="img" class="me-2" style="width: 40px; height: 40px"/>
                            <div style="display: flex; flex-direction: column">
                                {{ $detail->product->name }}
                                <small>SKU : #{{ $detail->product_detail->sku }}</small>
                                @if ($detail->product_detail->name != "DEFAULT")
                                <small>Variant : {{ $detail->product_detail->name }}</small>
                                @endif
                            </div>
                        </td>
                        <td style="padding: 10px; vertical-align: top">
                            {{ $detail->quantity }}
                        </td>
                        <td style="padding: 10px; vertical-align: top">
                            {{ ($detail->quantity * $detail->product_detail->weight)/1000 }} KG
                        </td>
                        <td style="padding: 10px; vertical-align: top">
                            
                            @if ($detail->original_price > $detail->price)
                                <s class="text-danger">Rp {{ number_format($detail->original_price) }}</s>
                                Rp {{ number_format($detail->price) }}
                            @else
                                Rp {{ number_format($detail->price) }}
                            @endif
                        </td>
                        <td style="padding: 10px; vertical-align: top">
                            {{ number_format($detail->original_price - $detail->price) }}
                        </td>
                        <td style="padding: 10px; vertical-align: top">0.00</td>
                        <td style="padding: 10px; vertical-align: top">
                            Rp {{ number_format($detail->total) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-lg-6 ">
                <div class="total-order w-100 max-widthauto m-auto mb-4">
                    <ul>
                        <li>
                            <h4>Order Tax</h4>
                            <h5>$ 0.00 (0.00%)</h5>
                        </li>
                        <li>
                            <h4>Discount</h4>
                            <h5>Rp {{ number_format($item->transaction_details_sum_original_price - $item->transaction_details_sum_price) }}</h5>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="total-order w-100 max-widthauto m-auto mb-4">
                    <ul>
                        <li>
                            <h4>Total</h4>
                            <h5>Rp {{ number_format($item->total_price) }}</h5>
                        </li>
                        <li>
                            <h4>Shipping ({{ strtoupper($item->courier) }} - {{ $item->service }})</h4>
                            <h5>Rp {{ number_format($item->shipping_price) }}</h5>
                        </li>
                        <li class="total">
                            <h4>Grand Total</h4>
                            <h5>Rp {{ number_format($item->total) }}</h5>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
                <form action="{{ route('admin.sales.update_status', $item->id) }}" id="formSubmission" method="post"
                id="" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Status Pesanan</label>
                        <select class="select @error('status') is-invalid @enderror" name="status" required>
                            <option value="">Choose Status</option>
                            <option value="PENDING" @if ($item->transaction_status == 'PENDING') selected @endif>Pending</option>
                            <option value="PROCESS" @if ($item->transaction_status == 'PROCESS') selected @endif>Proses</option>
                            <option value="SUCCESS" @if ($item->transaction_status  == 'SUCCESS') selected @endif>Completed</option>
                            <option value="CANCELLED" @if ($item->transaction_status == 'CANCELLED') selected @endif>Cancelled</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit"  class="btn btn-submit">Update Status</button>
                </form>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
                <form action="{{ route('admin.sales.update_resi', $item->id) }}" id="formSubmission" method="post"
                    id="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>No. Resi Pengiriman</label>
                        <input type="text" class="form-control @error('resi') is-invalid @enderror"
                            id="resi" placeholder="No. Resi" name="resi" value="{{ $item->resi }}" autocomplete="off" required>
                        @error('resi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit"  class="btn btn-submit">Update Resi</button>
                </form>
            </div>
        </div>



    </div>
</div>
@endsection

@push('addon-style')
@endpush

@push('prepend-script')
@endpush

@push('addon-script')
@if ($message = Session::get('success'))
<script type="text/javascript">
    Swal.fire({
        icon: 'success',
        title: 'Success..',
        text: '{{ $message  }}',
    })
</script>
@endif
@if ($message = Session::get('error'))
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Error..',
        text: '{{ $message  }}',
    })
</script>
@endif
@endpush