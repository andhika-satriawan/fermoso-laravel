@extends('layouts.admin.main')

@section('title')
    {{ $page_info['title'] }}
@endsection

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h4>{{ $page_info['title'] }}</h4>
        </div>

        <div class="card upload-product">
            <div class="card-body">
                <h4>Banner Right</h4>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Upload Banner</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview upload-logo"
                                src="http://127.0.0.1:8000/admin/img/product/upload.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card upload-product">
            <div class="card-body">
                <h4>Slider Image</h4>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Slider 1</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview upload-logo"
                                src="http://127.0.0.1:8000/admin/img/product/upload.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text 1</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text 2</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text Button</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Slider 2</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview upload-logo"
                                src="http://127.0.0.1:8000/admin/img/product/upload.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text 1</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text 2</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text Button</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Slider 3</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview upload-logo"
                                src="http://127.0.0.1:8000/admin/img/product/upload.png">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text 1</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text 2</label>
                            <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Text Button</label>
                            <textarea id="description" name="description"
                                class="form-control ckeditor @error('description') is-invalid @enderror">
                            {{ old('description') }}
                        </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-submit me-2">SAVE</button>
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
            max-width: 80px;
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
            max-width: 400px;
        }
    </style>
@endpush

@push('addon-script')
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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
        // Delete Data
        const deleteConfirmation = (id) => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                // confirmButtonColor: '#ff0022',
                // cancelButtonColor: '#212529',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: 'DELETE',
                        url: '{{ route('admin.product.list.index') }}/' + id,
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                        },
                        dataType: 'JSON',
                        error: function(response) {
                            // console.log(response);
                            Swal.fire("Error!", 'Something is wrong', "error")
                                .then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                        },
                        success: function(response) {
                            // console.log(response);
                            if (response.success == true) {
                                Swal.fire("Deleted successfully!", response.message, "success")
                                    .then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                            } else {
                                Swal.fire("Error!", response.message, "error").then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            }
                        }
                    });
                } else if (result.dismiss) {
                    Swal.fire(
                        'Canceled!',
                        'Your important file is still safe.',
                        'error'
                    )
                }
            });
        }
    </script>
@endpush
