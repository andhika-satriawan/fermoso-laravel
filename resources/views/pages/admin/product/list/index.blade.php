@extends('layouts.admin.main')

@section('title') {{ $page_info['title'] }} @endsection

@section('content')

<div class="page-header">
    <div class="page-title">
      <h4>{{ $page_info['title'] }} List</h4>
      <h6>View/Search {{ $page_info['title'] }}</h6>
    </div>
    <div class="page-btn">
      <a href="{{ route('admin.product.list.create') }}" class="btn btn-added">
        <img
          src="{{ asset('admin/img/icons/plus.svg')}}"
          class="me-1"
          alt="img"
        />Add {{ $page_info['title'] }}
      </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-top">
            <div class="search-set">
                <div class="search-input">
                    <a class="btn btn-searchset"
                    ><img src="{{ asset('admin/img/icons/search-white.svg')}}" alt="img"
                    /></a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table datanew">
                <thead>
                    <tr>
                        <th>
                            <label class="checkboxs">
                                <input type="checkbox" id="select-all" />
                                <span class="checkmarks"></span>
                            </label>
                        </th>
                        <th>Photo</th>
                        <th>Product Name</th>
                        <th>Category Group</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            <label class="checkboxs">
                                <input type="checkbox" />
                                <span class="checkmarks"></span>
                            </label>
                        </td>
                        <td class="productimgname">
                            <a href="javascript:void(0);" class="product-img">
                                <img
                                src="{{ \Storage::disk('local')->url($product->photo) }}"
                                alt="product"
                                />
                            </a>
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->product_subcategory->category->name }}</td>
                        @if ($product->status == 1)
                            <td><span class="text-success">DEACTIVATED</span></td>
                        @elseif ($product->status == 2)
                            <td><span class="text-success">ACTIVE</span></td>
                        @else
                            <td><span class="text-danger">DRAFT</span></td>
                        @endif
                        
                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->created_at)->format('M d, Y, H:i:s') }}</td>
                        <td>
                            <a class="me-3" href="{{ route('admin.product.list.edit', $product->id)}}">
                                <img src="{{ asset('admin/img/icons/edit.svg')}}" alt="img" />
                            </a>
                            <a class="me-3 confirm-text" onclick="deleteConfirmation({{ $product->id }})">
                                <img src="{{asset('admin/img/icons/delete.svg')}}" alt="img" />
                            </a>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css')}}" />
@endpush

@push('prepend-script')
@endpush

@push('addon-script')
<!-- Select2 JS -->
<script src="{{ asset('admin/plugins/select2/js/select2.min.js')}}"></script>
<!-- Sweetalert 2 -->
<script src="{{ asset('admin/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
@if ($message = Session::get('success'))
<script type="text/javascript">
    Swal.fire({
        icon: 'success',
        title: 'Success..',
        text: '{{ $message  }}',
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
                    url: '{{ route("admin.product.list.index") }}/' + id,
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
                    success: function (response) {
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