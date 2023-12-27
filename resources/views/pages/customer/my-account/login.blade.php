@extends('layouts.customer.main')

@section('title')
    My Account || Login
@endsection

@push('addon-style')
    <style>
        .box-authentication input {
            border-radius: 0px;
            border: 1px solid #eaeaea;
            -webkit-box-shadow: inherit;
            box-shadow: inherit;
            width: 100%;
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
                <span class="navigation_page">Login</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Authentication</span>
            </h2>

            @if ($errors->any())
                <ul class="woocommerce-error" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>
                            <strong>Error:</strong> {{ $error }}.
                        </li>
                    @endforeach
                </ul>
            @endif

            <!-- ../page heading-->
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box-authentication">
                            <h3>Already registered?</h3>

                            <form action="{{ route('login.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="emmail_login">Email address</label>
                                <input id="emmail_login" type="text" class="form-control" name="email"
                                    value="{{ old('email') }}">
                                <label for="password_login">Password</label>
                                <input id="password_login" type="password" class="form-control" name="password"
                                    value="{{ old('password') }}">
                                <p class="forgot-pass"><a href="{{ url('/my-account/lost-password') }}">Forgot your
                                        password?</a></p>
                                <button class="button"><i class="fa fa-lock"></i> Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
