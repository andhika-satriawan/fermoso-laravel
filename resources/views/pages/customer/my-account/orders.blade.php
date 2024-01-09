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
                                    @foreach ($transactions as $transaction)
                                    <tr>
                                        <td class="order_product">
                                            <a href="#">#{{ $transaction->code }}</a>
                                        </td>
                                        <td class="order_date">{{ $transaction->created_at }}</td>

                                        @if ($transaction->transaction_status == 'PENDING')
                                        <td class="order_status text-danger"><strong>{{ $transaction->transaction_status }}</strong></td>
                                        @elseif ($transaction->transaction_status == 'PROCESS')
                                        <td class="order_status text-warning"><strong>{{ $transaction->transaction_status }}</strong></td>
                                        @elseif ($transaction->transaction_status == 'SUCCESS')
                                        <td class="order_status text-success"><strong>{{ $transaction->transaction_status }}</strong></td>
                                        @elseif ($transaction->transaction_status == 'CANCELLED')
                                        <td class="order_status text-secondary"><strong>{{ $transaction->transaction_status }}</strong></td>
                                        @else
                                        <td class="order_status text-secondary"><strong>{{ $transaction->transaction_status }}</strong></td>
                                        @endif

                                        <td class="price"><span>Rp {{ number_format($transaction->total) }}</span></td>
                                        <td><a href="{{ route('my_account.order.detail', $transaction->id) }}">View</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
