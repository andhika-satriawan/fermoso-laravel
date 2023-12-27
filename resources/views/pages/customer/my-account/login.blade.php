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

            <!-- ../page heading-->
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box-authentication">
                            <h3>Sudah terdaftar?</h3>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Error!</strong> {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <form action="{{ route('login.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group @error('email') has-error @enderror">
                                    <label for="email_login">Alamat Email <span class="text-danger">*</span></label>
                                    <input id="email_login" type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password') has-error @enderror">
                                    <label for="password_login">Kata Sandi <span class="text-danger">*</span></label>
                                    <input id="password_login" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                                    @error('password')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <p class="forgot-pass"><a href="{{ url('/my-account/lost-password') }}">Forgot your password?</a></p>
                                <button class="button" type="submit"><i class="fa fa-lock"></i> Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
