@extends('layouts.customer.main')

@section('title')
    My Account || Order
@endsection

@push('addon-style')
    <style>
        .block-addresses h3 {
            font-weight: bold;
            font-size: 24px;
            padding: 0px 0px 30px 0px;
        }

        .block-addresses a {
            font-style: italic;
        }
    </style>
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
                        <div class="addresses-content">
                            <div class="block-addresses">
                                <h3>Alamat Pengiriman</h3>
                            </div>
                            {{-- <h3>Alamat Pengiriman</h3> --}}
                            {{-- <p>The following addresses will be used on the checkout page by default.</p> --}}
                            <div class="row">

                                @foreach ($addresses as $address)
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="address-item">
                                        {{-- <input type="radio" id="{{ $address->id }}-1" name="alamat" value="{{ $address->id }}"> --}}
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
                                    </div>
                                </div>
                                @endforeach
        
                            </div>

                            <div style="margin-top: 25px;">
                                <a href="{{ route('my_account.add_address') }}" class="btn-fermoso">Tambah Alamat</a>
                            </div>

                        </div>
                    </div>
                </div>
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
</script>  
@endpush