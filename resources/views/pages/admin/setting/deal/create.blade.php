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

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.setting.deal.store') }}" id="formSubmission" method="post" id=""
                    enctype="multipart/form-data"">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="title" class="form-label">Product <span class="text-danger">*</span></label>
                                <select class="select @error('selectedProduct') is-invalid @enderror"
                                    name="selectedProduct">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="{{ route('admin.setting.deal.index') }}" class="btn btn-cancel">Cancel</a>
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
            max-height: 50px;
        }

        .card img {
            max-width: 250px;
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
