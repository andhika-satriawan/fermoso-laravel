@extends('layouts.customer.main')

@section('title')
    Checkout
@endsection

@push('addon-style')
    <style>
        a.add-address {
            color: #ff3366;
            font-weight: bold;
        }

        .box-border .row {
            margin-top: 15px;
        }

        .address-item {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            clear: both;
            background: #f6f6f6;
        }

        .address-item input[type="radio"] {
            width: 20px;
            height: 20px;
            background-color: #ccc;
        }

        /* .address-item input:checked+label {
            font-weight: bold;
            color: #333;
        } */

        div.address-item.selected {
            background: #ff3366;
            font-weight: bold;
            color: #333;
        }

        div.address-item.selected a {
            color: #ffffff;
        }

        .address-item input {
            float: right;
        }

        .address-item h4 {
            font-weight: bold;
            font-size: 24px;
        }

        .address-item h5 {
            font-weight: bold;
            color: #666;
            font-size: 18px;
            padding-bottom: 20px;
        }

        .address-item a {
            color: #ff3366;
        }
    </style>
@endpush

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Checkout</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Checkout</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content checkout-page">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Error!</strong> {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form action="{{ route('checkout.store') }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
                @csrf
                    <h3 class="checkout-sep">1. Pilih Alamat Tujuan Kamu</h3>
                    <div class="box-border">
                        <a href="{{ route('my_account.add_address') }}" class="add-address">Tambah Alamat</a>
                        <div class="row">
                            <ul class="col-sm-4 owl-carousel" data-dots="false" data-loop="true" data-nav = "true"
                                data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true"
                                data-responsive='{"0":{"items":2},"600":{"items":3},"1000":{"items":3}}'>

                                @foreach ($addresses as $address)
                                <li>
                                    <div class="address-item">
                                        <input type="radio" id="{{ $address->id }}-1" name="address_id" value="{{ $address->id }}">
                                        <label for="{{ $address->id }}-1">
                                            <h4>{{ $address->label }}</h4>
                                            <h5>{{ $address->recipient_name }}</h5>
                                            <p>
                                                {{ $address->address_detail }},
                                                {{ $address->kelurahan }},
                                                {{ $address->kecamatan->kecamatan_name }},
                                                {{ $address->city->city_name }},
                                                {{ $address->province->province_name }},
                                                {{ $address->postal_code }}
                                            </p>
                                            <a href="{{ route('my_account.address.edit', $address->id) }}">Edit</a>
                                        </label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <h3 class="checkout-sep">2. Jasa Pengiriman</h3>
                    <div class="box-border">
                        <ul class="shipping_method">
                            <li>
                                <label for="jne"><input type="radio" name="courier" id="jne" value="jne">JNE</label>
                            </li>
                            <li>
                                <label for="tiki"><input type="radio" name="courier" id="tiki" value="tiki">TIKI</label>
                            </li>
                            <li>
                                <label for="sicepat"><input type="radio" name="courier" id="sicepat" value="sicepat">Si Cepat</label>
                            </li>
                        </ul>
                    </div>
                    <h3 class="checkout-sep">3. Ongkos Pengiriman</h3>
                    <div class="box-border">
                        <div class="loader" id="loaderShippingOption" style="display: none;"></div>
                        <input type="hidden" name="shipping_price" value="">
                        <input type="hidden" name="service" value="">
                        <ul id="shippingOption">
                            <!-- Generated from AJAX -->
                        </ul>
                    </div>
                    <h3 class="checkout-sep">6. Order Review</h3>
                    <div class="box-border">
                        <table class="table table-bordered table-responsive cart_summary">
                            <thead>
                                <tr>
                                    <th class="cart_product">Produk</th>
                                    <th>Rincian</th>
                                    <th>Stok</th>
                                    <th>Unit harga</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                <tr>
                                    <td class="cart_product">
                                        <a href="#"><img src="{{ Storage::url($cart->product->photo) }}"
                                                alt="Product"></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="product-name"><a href="#">{{ $cart->product->name }}</a></p>
                                        <small class="cart_ref">SKU : #{{ $cart->product_detail->sku }}</small><br>
                                        @if ($cart->product_detail->name != "DEFAULT")
                                        <small><a href="#">Variant : {{ $cart->product_detail->name }}</a></small><br>
                                        @endif
                                    </td>
                                    <td class="cart_avail">
                                        @if ($cart->product_detail->stock > 5)
                                        <span class="label label-success">In stock: {{ $cart->product_detail->stock }}</span>
                                        @elseif ($cart->product_detail->stock > 0)
                                        <span class="label label-warning">Remaining: {{ $cart->product_detail->stock }}</span>
                                        @else
                                        <span class="label label-danger">Out of stock</span>
                                        @endif
                                    </td>
                                    <td class="price item-price">
                                        @if ($cart->product_detail->discount_price > 0 )
                                        <span class="price">Rp {{ number_format($cart->product_detail->discount_price) }}</span>
                                        <s class="old-price text-danger">Rp {{ number_format($cart->product_detail->price) }}</s>
                                        @else
                                        <span>Rp {{ number_format($cart->product_detail->price) }}</span>
                                        @endif
                                    </td>
                                    <td class="qty">
                                        {{ $cart->quantity }}
                                    </td>
                                    <td class="price">
                                        <span>Rp {{ number_format(($cart->product_detail->discount_price > 0 ? $cart->product_detail->discount_price : $cart->product_detail->price) * $cart->quantity) }}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" rowspan="3"></td>
                                    <td colspan="3">Subtotal</td>
                                    <td>Rp {{ number_format($total_carts) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Pengiriman</td>
                                    <td id="shippingCost">Rp 0</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><strong>Total</strong></td>
                                    <td><strong id="totalCost">Rp 0</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                        <button class="btn button pull-right" type="submit">Submit Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
<script>
    $("input[name='alamat']").change(function(){
        $('.address-item').removeClass("selected");
        const addressItem = $(this).closest('.address-item'); // Get the parent div with class address-item
        if ($(this).is(':checked')) {
            addressItem.addClass("selected"); // Add selected class to change background
        } else {
            addressItem.removeClass("selected"); // Remove selected class if not checked
        }
    });

    $('input[type=radio][name="courier"]').on('change', function() {
        // console.log($(this).val());
        const address_id = $('input[name="address_id"]:checked').val();
        const courier = $(this).val();

        if (address_id == '' || address_id == null) {
            Swal.fire("Error!", 'Mohon pilih alamat kamu!', "error");
            $('input[type=radio][name="courier"]').removeAttr('checked');
        } else {

            $("#loaderShippingOption").show();
            $("#shippingOption").hide();
    
            $.ajax({
                type: 'POST',
                url: '{{ route('api.shipping_api') }}',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    address_id: address_id,
                    courier: courier,
                },
                dataType: 'JSON',
                error: function(error) {
                    console.log(error);
                    // Swal.fire("Error!", 'Something is wrong', "error");
                },
                success: function (response) {
                    console.log(response)
    
                    $("#loaderShippingOption").hide();
                    $("#shippingOption").show();
                    // console.log(response.rajaongkir.results[0].costs);
                    if (response.success == true) {
    
                        const responseData = response.data.results[0].costs;
    
                        const selectList= responseData.map((e) => {
                            return `
                                <li>
                                    <label for="shipping_option-${e.service}">
                                        <input 
                                            type="radio" 
                                            name="shipping_option" 
                                            id="shipping_option-${e.service}" 
                                            value="${e.cost[0].value}"
                                            data-cost="${e.cost[0].value}"
                                            data-service="${e.service}"
                                        >
                                            ${e.service} - Rp ${e.cost[0].value.toLocaleString()} (${e.cost[0].etd} hari)
                                    </label>
                                </li>
                            `;
                        });
                        $('#shippingOption').html('')
                        .append(selectList)
    
    
                    } else {
                        console.log(response)
                        // Swal.fire("Error!", response.message, "error");
                    }
                }
            });
        }


    });

    $(document).on('change','input[type=radio][name="shipping_option"]',function() {
        // console.log($(this).val());
        const total_carts = {{ $total_carts }};
        const shipping_cost = $(this).attr("data-cost");
        const shipping_service = $(this).attr("data-service");

        $('input[name="service"]').val(shipping_service);
        $('input[name="shipping_price"]').val(shipping_cost);

        $('#shippingCost').text(`Rp ${parseInt(shipping_cost).toLocaleString()}`);
        $('#totalCost').text(`Rp ${(parseInt(total_carts)+parseInt(shipping_cost)).toLocaleString()}`);
    });
</script>  
@endpush
