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

    <div class="card">
        <div class="card-body">

            @foreach ($errors->all() as $error)
                <div class="alert alert-error alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ $error }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach

            <form action="{{ route('admin.product.list.update', $item->id) }}" id="formSubmission" method="post" id=""
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row upload-product">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card image-uploader">
                            <div class="card-body">
                                <h5 class="card-title">Primary Image <span class="text-danger">*</span></h5>
                                <input class="form-control file-uploader @error('photo') is-invalid @enderror"
                                    type="file" accept="image/*" name="photo" value="{{ old('photo') }}">
                                @error('photo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <img class="card-img-top image-uploader-preview"
                                src="{{ Storage::url($item->photo) }}">
                        </div>
                    </div>

                    @foreach ([2, 3, 4] as $image_no)
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card image-uploader">
                                <div class="card-body">
                                    <h5 class="card-title">Image {{ $image_no }}</h5>
                                    <input type="hidden" name="productImages[{{ $loop->index }}][id]" value="{{ isset($item->images[$loop->index]) != null ? $item->images[$loop->index]->id : '' }}">
                                    <input
                                        class="form-control file-uploader @error("{{ 'productImages[' . $loop->index . '][photo]' }}") is-invalid @enderror"
                                        type="file" accept="image/*"
                                        name="{{ 'productImages[' . $loop->index . '][photo]' }}"
                                        value="{{ old('productImages[' . $loop->index . '][photo]') }}">
                                    @error("{{ 'productImages[' . $loop->index . '][photo]' }}")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <img class="card-img-top image-uploader-preview"
                                    src="{{ isset($item->images[$loop->index]) != null ? Storage::url($item->images[$loop->index]->image) : asset('admin/img/product/upload.png') }}">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <h4>Product Information</h4>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Product Name <span class="text-danger">*</span></label>
                                        <div class="input-groupicon">
                                            <input class="form-control @error('product_name') is-invalid @enderror"
                                                type="text" name="product_name" placeholder="Product Name"
                                                value="{{ $item->name }}" />
                                            @error('product_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror">{{ $item->description }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4>Dimension & Shipping</h4>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Width</label>
                                            <div class="input-group">
                                                <input type="number"
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    placeholder="Width" aria-label="Width" aria-describedby="width"
                                                    name="width" value="{{ $item->details[0]->width }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">cm</span>
                                                </div>
                                            </div>
                                            @error('width')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Length</label>
                                            <div class="input-group">
                                                <input type="number"
                                                    class="form-control @error('length') is-invalid @enderror"
                                                    placeholder="Length" aria-label="Length" aria-describedby="lenght"
                                                    name="length" value="{{ $item->details[0]->length }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="length">cm</span>
                                                </div>
                                            </div>
                                            @error('length')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Height</label>
                                            <div class="input-group">
                                                <input type="number"
                                                    class="form-control @error('height') is-invalid @enderror"
                                                    placeholder="Height" aria-label="Height" aria-describedby="height"
                                                    name="height" value="{{ $item->details[0]->height }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="height">cm</span>
                                                </div>
                                            </div>
                                            @error('height')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <div class="input-group">
                                                <input type="number"
                                                    class="form-control @error('weight') is-invalid @enderror"
                                                    placeholder="Weight" aria-label="Weight" aria-describedby="weight"
                                                    name="weight" value="{{ $item->details[0]->weight }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="weight">gram</span>
                                                </div>
                                            </div>
                                            @error('weight')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4>Media Playlist</h4>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_file">Video File</label>
                                            <div class="input-group">
                                                <input type="file"
                                                    class="form-control @error('video_file') is-invalid @enderror"
                                                    placeholder="Video File" aria-label="Video File"
                                                    aria-describedby="video_file" name="video_url"
                                                    value="{{ $item->video_file }}">
                                            </div>
                                            @error('video_file')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_youtube_url">Youtube URL</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control @error('video_youtube_url') is-invalid @enderror"
                                                    placeholder="Video Youtube URL" aria-label="Video Youtube URL"
                                                    aria-describedby="video_youtube_url" name="video_youtube_url"
                                                    value="{{ $item->video_youtube_url }}">
                                            </div>
                                            @error('video_youtube_url')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4>Organize</h4>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select class="select @error('product_subcategory_id') is-invalid @enderror"
                                            name="product_subcategory_id">
                                            @foreach ($categories as $category)
                                                <optgroup label="{{ $category->name }}">
                                                    @foreach ($category->subcategories as $subcategory)
                                                        <option value="{{ $subcategory->id }}"
                                                            @if ($subcategory->id == $item->product_subcategory_id) selected @endif>
                                                            {{ $subcategory->name }}
                                                        </option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>
                                        @error('product_subcategory_id')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Status <span class="text-danger">*</span></label>
                                        <select class="select @error('status') is-invalid @enderror" name="status">
                                            <option value="1" @if ($item->status == "1") selected @endif>Deactivated</option>
                                            <option value="2" @if ($item->status == "2") selected @endif>Active</option>
                                            <option value="3" @if ($item->status == "3") selected @endif>Draft</option>
                                        </select>
                                        @error('product_subcategory_id')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card product-variant">
                            <div class="card-body">
                                <div class="page-header">
                                    <h5 class="card-title">Product Details</h5>
                                    <div class="page-btn">
                                        <a class="btn btn-added" onclick="duplicate()">
                                            <img src="{{ asset('admin/img/icons/plus.svg') }}" alt="img">Add New
                                            Variant
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" id="variant_name_head">Variant Name <span class="text-danger">*</span></th>
                                                <th scope="col">Price <span class="text-danger">*</span></th>
                                                <th scope="col">Discounted Price</th>
                                                <th scope="col">Stock <span class="text-danger">*</span></th>
                                                <th scope="col">SKU <span class="text-danger">*</span></th>
                                                <th scope="col" id="variant_image_head">Image</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" id="variant_delete_head">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyVariant">
                                            @foreach ($item->details as $variant)
                                            <tr id="element-variant">
                                                <td>
                                                    <input type="hidden" class="form-control product-detail-id" name="productDetails[{{ $loop->index }}][id]" value="{{ $variant->id }}">
                                                    <input type="text" class="form-control product-detail-name"
                                                        placeholder="Product Name" name="productDetails[{{ $loop->index }}][name]"
                                                        value="{{ $variant->name }}" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control product-detail-price" placeholder="Rp"
                                                        name="productDetails[{{ $loop->index }}][price]"
                                                        value="{{ $variant->price }}" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control product-detail-discount-price"
                                                        placeholder="Rp" name="productDetails[{{ $loop->index }}][discount_price]"
                                                        value="{{ $variant->discount_price }}">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control product-detail-stock" placeholder="Pcs"
                                                        name="productDetails[{{ $loop->index }}][stock]"
                                                        value="{{ $variant->stock }}" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control product-detail-sku" placeholder="SKU"
                                                        name="productDetails[{{ $loop->index }}][sku]"
                                                        value="{{ $variant->sku }}" required>
                                                </td>
                                                <td class="upload-product">
                                                    <input class="upload-file-variant" type="file" accept="image/*"
                                                        name="productDetails[{{ $loop->index }}][photo_variant]"
                                                        onchange="showPreviewVariant(event)">
                                                    <img class="card-img-top card-img-variant"
                                                        src="{{ isset($variant->image) ? Storage::url($variant->image) : asset('admin/img/product/upload.png') }}"
                                                        alt="Card image cap">
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            name="productDetails[{{ $loop->index }}][status]" value="1" @if ($variant->status == 1) checked @endif>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a onclick="deleteRow(event)" class="me-3 confirm-text">
                                                        <img src="{{ asset('admin/img/icons/delete.svg') }}"
                                                            alt="img">
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('admin.product.list.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>

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
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // $("#btnSubmitForm").click(function(){
            //     $('#formSubmission').submit()
            // });
            changeProductVariant();
        });

        $(".image-uploader-preview").on("click", function() {
            $(this).closest(".image-uploader").find(".file-uploader").trigger('click');
        });

        $(".file-uploader").on("change", function(event) {
            if (event.target.files.length > 0) {
                const tmpPath = URL.createObjectURL(event.target.files[0]);
                $(this).closest(".image-uploader").find(".image-uploader-preview").attr("src", tmpPath);
            }
        });

        $("#tbodyVariant").on("click", ".card-img-variant", function(event) {
            $(event.target).siblings('input.upload-file-variant').click();
        });

        function showPreviewVariant(event) {
            if (event.target.files.length > 0) {
                let imgSrc = URL.createObjectURL(event.target.files[0]);
                let preview = $(event.target).siblings('.card-img-variant').attr('src', imgSrc);
            }
        }

        function duplicate() {
            let original = document.getElementById('element-variant');
            let rows = original.parentNode.rows;
            let row_index = rows.length + 1;
            let clone = original.cloneNode(true); // "deep" clone
            clone.id = "duplic" + (row_index); // there can only be one element with an ID
            original.parentNode.insertBefore(clone, rows[row_index]);

            let InputType = clone.getElementsByTagName("input");
            for (let i = 0; i < InputType.length; i++) {
                if (InputType[i].type == 'checkbox') {
                    InputType[i].checked = false;
                } else {
                    InputType[i].value = '';
                }
            }

            let productId = clone.querySelector(".product-detail-id");
            productId.name = `productDetails[${rows.length-1}][id]`;
            productId.value = ``;

            let productName = clone.querySelector(".product-detail-name");
            productName.name = `productDetails[${rows.length-1}][name]`;

            let productPrice = clone.querySelector(".product-detail-price");
            productPrice.name = `productDetails[${rows.length-1}][price]`;

            let productDiscountPrice = clone.querySelector(".product-detail-discount-price");
            productDiscountPrice.name = `productDetails[${rows.length-1}][discount_price]`;

            let productStock = clone.querySelector(".product-detail-stock");
            productStock.name = `productDetails[${rows.length-1}][stock]`;

            let productSKU = clone.querySelector(".product-detail-sku");
            productSKU.name = `productDetails[${rows.length-1}][sku]`;

            // let imgVariant = clone.getElementsByTagName("img");
            let imgVariant = clone.querySelector(".card-img-variant");
            imgVariant.src = "{{ asset('admin/img/product/upload.png') }}";

            let productImgVariant = clone.querySelector(".upload-file-variant");
            productImgVariant.name = `productDetails[${rows.length-1}][photo_variant]`;

            let productStatusVariant = clone.querySelector(".form-check-input");
            productStatusVariant.name = `productDetails[${rows.length-1}][status]`;

            changeProductVariant();
        }

        function changeProductVariant() {
            const rowCount = $('#tbodyVariant > tr').length;
            console.log('Lalala ' + rowCount);
            if (rowCount > 1) {
                $('.product-detail-name').attr( {type: "text", placeholder: "Ukuran S", required: true} );
                $('.product-detail-name').closest("td").show();
                $('.upload-file-variant').closest("td").show();
                $('.product-detail-delete').closest("td").show();
                $('#variant_name_head').show();
                $('#variant_image_head').show();
                $('#variant_delete_head').show();
            } else {
                $('.product-detail-name').attr( {type: "hidden", placeholder: "DEFAULT", value: "DEFAULT", required: false} );
                $('.product-detail-name').closest("td").hide();
                $('.upload-file-variant').closest("td").hide();
                $('.product-detail-delete').closest("td").hide();
                $('#variant_name_head').hide();
                $('#variant_image_head').hide();
                $('#variant_delete_head').hide();
            }
        }

        function deleteRow(event) {
            event.target.parentNode.parentNode.parentNode.remove();
            changeProductVariant();
        }
    </script>
@endpush
