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
        <form action="{{ route('admin.product.subcategory.update', $item->id) }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                        <label for="product_category_id" class="form-label">Sub Category Name <span class="text-danger">*</span></label>
                        <select class="select @error('product_category_id') is-invalid @enderror" id="product_category_id" name="product_category_id" required>
                            <option value="">Choose Category</option>
                            @foreach ($categories as $category)
                            <option @if ($item->product_category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
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
                        <label for="subcategory_name" class="form-label">Sub Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('subcategory_name') is-invalid @enderror" id="subcategory_name" placeholder="Sub Category Name" name="subcategory_name" value="{{ $item->name }}" autocomplete="off" required>
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
                        <a href="{{ route('admin.product.subcategory.index') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css')}}" />
@endpush

@push('prepend-script')
@endpush

@push('addon-script')
@if ($message = Session::get('success'))
<script type="text/javascript">
    Swal.fire({
        icon: 'success',
        title: 'Success..',
        text: '{{ $message  }}',
    })
</script>
@endif
<!-- Select2 JS -->
<script src="{{ asset('admin/plugins/select2/js/select2.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // $("#btnSubmitForm").click(function(){
        //     $('#formSubmission').submit()
        // });
    });
</script>
@endpush