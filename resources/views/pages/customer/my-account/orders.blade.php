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
                        <div class="order-detail-content">
                            <table class="table table-bordered table-responsive cart_summary">
                                <thead>
                                    <tr>
                                        <th class="cart_product">Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="order_product">
                                            <a href="#">#123</a>
                                        </td>
                                        <td class="order_date">12 Desember 2024</td>
                                        <td class="order_status">Processing</td>
                                        <td class="price"><span>Rp300.000</span></td>
                                        <td><a href="">View</a></td>
                                    </tr>
                                    <tr>
                                        <td class="order_product">
                                            <a href="#">#123</a>
                                        </td>
                                        <td class="order_date">12 Desember 2024</td>
                                        <td class="order_status">Processing</td>
                                        <td class="price"><span>Rp300.000</span></td>
                                        <td><a href="">View</a></td>
                                    </tr>
                                    <tr>
                                        <td class="order_product">
                                            <a href="#">#123</a>
                                        </td>
                                        <td class="order_date">12 Desember 2024</td>
                                        <td class="order_status">Processing</td>
                                        <td class="price"><span>Rp300.000</span></td>
                                        <td><a href="">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
