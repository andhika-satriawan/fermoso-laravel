@extends('layouts.customer.main')

@section('title')
    My Account || Dashboard
@endsection

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">My Account</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">{{ $page }}</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-3">
                        @include('pages.customer.my-account.sidebar')
                    </div>
                    <div class="col-sm-9">
                        <div class="box-right">
                            <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                                @csrf
                            </form>
                            <p>
                                Hello <strong>{{ Auth::user()->name }}</strong> (not <strong>{{ Auth::user()->name }}</strong>? <a
                                    onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" style="cursor: pointer;">Logout</a>)
                            </p>
                            <p>
                                From your account dashboard you can view your <a
                                    href="{{ url('/my-account/order') }}">recent orders</a>, manage your
                                <a href="{{ url('/my-account/edit-address') }}">shipping and billing
                                    addresses</a>, and <a href="{{ url('/my-account/edit-account') }}">edit your password
                                    and
                                    account details</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
