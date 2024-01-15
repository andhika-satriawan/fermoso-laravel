@extends('layouts.admin.main')

@section('title') {{ $page_info['title'] }} @endsection

@section('content')

<div class="page-header">
    <div class="page-title">
      <h4>Add {{ $page_info['title'] }}</h4>
      <h6>Create New {{ $page_info['title'] }}</h6>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.product.category.store') }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="card image-uploader">
                        <div class="card-body">
                            <label for="icon" class="form-label">Icon</label>
                            <input class="form-control file-uploader @error('icon') is-invalid @enderror" type="file" accept="image/*" name="icon"
                                value="{{ old('icon') }}">
                            @error('icon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <img class="card-img-top image-uploader-preview"
                                src="{{ asset('admin/img/product/upload.png')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="card image-uploader">
                        <div class="card-body">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control file-uploader @error('image') is-invalid @enderror" type="file" accept="image/*" name="image"
                                value="{{ old('image') }}">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <img class="card-img-top image-uploader-preview"
                                src="{{ asset('admin/img/product/upload.png')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="card image-uploader">
                        <div class="card-body">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input class="form-control file-uploader @error('featured_image') is-invalid @enderror" type="file" accept="image/*" name="featured_image"
                                value="{{ old('featured_image') }}">
                            @error('featured_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <img class="card-img-top image-uploader-preview"
                                src="{{ asset('admin/img/product/upload.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="category_name" class="form-label">Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name" placeholder="Category Name" name="category_name" value="{{ old('category_name') }}" autocomplete="off" required>
                        @error('category_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-submit me-2">Submit</button>
                        <a href="{{ route('admin.product.category.index') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
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