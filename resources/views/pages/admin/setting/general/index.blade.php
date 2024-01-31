@extends('layouts.admin.main')

@section('title')
    {{ $page_info['title'] }}
@endsection

@section('content')
    <div class="page-header">
        <div class="page-title">
        <h4>Edit {{ $page_info['title'] }}</h4>
        <h6>Change the data of existing {{ $page_info['title'] }}</h6>
        </div>
    </div>

    <div class="card upload-product">
        <div class="card-body">
            <form action="{{ route('admin.setting.general.store') }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
            @csrf
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group image-uploader">
                            <label for="banner" class="form-label">Banner</label>
                            <input class="form-control file-uploader" type="file" accept="image/*" name="banner" value="">
                            <img class="image-uploader-preview"
                                src="{{ isset($setting->banner) ? Storage::url($setting->banner) : asset('admin/img/product/upload.png')}}">
                            @error('banner')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Phone" name="phone" value="{{ $setting->phone }}" autocomplete="off" required>
                            </div>
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="chat_text" class="form-label">Chat Text <span class="text-danger">*</span></label>
                            <textarea id="chat_text" name="chat_text" class="form-control @error('chat_text') is-invalid @enderror" placeholder="chat_text" required>{{ $setting->chat_text }}</textarea>
                            @error('chat_text')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-submit me-2">Update</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

@push('addon-style')
    <style>
        .page-header {
            display: block;
        }

        .page-title {
            padding-bottom: 20px;
        }

        img.file-image-preview {
            max-height: 50px;
        }

        .card img {
            max-width: 150px;
            display: table;
            margin: 0 auto;
            padding: 20px;
        }

        .upload-product input.file-uploader {
            display: none;
        }

        .upload-product img {
            cursor: pointer;
        }

        .card .card-body {
            border-bottom: 1px solid #e8ebed;
        }

        .card .card-body h5.card-title {
            color: #1B2850;
            margin: 0;
        }

        .card-body h4 {
            padding-bottom: 10px;
            border-bottom: 1px solid #e8ebed;
            margin-bottom: 20px;
        }

        .form-group.theme input {
            margin-bottom: 10px;
        }

        .form-group.theme.sub-menu {
            padding-left: 2rem;
        }

        .card img.upload-logo {
            max-width: 150px;
        }
    </style>
@endpush

@push('addon-script')
    @if ($message = Session::get('success'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'success',
                title: 'Success..',
                text: '{{ $message }}',
            })
        </script>
    @endif
    <script type="text/javascript">

        $(".image-uploader-preview").on("click", function() {
            $(this).closest(".image-uploader").find(".file-uploader").trigger('click');
        });

        $(".file-uploader").on("change", function(event) {
            if (event.target.files.length > 0) {
                const tmpPath = URL.createObjectURL(event.target.files[0]);
                $(this).closest(".image-uploader").find(".image-uploader-preview").attr("src", tmpPath);
            }
        });
        
    </script>
@endpush
