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
    
    <div class="card upload-product">
        <div class="card-body">
            <form action="{{ route('admin.review.store') }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    
                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label for="product_id" class="form-label">Product <span class="text-danger">*</span></label>
                            <select class="select @error('product_id') is-invalid @enderror"
                                    id="product_id" name="product_id" required>
                                    <option value="">Choose Product</option>
                                    @foreach ($products as $product)
                                        <option @if (old('product_id') == $product->id) selected @endif
                                            value="{{ $product->id }}">
                                            {{ $product->name }}</option>
                                    @endforeach
                                </select>
                            @error('product_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label for="customer_name" class="form-label">Customer Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" placeholder="Customer Name" name="customer_name" value="{{ old('customer_name') }}" autocomplete="off" required>
                            @error('customer_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                            <select class="select @error('rating') is-invalid @enderror"
                                    id="rating" name="rating" required>
                                    <option value="">Choose Rating</option>
                                    @foreach (collect([1, 2, 3, 4, 5]) as $rating)
                                        <option @if (old('rating') == $rating) selected @endif
                                            value="{{ $rating }}">
                                            {{ $rating }} 
                                            @for ($i = 1; $i <= $rating; $i++) ⭐ @endfor
                                        </option>
                                    @endforeach
                                </select>
                            @error('rating')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label for="comment" class="form-label">Comment <span class="text-danger">*</span></label>
                            <textarea id="comment" name="comment" class="form-control @error('comment') is-invalid @enderror" placeholder="Comment" required>{{ old('comment') }}</textarea>
                            @error('comment')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('admin.review.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
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
    @if ($message = Session::get('success'))
        <script type="text/javascript">
            Swal.fire({
                icon: 'success',
                title: 'Success..',
                text: '{{ $message }}',
            })
        </script>
    @endif
@endpush
