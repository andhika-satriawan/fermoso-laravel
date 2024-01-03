@extends('layouts.customer.main')

@section('title')
    My Account || Edit Account
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

        .form-group.half {
            display: inline-block;
            width: calc(50% - 15px);
            overflow: visible;
        }

        legend {
            font-weight: bold;
            margin-top: 30px;
            border-bottom: 1px solid #e5e5e5;
        }

        button.edit-account.button {
            width: 100%;
            font-weight: bold;
            background-color: #ff3366;
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
                <span class="navigation_page">Edit Account</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Edit Account</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-3">
                        @include('pages.customer.my-account.sidebar')
                    </div>
                    <div class="col-sm-9">
                        
                        <div class="box-authentication">
                            <form action="{{ route('my_account.update_account') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h2>Account Details</h2>

                                <div class="form-group @error('name') has-error @enderror">
                                    <label for="name">Nama<span class="required">*</span></label>
                                    <input id="name" type="text" class="form-control" name="name" required
                                        value="{{ Auth::user()->name }}">
                                    @error('email')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('type') has-error @enderror">
                                    <label for="type">Status Pribadi / Clinic<span class="required">*</span></label>
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="">Pilih Tipe Pelanggan</option>
                                        <option value="Pribadi" @if (Auth::user()->type == 'Pribadi') selected @endif>
                                            Pribadi</option>
                                        <option value="Clinic" @if (Auth::user()->type == 'Clinic') selected @endif>
                                            Klinik</option>
                                    </select>
                                    @error('type')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('phone') has-error @enderror">
                                    <label for="phone">No. Whatsapp Aktif<span class="required">*</span></label>
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        autocomplete="phone" required value="{{ Auth::user()->phone }}" placeholder="08xxxxxxxxxx">
                                    @error('phone')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('email') has-error @enderror">
                                    <label for="email">Alamat Email&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" required
                                        autocomplete="email" value="{{ Auth::user()->email }}">
                                    @error('email')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="edit-account button" name="save_account_details"
                                    value="Save changes">SIMPAN PERUBAHAN</button>
                            </form>
                        </div>

                        <div class="box-authentication" style="margin-top: 30px;">

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Error!</strong> {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            <form action="{{ route('my_account.change_password') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <h2>Password change</h2>

                                <div class="form-group @error('password_current') has-error @enderror">
                                    <label for="password_current">Kata sandi saat ini<span class="required">*</span></label>
                                    <input type="password" class="form-control"
                                        name="password_current" id="password_current" autocomplete="off" required>
                                    @error('password_current')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password') has-error @enderror">
                                    <label for="password">Kata sandi baru<span class="required">*</span></label>
                                    <input type="password" class="form-control"
                                        name="password" id="password" autocomplete="off" required>
                                    @error('password')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password_confirmation') has-error @enderror">
                                    <label for="password_confirmation">Konfirmasi kata sandi baru<span class="required">*</span></label>
                                    <input type="password" class="form-control"
                                        name="password_confirmation" id="password_confirmation" autocomplete="off" required>
                                    @error('password_confirmation')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="edit-account button" name="save_account_details"
                                    value="Save changes">UBAH KATA SANDI</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
