@extends('layouts.customer.main')

@section('title')
    My Account || Order
@endsection

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <a class="home" href="{{ url('/my-account') }}" title="My Account">My Account</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Orders</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">{{ $page }}</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content page-order">
                <div class="row">
                    <div class="col-sm-3">
                        @include('pages.customer.my-account.sidebar')
                    </div>
                    <div class="col-sm-9">

                        <div class="row">
                            <div class="col-md-6">
                                <h4 style="margin-bottom: 25px;">Customer Info</h4>
                                <table class="table">
                                    <tr>
                                        <td>Penerima</td>
                                        <td>{{ $item->recipient_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $item->customer->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>No. Telepon</td>
                                        <td>{{ $item->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Pengiriman</td>
                                        <td>{{ $item->shipping_address }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h4 style="margin-bottom: 25px;">Invoice Info</h4>
                                <table class="table">
                                    <tr>
                                        <td>No. Order</td>
                                        <td>{{ $item->code }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Pengiriman</td>
                                        <td>{{ $item->shipping_status }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jasa Pengiriman</td>
                                        <td>
                                            {{ strtoupper($item->courier) }} - {{ $item->service }}
                                            @if ($item->resi)
                                                <br>No. Resi: {{ $item->resi }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status Pesanan</td>
                                        @if ($item->transaction_status == 'PENDING')
                                            <td class="text-danger"><strong>{{ $item->transaction_status }}</strong></td>
                                        @elseif ($item->transaction_status == 'DIKEMAS')
                                            <td class="text-warning"><strong>{{ $item->transaction_status }}</strong></td>
                                        @elseif ($item->transaction_status == 'DALAM PENGIRIMAN')
                                            <td class="text-warning"><strong>{{ $item->transaction_status }}</strong></td>
                                        @elseif ($item->transaction_status == 'SELESAI')
                                            <td class="text-success"><strong>{{ $item->transaction_status }}</strong></td>
                                        @elseif ($item->transaction_status == 'CANCELLED')
                                            <td class="text-secondary"><strong>{{ $item->transaction_status }}</strong>
                                            </td>
                                        @else
                                            <td class="text-secondary"><strong>{{ $item->transaction_status }}</strong>
                                            </td>
                                        @endif
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                {{-- Order Detail --}}
                                <div class="order-detail-content">
                                    <table class="table table-bordered table-responsive cart_summary">
                                        <thead>
                                            <tr>
                                                <th class="cart_product">Produk</th>
                                                <th>Rincian</th>
                                                <th>Unit harga</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($item->transaction_details as $detail)
                                                <tr>
                                                    <td class="cart_product">
                                                        <a href="#"><img
                                                                src="{{ Storage::url($detail->product->photo) }}"
                                                                alt="Product"></a>
                                                    </td>
                                                    <td class="cart_description">
                                                        <p class="product-name"><a
                                                                href="#">{{ $detail->product->name }}</a></p>
                                                        <small class="cart_ref">SKU :
                                                            #{{ $detail->product_detail->sku }}</small><br>
                                                        @if ($detail->product_detail->name != 'DEFAULT')
                                                            <small><a href="#">Variant :
                                                                    {{ $detail->product_detail->name }}</a></small><br>
                                                        @endif
                                                    </td>
                                                    <td class="price item-price">
                                                        @if ($detail->product_detail->discount_price > 0)
                                                            <span class="price">Rp
                                                                {{ number_format($detail->product_detail->discount_price, 0, ',', '.') }}</span>
                                                            <s class="old-price text-danger">Rp
                                                                {{ number_format($detail->product_detail->price, 0, ',', '.') }}</s>
                                                        @else
                                                            <span>Rp
                                                                {{ number_format($detail->product_detail->price, 0, ',', '.') }}</span>
                                                        @endif
                                                    </td>
                                                    <td class="qty">
                                                        {{ $detail->quantity }}
                                                    </td>
                                                    <td class="price">
                                                        <span>Rp
                                                            {{ number_format(($detail->product_detail->discount_price > 0 ? $detail->product_detail->discount_price : $detail->product_detail->price) * $detail->quantity, 0, ',', '.') }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">Subtotal</td>
                                                <td>Rp
                                                    {{ number_format($item->transaction_details_sum_original_price, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Discount</td>
                                                <td>Rp
                                                    {{ number_format($item->transaction_details_sum_original_price - $item->transaction_details_sum_price, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Total</td>
                                                <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Pengiriman ({{ strtoupper($item->courier) }} -
                                                    {{ $item->service }})</td>
                                                <td id="shippingCost">Rp
                                                    {{ number_format($item->shipping_price, 0, ',', '.') }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"><strong>Grand Total</strong></td>
                                                <td><strong id="totalCost">Rp
                                                        {{ number_format($item->total, 0, ',', '.') }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
