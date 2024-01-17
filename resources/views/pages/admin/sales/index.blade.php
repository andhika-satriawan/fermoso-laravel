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
            <div class="table-top">
                <div class="search-set">
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="{{ asset('admin/img/icons/search-white.svg') }}"
                                alt="img" /></a>
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
                            <th>Code</th>
                            <th>Customer Name</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td width="5%">
                                    <label class="checkboxs">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    {{ $transaction->code }}
                                </td>
                                <td>
                                    {{ $transaction->recipient_name }}
                                </td>
                                <td>
                                    {{ $transaction->total }}
                                </td>
                                <td>
                                    @if ($transaction->transaction_status == 'PENDING')
                                        <span class="badges bg-lightred">Pending</span>
                                    @elseif ($transaction->transaction_status == 'DIKEMAS')
                                        <span class="badges bg-lightyellow">Dikemas</span>
                                    @elseif ($transaction->transaction_status == 'DALAM PENGIRIMAN')
                                        <span class="badges bg-lightyellow">Dalam Pengiriman</span>
                                    @elseif ($transaction->transaction_status == 'SELESAI')
                                        <span class="badges bg-lightgreen">Selesai</span>
                                    @elseif ($transaction->transaction_status == 'CANCELLED')
                                        <span class="badges bg-secondary">Cancelled</span>
                                    @else
                                        Undefined
                                    @endif
                                </td>
                                <td>
                                    <a class="me-3" href="{{ route('admin.sales.show', $transaction->id) }}">
                                        <img src="{{ asset('admin/img/icons/eye1.svg') }}" alt="img" />
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
@endpush
