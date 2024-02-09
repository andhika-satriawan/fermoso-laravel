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

    <form action="{{ route('admin.article.blog.update', $item->id) }}" id="formSubmission" method="post" id=""
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">

                        @foreach ($errors->all() as $error)
                            <div class="alert alert-error alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ $error }}.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach

                        <h4>Product Information</h4>

                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <div class="input-groupicon">
                                <input class="form-control @error('title') is-invalid @enderror"
                                    type="text" name="title" placeholder="Title"
                                    value="{{ $item->title }}" />
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Summary <span class="text-danger">*</span></label>
                            <textarea id="summary" name="summary" class="form-control @error('summary') is-invalid @enderror">{{ $item->summary }}</textarea>
                            @error('summary')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Content <span class="text-danger">*</span></label>
                            <textarea id="content" name="content" class="form-control ckeditor @error('content') is-invalid @enderror">{{ $item->content }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">

                <div class="card image-uploader">
                    <div class="card-body">
                        <h4>Primary Image <span class="text-danger">*</span></h4>
                        <input class="form-control file-uploader @error('image') is-invalid @enderror"
                            type="file" accept="image/*" name="image" value="{{ old('image') }}">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <img class="card-img-top image-uploader-preview"
                        src="{{ Storage::url($item->image) }}">
                </div>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Organize</h4>

                        <div class="form-group">
                            <label>Category <span class="text-danger">*</span></label>
                            <select 
                                class="select @error('article_categories') is-invalid @enderror"
                                id="article_categories" 
                                name="article_categories[]"
                                multiple 
                            >
                                <option disabled hidden value="">Choose a category...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}"
                                        @if ( is_array(Arr::pluck($item->categories, 'name')) && in_array($category->name, Arr::pluck($item->categories, 'name')) ) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('article_categories')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Tags</label>

                            <select 
                                class="form-select @error('article_tags') is-invalid @enderror"
                                id="article_tags" 
                                name="article_tags[]" 
                                multiple 
                                data-allow-new="true"
                                data-selected="{{ Arr::join(Arr::pluck($item->tags, 'name'), ',') }}"
                            >
                                @foreach ($item->tags as $tag)
                                    <option value="{{ $tag->name }}">
                                        {{ $tag->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('article_tags')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="select @error('status') is-invalid @enderror" name="status">
                                <option value="1">Deactivated</option>
                                <option value="2" selected>Active</option>
                                <option value="3">Draft</option>
                            </select>
                            @error('product_subcategory_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                    <a href="{{ route('admin.article.blog.index') }}" class="btn btn-cancel">Cancel</a>
                </div>
            </div>

        </div>

    </form>
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

        input.file-uploader {
            display: none;
        }

        .image-uploader-preview {
            cursor: pointer;
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
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    
    <!-- Bootstrap Tags Input -->
    {{-- <script src="{{ asset('admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script> --}}
    
    <!-- Bootstrap5 Tags -->
    <script type="module">
        import Tags from "{{ asset('admin/plugins/bootstrap5-tags/tags.min.js') }}";
        Tags.init("#article_tags");
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            // $("#btnSubmitForm").click(function(){
            //     $('#formSubmission').submit()
            // });
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

    </script>
    
@endpush
