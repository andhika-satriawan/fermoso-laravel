@extends('layouts.customer.main')

@section('title')
    My Account || Order
@endsection

@push('addon-style')
    <style>
        .block-addresses h3 {
            font-weight: bold;
            font-size: 24px;
            padding: 0px 0px 30px 0px;
        }

        .block-addresses a {
            font-style: italic;
        }
    </style>
    <style>
        a.add-address {
            color: #ff3366;
            font-weight: bold;
        }

        .box-border .row {
            margin-top: 15px;
        }

        .address-item {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            clear: both;
            background: #f6f6f6;
        }

        .address-item input[type="radio"] {
            width: 20px;
            height: 20px;
            background-color: #ccc;
        }

        .address-item input:checked+label {
            font-weight: bold;
            color: #333;
        }

        .address-item input {
            float: right;
        }

        .address-item h4 {
            font-weight: bold;
            font-size: 24px;
        }

        .address-item h5 {
            font-weight: bold;
            color: #666;
            font-size: 18px;
            padding-bottom: 20px;
        }

        .address-item a {
            color: #ff3366;
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
                            <div class="block-addresses">
                                <h3>Tambah Alamat Pengiriman</h3>
                            </div>
                            
                            {{-- @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Error!</strong> {{ $error }}
                                    </div>
                                @endforeach
                            @endif --}}

                            <form action="{{ route('my_account.address.update', $item->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group @error('label') has-error @enderror">
                                            <label for="label" class="required">Label Alamat</label>
                                            <input type="text" class="input form-control" name="label" id="label" placeholder="Rumah/Kantor"
                                                value="{{ $item->label }}">
                                            @error('label')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('recipient_name') has-error @enderror">
                                            <label for="recipient_name" class="required">Nama Penerima</label>
                                            <input type="text" class="input form-control" name="recipient_name" id="recipient_name" placeholder="Nama Penerima"
                                                value="{{ $item->recipient_name }}">
                                            @error('recipient_name')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group @error('phone') has-error @enderror">
                                            <label for="phone" class="required">No. HP / Telepon</label>
                                            <input type="text" class="input form-control" name="phone" id="phone" placeholder="0812xxxxxx"
                                                value="{{ $item->phone }}">
                                            @error('phone')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('province_id') has-error @enderror">
                                            <label for="province_id" class="required">Provinsi</label>
                                            <select class="input form-control" name="province_id" id="province_id">
                                                <option value="">Pilih Provinsi</option>
                                                @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}" @if ($item->province_id == $province->id) selected @endif>{{ $province->province_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('province_id')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group @error('city_id') has-error @enderror">
                                            <label for="city_id" class="required">Kota/Kabupaten</label>
                                            <select class="input form-control" name="city_id" id="city_id">
                                                <option value="">Pilih Kota/Kabupaten</option>
                                                @foreach ($cities as $city)
                                                <option value="{{ $city->id }}" @if ($item->city_id == $city->id) selected @endif>{{ $city->type }} {{ $city->city_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('city_id')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group @error('kecamatan_id') has-error @enderror">
                                            <label for="kecamatan_id" class="required">Kecamatan/Desa</label>
                                            <select class="input form-control" name="kecamatan_id" id="kecamatan_id">
                                                <option value="">Pilih Kecamatan/Desa</option>
                                                @foreach ($kecamatans as $kecamatan)
                                                <option value="{{ $kecamatan->id }}" @if ($item->kecamatan_id == $kecamatan->id) selected @endif>{{ $kecamatan->kecamatan_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('kecamatan_id')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group @error('kelurahan') has-error @enderror">
                                            <label for="kelurahan" class="required">Kelurahan</label>
                                            <input type="text" class="input form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan"
                                                value="{{ $item->kelurahan }}">
                                            @error('kelurahan')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group @error('address_detail') has-error @enderror">
                                            <label for="address_detail" class="required">Alamat Lengkap</label>
                                            <textarea class="input form-control" name="address_detail" id="address_detail" cols="30" rows="5" placeholder="Jalan Raya Setiabudi">{{ $item->address_detail }}</textarea>
                                            @error('address_detail')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group @error('postal_code') has-error @enderror">
                                            <label for="postal_code" class="required">Kode Pos</label>
                                            <input type="text" class="input form-control" name="postal_code" id="postal_code" placeholder="123456"
                                                value="{{ $item->postal_code }}">
                                            @error('postal_code')
                                            <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button class="button pull-right" type="submit">Simpan Perubahan Alamat</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        $("select#province_id").change(function(){
            
            const province_id = $(this).val();

            $('select#city_id').html('')
                .prepend(`<option value="" selected>Pilih Kota/Kabupaten</option>`);

            $('select#kecamatan_id').html('')
                .prepend(`<option value="" selected>Pilih Kecamatan/Desa</option>`);

            $.ajax({
                type: 'GET',
                url: '{{ route('api.location.cities') }}',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    province_id: province_id,
                },
                dataType: 'JSON',
                error: function(error) {
                    console.log(error);
                    // Swal.fire("Error!", 'Something is wrong', "error");
                },
                success: function (response) {
                    if (response.success == true) {

                        const responseData = response.data;

                        const selectList= responseData.map((e) => {
                            return `
                                <option class="level-0" value="${e.id}">${e.type} ${e.city_name}</option>
                            `;
                        });
                        $('select#city_id').html('')
                        .prepend(`<option value="" selected>Pilih Kota/Kabupaten</option>`)
                        .append(selectList)


                    } else {
                        console.log(response)
                        // Swal.fire("Error!", response.message, "error");
                    }
                }
            });
        });

        $("select#city_id").change(function(){
            
            const city_id = $(this).val();

            $('select#kecamatan_id').html('')
                .prepend(`<option value="" selected>Pilih Kecamatan/Desa</option>`);

            $.ajax({
                type: 'GET',
                url: '{{ route('api.location.kecamatan') }}',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    city_id: city_id,
                },
                dataType: 'JSON',
                error: function(error) {
                    console.log(error);
                    // Swal.fire("Error!", 'Something is wrong', "error");
                },
                success: function (response) {
                    if (response.success == true) {

                        const responseData = response.data;

                        const selectList= responseData.map((e) => {
                            return `
                                <option class="level-0" value="${e.id}">${e.kecamatan_name}</option>
                            `;
                        });
                        $('select#kecamatan_id').html('')
                        .prepend(`<option value="" selected>Pilih Kecamatan/Desa</option>`)
                        .append(selectList)


                    } else {
                        console.log(response)
                        // Swal.fire("Error!", response.message, "error");
                    }
                }
            });
        });
    </script>
@endpush