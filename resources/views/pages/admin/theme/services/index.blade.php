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
                <h4>Column 1</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Icon</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview"
                                src="http://127.0.0.1:8000/admin/img/product/noimage.png">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group theme">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Title</h5>
                            </label>
                            <input type="text" class="form-control " id="menu-1" placeholder="Text Menu"
                                name="menu-1" value="" autocomplete="off">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Text Short</h5>
                            </label>
                            <input type="text" class="form-control " id="link-menu-1" placeholder="Link Menu"
                                name="link-menu-1" value="" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card upload-product">
            <div class="card-body">
                <h4>Column 2</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Icon</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview"
                                src="http://127.0.0.1:8000/admin/img/product/noimage.png">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group theme">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Title</h5>
                            </label>
                            <input type="text" class="form-control " id="menu-1" placeholder="Text Menu"
                                name="menu-1" value="" autocomplete="off">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Text Short</h5>
                            </label>
                            <input type="text" class="form-control " id="link-menu-1" placeholder="Link Menu"
                                name="link-menu-1" value="" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card upload-product">
            <div class="card-body">
                <h4>Column 3</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Icon</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview"
                                src="http://127.0.0.1:8000/admin/img/product/noimage.png">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group theme">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Title</h5>
                            </label>
                            <input type="text" class="form-control " id="menu-1" placeholder="Text Menu"
                                name="menu-1" value="" autocomplete="off">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Text Short</h5>
                            </label>
                            <input type="text" class="form-control " id="link-menu-1" placeholder="Link Menu"
                                name="link-menu-1" value="" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card upload-product">
            <div class="card-body">
                <h4>Column 4</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Icon</h5>
                                <input class="form-control file-uploader" type="file" accept="image/*" name="photo"
                                    value="">
                            </div>
                            <img class="card-img-top image-uploader-preview"
                                src="http://127.0.0.1:8000/admin/img/product/noimage.png">
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group theme">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Title</h5>
                            </label>
                            <input type="text" class="form-control " id="menu-1" placeholder="Text Menu"
                                name="menu-1" value="" autocomplete="off">
                            <label for="menu-1" class="form-label">
                                <h5 class="card-title">Text Short</h5>
                            </label>
                            <input type="text" class="form-control " id="link-menu-1" placeholder="Link Menu"
                                name="link-menu-1" value="" autocomplete="off">
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
            max-width: 94px;
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
    <!-- Select2 JS -->
    <script src="{{ asset('admin/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Sweetalert 2 -->
    <script src="{{ asset('admin/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
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
