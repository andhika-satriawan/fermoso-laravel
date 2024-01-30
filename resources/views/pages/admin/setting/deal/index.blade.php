@extends('layouts.admin.main')

@section('title')
    {{ $page_info['title'] }}
@endsection

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h4>{{ $page_info['title'] }} List</h4>
            <h6>View/Search {{ $page_info['title'] }}</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <h4 class="title-setting">LATEST DEALS</h4>
            <div class="page-header in-setting">
                <div class="page-btn">
                    <a href="{{ route('admin.setting.deal.create') }}" class="btn btn-added">
                        <img src="{{ asset('admin/img/icons/plus.svg') }}" class="me-1" alt="img" />Add
                        Lastest Deals
                    </a>
                </div>
            </div>
            <div id="latest-deal">
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
                        @foreach ($latest_deals as $latest_deal)
                            @if ($latest_deal)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox" />
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="{{ \Storage::disk('local')->url($latest_deal->photo) }}"
                                                alt="product" />
                                        </a>
                                    </td>
                                    <td>{{ $latest_deal->name }}</td>
                                    <td>{{ $latest_deal->product_subcategory->category->name }}</td>
                                    @if ($latest_deal->status == 1)
                                        <td><span class="text-success">DEACTIVATED</span></td>
                                    @elseif ($latest_deal->status == 2)
                                        <td><span class="text-success">ACTIVE</span></td>
                                    @else
                                        <td><span class="text-danger">DRAFT</span></td>
                                    @endif

                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $latest_deal->created_at)->format('M d, Y, H:i:s') }}
                                    </td>
                                    <td>
                                        <a class="me-3 confirm-text" onclick="deleteConfirmation({{ $latest_deal->id }})">
                                            <img src="{{ asset('admin/img/icons/delete.svg') }}" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                            @else
                                <p>No latest deal available.</p>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

@push('addon-style')
    <style>
        .page-header.in-setting {
            float: right;
        }

        #latest-deal {
            clear: both;
        }

        h4.title-setting {
            float: left;
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
