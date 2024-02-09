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
    <form action="{{ route('admin.product.subcategory.store') }}" id="formSubmission" method="post"
    id="" enctype="multipart/form-data">
    @csrf
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6 upload-product">
                <div class="card image-uploader">
                    <div class="card-body">
                        <h5 class="card-title">Icon (100 x 100)</h5>
                        <input class="form-control file-uploader @error('icon') is-invalid @enderror" type="file" accept="image/*" 
                            name="icon" value="{{ old('icon') }}">
                        @error('icon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 upload-product">
                <div class="card image-uploader">
                    <div class="card-body">
                        <h5 class="card-title">Image (117 x 92)</h5>
                        <input class="form-control file-uploader @error('image') is-invalid @enderror" type="file" accept="image/*" 
                            name="image" value="{{ old('image') }}">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 upload-product">
                <div class="card image-uploader">
                    <div class="card-body">
                        <h5 class="card-title">Featured Image (234 x 350)</h5>
                        <input class="form-control file-uploader @error('featured_image') is-invalid @enderror" type="file" accept="image/*" 
                            name="featured_image" value="{{ old('featured_image') }}">
                        @error('featured_image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 upload-product">
                <div class="card image-uploader">
                    <div class="card-body">
                        <h5 class="card-title">Banner Top (870 x 288)</h5>
                        <input class="form-control file-uploader @error('banner_top') is-invalid @enderror" type="file" accept="image/*" 
                            name="banner_top" value="{{ old('banner_top') }}">
                        @error('banner_top')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 upload-product">
                <div class="card image-uploader">
                    <div class="card-body">
                        <h5 class="card-title">Banner Left (585 x 65)</h5>
                        <input class="form-control file-uploader @error('banner_left') is-invalid @enderror" type="file" accept="image/*" 
                            name="banner_left" value="{{ old('banner_left') }}">
                        @error('banner_left')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 upload-product">
                <div class="card image-uploader">
                    <div class="card-body">
                        <h5 class="card-title">Banner Right (585 x 65)</h5>
                        <input class="form-control file-uploader @error('banner_right') is-invalid @enderror" type="file" accept="image/*" 
                            name="banner_right" value="{{ old('banner_right') }}">
                        @error('banner_right')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img class="card-img-top image-uploader-preview" src="{{ asset('admin/img/product/upload.png') }}">
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sub Category Information</h4>
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
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
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
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
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('addon-style')
    <style>
        .card img {
            max-width: 200px;
            display: table;
            margin: 0 auto;
            padding: 20px;
        }

        .image-uploader input.file-uploader {
            display: none;
        }

        .image-uploader img {
            cursor: pointer;
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
