@extends('layouts.customer.main')

@section('title')
    My Account || Order
@endsection

@push('addon-style')
    <style>
        .block-addresses h3 {
            font-weight: bold;
            font-size: 24px;
            padding: 30px 0;
        }

        .block-addresses a {
            font-style: italic;
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
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="block-addresses">
                                        <h3>Billing address</h3>
                                        <a href="#" class="edit">Add</a>
                                        <address>You have not set up this type of address yet.</address>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="block-addresses">
                                        <h3>Shipping address</h3>
                                        <a href="#" class="edit">Add</a>
                                        <address>You have not set up this type of address yet.</address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
