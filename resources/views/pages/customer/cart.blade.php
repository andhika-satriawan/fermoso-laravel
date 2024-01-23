@extends('layouts.customer.main')

@section('title')
    Cart
@endsection

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Your shopping cart</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading no-line">
                <span class="page-heading-title2">RINGKASAN KERANJANG BELANJA</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content page-order">
                {{-- <ul class="step">
                    <li class="current-step"><span>01. Summary</span></li>
                    <li><span>02. Sign in</span></li>
                    <li><span>03. Address</span></li>
                    <li><span>04. Shipping</span></li>
                    <li><span>05. Payment</span></li>
                </ul> --}}
                <div class="heading-counter warning">Keranjang belanja Anda berisi:
                    <span>{{ count($carts) }} Produk</span>
                </div>
                <div class="order-detail-content">
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                            <tr>
                                <th class="cart_product">Produk</th>
                                <th>Rincian</th>
                                <th>Stok</th>
                                <th>Unit harga</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th class="action"><i class="fa fa-trash-o"></i></th>
                            </tr>
                        </thead>
                        <tbody id="cartSummary">
                            @foreach ($carts as $cart)
                                <tr class="cart-item">
                                    <td class="cart_product">
                                        <a href="#"><img src="{{ Storage::url($cart->product->photo) }}"
                                                alt="Product"></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="product-name"><a href="#">{{ $cart->product->name }}</a></p>
                                        <small class="cart_ref">SKU : #{{ $cart->product_detail->sku }}</small><br>
                                        @if ($cart->product_detail->name != 'DEFAULT')
                                            <small><a href="#">Variant :
                                                    {{ $cart->product_detail->name }}</a></small><br>
                                        @endif
                                    </td>
                                    <td class="cart_avail">
                                        {{-- @if ($cart->product_detail->stock > 5)
                                            <span class="label label-success">In stock:
                                                {{ $cart->product_detail->stock }}</span>
                                        @elseif ($cart->product_detail->stock > 0)
                                            <span class="label label-warning">Remaining:
                                                {{ $cart->product_detail->stock }}</span>
                                        @else
                                            <span class="label label-danger">Out of stock</span>
                                        @endif --}}
                                        <span class="green"><strong>Tersedia</strong></span>
                                    </td>
                                    <td class="price item-price">
                                        @if ($cart->product_detail->discount_price > 0)
                                            <span class="price">Rp
                                                {{ number_format($cart->product_detail->discount_price, 0, ',', '.') }}</span>
                                            <s class="old-price text-danger">Rp
                                                {{ number_format($cart->product_detail->price, 0, ',', '.') }}</s>
                                        @else
                                            <span>Rp {{ number_format($cart->product_detail->price, 0, ',', '.') }}</span>
                                        @endif
                                    </td>
                                    <td class="qty">
                                        <input class="cart-product-id" type="hidden" name="product_id[]"
                                            value="{{ $cart->product_id }}">
                                        <input class="cart-product-detail-id" type="hidden" name="product_detail_id[]"
                                            value="{{ $cart->product_detail_id }}">
                                        <input class="form-control input-sm cart-quantity" name="quantity[]" type="text"
                                            value="{{ $cart->quantity }}">
                                        <a href="#" class="cart-increase"
                                            data-item-price="{{ $cart->product_detail->discount_price > 0 ? $cart->product_detail->discount_price : $cart->product_detail->price }}"><i
                                                class="fa fa-caret-up"></i></a>
                                        <a href="#" class="cart-decrease"
                                            data-item-price="{{ $cart->product_detail->discount_price > 0 ? $cart->product_detail->discount_price : $cart->product_detail->price }}"><i
                                                class="fa fa-caret-down"></i></a>
                                    </td>
                                    <td class="price total-item-price">
                                        <span>Rp
                                            {{ number_format(($cart->product_detail->discount_price > 0 ? $cart->product_detail->discount_price : $cart->product_detail->price) * $cart->quantity, 0, ',', '.') }}</span>
                                    </td>
                                    <td class="action">
                                        <a href="#"
                                            onclick="deleteCartItem('{{ $cart->product_id }}', '{{ $cart->product_detail_id }}')">Delete
                                            item</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" rowspan="2"></td>
                                <td colspan="3">Total produk (termasuk pajak)</td>
                                <td colspan="2">Rp {{ number_format($total_carts, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>Total</strong></td>
                                <td colspan="2"><strong>Rp {{ number_format($total_carts, 0, ',', '.') }}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="cart_navigation">
                        <a class="prev-btn" href="{{ url('/products') }}">Continue shopping</a>
                        <a class="next-btn" href="{{ url('/checkout') }}">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
