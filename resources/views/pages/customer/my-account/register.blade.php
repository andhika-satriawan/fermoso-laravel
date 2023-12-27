@extends('layouts.customer.main')

@section('title')
    My Account || Register
@endsection

@push('addon-style')
    <style>
        .box-authentication input,
        .box-authentication select {
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

                            <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input id="nama" type="text" class="form-control" name="name"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="type">Status Pribadi / Clinic<span class="required">*</span></label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="Pribadi" @if (old('type') == 'Pribadi') selected @endif>
                                            Pribadi</option>
                                        <option value="Clinic" @if (old('type') == 'Clinic') selected @endif>
                                            Klinik</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="phone">No. Whatsapp Aktif<span class="required">*</span></label>
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        autocomplete="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        autocomplete="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        autocomplete="new-password"><span class="show-password-input"></span>
                                </div>
                                <button class="button"><i class="fa fa-user"></i> Create an account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
