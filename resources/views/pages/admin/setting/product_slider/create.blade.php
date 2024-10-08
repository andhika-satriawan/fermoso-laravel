@extends('layouts.admin.main')

@section('title')
    {{ $page_info['title'] }}
@endsection

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h4>Add {{ $page_info['title'] }}</h4>
            <h6>Create New {{ $page_info['title'] }}</h6>
        </div>

        <div class="card upload-product">
            <div class="card-body">
                <form action="{{ route('admin.setting.product-slider.store') }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card image-uploader">
                                <div class="card-body">
                                    <label for="icon" class="form-label">Image <span class="text-danger">*</span></label>
                                    <input class="form-control file-uploader" type="file" accept="image/*" name="image"
                                        value="">
                                    <img class="card-img-top image-uploader-preview"
                                        src="{{ asset('admin/img/product/noimage.png')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{ old('title') }}" autocomplete="off">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="{{ route('admin.setting.product-slider.index') }}" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
            max-height: 150px;
        }

        .card img {
            max-width: 300px;
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
            max-width: 120px;
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
