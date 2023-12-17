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
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h4>Sub Category Information</h4>
                    <form action="{{ route('admin.product.subcategory.store') }}" id="formSubmission" method="post"
                        id="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="product_category_id" class="form-label">Category Name <span
                                            class="text-danger">*</span></label>
                                    <select class="select @error('product_category_id') is-invalid @enderror"
                                        id="product_category_id" name="product_category_id" required>
                                        <option value="">Choose Category</option>
                                        @foreach ($categories as $category)
                                            <option @if (old('product_category_id') == $category->id) selected @endif
                                                value="{{ $category->id }}">
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_category_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subcategory_name" class="form-label">Sub Category Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('subcategory_name') is-invalid @enderror"
                                        id="subcategory_name" placeholder="Sub Category Name" name="subcategory_name"
                                        value="{{ old('subcategory_name') }}" autocomplete="off" required>
                                    @error('subcategory_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <a href="{{ route('admin.product.subcategory.index') }}"
                                        class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-lg-3 upload-product">
            <div class="card image-uploader">
                <div class="card-body">
                    <h5 class="card-title">Icon</h5>
                    <input class="form-control file-uploader " type="file" accept="image/*" name="photo"
                        value="">
                </div>
                <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/noimage.png') }}">
            </div>
            <div class="card image-uploader">
                <div class="card-body">
                    <h5 class="card-title">Featured</h5>
                    <input class="form-control file-uploader " type="file" accept="image/*" name="photo"
                        value="">
                </div>
                <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
            </div>

            <div class="card image-uploader">
                <div class="card-body">
                    <h5 class="card-title">Banner Left</h5>
                    <input class="form-control file-uploader " type="file" accept="image/*" name="photo"
                        value="">
                </div>
                <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
            </div>

            <div class="card image-uploader">
                <div class="card-body">
                    <h5 class="card-title">Banner Right</h5>
                    <input class="form-control file-uploader " type="file" accept="image/*" name="photo"
                        value="">
                </div>
                <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
            </div>
        </div>
    </div>
@endsection

@push('addon-style')
    <style>
        img.file-image-preview {
            max-height: 50px;
        }

        .card img {
            max-width: 200px;
            display: table;
            margin: 0 auto;
            padding: 20px;
        }

        .upload-product input {
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

        .product-variant .btn-added {
            background: #ff9f43;
            padding: 7px 15px;
            color: #fff;
            font-weight: 700;
            font-size: 14px;

            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;

            align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
        }

        .product-variant .page-btn {
            float: right;
        }

        .product-variant .page-btn a img {
            padding: 0;
            margin: 0;
        }

        .product-variant h5 {
            float: left;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        table tbody tr td input {
            width: 100px;
        }

        .card table tbody tr td img {
            max-width: 80px;
            padding: 0;
        }

        input.form-check-input:hover {
            cursor: pointer;
        }

        tr#element-variant td:last-child a {
            pointer-events: none;
        }
    </style>
@endpush

@push('prepend-script')
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
    <!-- Select2 JS -->
    <script src="{{ asset('admin/plugins/select2/js/select2.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // $("#btnSubmitForm").click(function(){
            //     $('#formSubmission').submit()
            // });
            // $(function () {
            //     $("#product_category_id").select2();
            // });
        });
    </script>
@endpush
