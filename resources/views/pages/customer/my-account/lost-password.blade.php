@extends('layouts.customer.main')

@section('title')
    My Account || Lost Password
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

        .box-authentication form {
            margin-top: 4rem;
        }
    </style>
@endpush

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Authentication</span>
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
                            <p>Lost your password? Please enter your username or email address. You will receive a link to
                                create a new password via email.</p>
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="emmail_register">Email address</label>
                                <input id="emmail_register" type="text" class="form-control">
                                <button class="button"><i class="fa fa-user"></i> Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
