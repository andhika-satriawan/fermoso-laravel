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
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
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