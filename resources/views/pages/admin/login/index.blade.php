@extends('layouts.admin.account')

@section('title') {{ $page_info['title'] }} @endsection

@section('content')
<div class="login-wrapper">
    <div class="login-content">
        <div class="login-userset">
            <form action="{{ route('admin.login.store') }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
            @csrf
                <div class="login-logo">
                    <img src="{{ asset('images/logo.jpg')}}" alt="img" />
                </div>
                <div class="login-userheading">
                    <h3>Sign In</h3>
                    <h4>Please login to your account</h4>
                </div>
                <div class="form-login">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <div class="form-addons">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required />
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img src="{{ asset('admin/img/icons/mail.svg')}}" alt="img" />
                    </div>
                </div>
                <div class="form-login">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <div class="pass-group">
                        <input type="password" class="pass-input form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" name="password" value="{{ old('password') }}" required />
                        <span class="fas toggle-password fa-eye-slash"></span>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-login">
                    <div class="alreadyuser">
                        <h4>
                        <a href="#" class="hover-a"
                            >Forgot Password?</a
                        >
                        </h4>
                    </div>
                </div>
                <div class="form-login">
                    <button id="btnSubmitForm" class="btn btn-login" type="submit">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="login-img">
        <img src="{{ asset('admin/img/login.jpg')}}" alt="img" />
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
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success..',
        text: '{{ $message  }}',
    })
</script>
@endif
<!-- Select2 JS -->
<script src="{{ asset('admin/plugins/select2/js/select2.min.js')}}"></script>
<!-- Sweetalert 2 -->
<script src="{{ asset('admin/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // $("#btnSubmitForm").click(function(){
        //     $('#formSubmission').submit()
        // });
    });
</script>
@endpush