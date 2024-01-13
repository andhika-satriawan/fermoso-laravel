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

            <!-- ../page heading-->
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box-authentication">
                            <h3>Belum terdaftar?</h3>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                        <strong>Error!</strong> {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group @error('name') has-error @enderror">
                                    <label for="name">Nama</label>
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('type') has-error @enderror">
                                    <label for="type">Status Pribadi / Clinic<span class="required">*</span></label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="">Pilih Tipe Pelanggan</option>
                                        <option value="Pribadi" @if (old('type') == 'Pribadi') selected @endif>
                                            Pribadi</option>
                                        <option value="Clinic" @if (old('type') == 'Clinic') selected @endif>
                                            Klinik</option>
                                    </select>
                                    @error('type')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('phone') has-error @enderror">
                                    <label for="phone">No. Whatsapp Aktif<span class="required">*</span></label>
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        autocomplete="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx">
                                    @error('phone')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('email') has-error @enderror">
                                    <label for="email">Alamat Email&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        autocomplete="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password') has-error @enderror">
                                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        autocomplete="new-password" value="{{ old('password') }}"><span
                                        class="show-password-input"></span>
                                    @error('password')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password_confirmation') has-error @enderror">
                                    <label for="password_confirmation">Konfirmasi Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                        value="{{ old('password_confirmation') }}"><span
                                        class="show-password-input"></span>
                                    @error('password_confirmation')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="button" type="submit"><i class="fa fa-user"></i> Buat Akun</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
