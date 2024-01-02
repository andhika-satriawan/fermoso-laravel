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
                <h4>Menu Header Top</h4>
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
                                <h5 class="card-title">Menu 1</h5>
                            </label>
                            <input type="text" class="form-control " id="menu-1" placeholder="Text Menu"
                                name="menu-1" value="" autocomplete="off">
                            <input type="text" class="form-control " id="link-menu-1" placeholder="Link Menu"
                                name="link-menu-1" value="" autocomplete="off">
                        </div>
                    </div>
                </div>
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
                            <label for="menu-2" class="form-label">
                                <h5 class="card-title">Menu 2</h5>
                            </label>
                            <input type="text" class="form-control " id="menu-2" placeholder="Text Menu"
                                name="menu-2" value="" autocomplete="off">
                            <input type="text" class="form-control " id="link-menu-2" placeholder="Link Menu"
                                name="link-menu-2" value="" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="form-group theme">
                    <label for="menu-3" class="form-label">
                        <h5 class="card-title">Menu 3</h5>
                    </label>
                    <input type="text" class="form-control " id="menu-3" placeholder="Text Menu" name="menu-3"
                        value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-menu-3" placeholder="Link Menu" name="link-menu-3"
                        value="" autocomplete="off">
                </div>
                <div class="form-group theme">
                    <label for="menu-4" class="form-label">
                        <h5 class="card-title">Menu 4</h5>
                    </label>
                    <input type="text" class="form-control " id="menu-4" placeholder="Text Menu" name="menu-4"
                        value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-menu-4" placeholder="Link Menu" name="link-menu-4"
                        value="" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="card upload-product">
            <div class="card-body">
                <h4>Logo</h4>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Upload Logo</h5>
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

        <div class="card">
            <div class="card-body">
                <h4>Menu Header Bottom</h4>
                <div class="form-group theme">
                    <label for="menu-bottom-1" class="form-label">
                        <h5 class="card-title">Menu 1</h5>
                    </label>
                    <input type="text" class="form-control " id="menu-bottom-1" placeholder="Text Menu"
                        name="menu-bottom-1" value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-menu-bottom-1" placeholder="Link Menu"
                        name="link-menu-bottom-1" value="" autocomplete="off">
                </div>
                <div class="form-group theme">
                    <label for="menu-bottom-2" class="form-label">
                        <h5 class="card-title">Menu 2</h5>
                    </label>
                    <input type="text" class="form-control " id="menu-bottom-2" placeholder="Text Menu"
                        name="menu-bottom-2" value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-menu-bottom-2" placeholder="Link Menu"
                        name="link-menu-bottom-1" value="" autocomplete="off">
                </div>
                <div class="form-group theme">
                    <label for="menu-bottom-3" class="form-label">
                        <h5 class="card-title">Menu 3</h5>
                    </label>
                    <input type="text" class="form-control " id="menu-bottom-3" placeholder="Text Menu"
                        name="menu-bottom-3" value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-menu-bottom-3" placeholder="Link Menu"
                        name="link-menu-bottom-3" value="" autocomplete="off">
                </div>
                <div class="form-group theme">
                    <label for="menu-bottom-4" class="form-label">
                        <h5 class="card-title">Menu 4</h5>
                    </label>
                    <input type="text" class="form-control " id="menu-bottom-4" placeholder="Text Menu"
                        name="menu-bottom-4" value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-menu-bottom-4" placeholder="Link Menu"
                        name="link-menu-bottom-4" value="" autocomplete="off">
                </div>
                <div class="form-group theme sub-menu">
                    <label for="sub-menu-bottom-4.1" class="form-label">
                        <h5 class="card-title">Sub Menu 4.1</h5>
                    </label>
                    <input type="text" class="form-control " id="sub-menu-bottom-4.1" placeholder="Text Menu"
                        name="sub-menu-bottom-4.1" value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-sub-menu-bottom-4.1" placeholder="Link Menu"
                        name="link-sub-menu-bottom-4.1" value="" autocomplete="off">
                </div>
                <div class="form-group theme sub-menu">
                    <label for="sub-menu-bottom-4.2" class="form-label">
                        <h5 class="card-title">Sub Menu 4.2</h5>
                    </label>
                    <input type="text" class="form-control " id="sub-menu-bottom-4.2" placeholder="Text Menu"
                        name="sub-menu-bottom-4.2" value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-sub-menu-bottom-4.2" placeholder="Link Menu"
                        name="link-sub-menu-bottom-4.2" value="" autocomplete="off">
                </div>
                <div class="form-group theme">
                    <label for="menu-bottom-5" class="form-label">
                        <h5 class="card-title">Menu 5</h5>
                    </label>
                    <input type="text" class="form-control " id="menu-bottom-5" placeholder="Text Menu"
                        name="menu-bottom-5" value="" autocomplete="off">
                    <input type="text" class="form-control " id="link-menu-bottom-5" placeholder="Link Menu"
                        name="link-menu-bottom-5" value="" autocomplete="off">
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
