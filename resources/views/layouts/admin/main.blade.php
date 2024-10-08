<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/icons/favicon.png') }}">

    @stack('prepend-style')
    @include('partials.admin.style')
    @stack('addon-style')

</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

        @include('partials.admin.header')

        @include('partials.admin.sidebar')

        <div class="page-wrapper pagehead">
            <div class="content">

                @yield('content')

            </div>
        </div>
    </div>

    @stack('prepend-script')
    @include('partials.admin.script')
    @stack('addon-script')

</body>

</html>
