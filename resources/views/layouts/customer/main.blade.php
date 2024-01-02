<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('partials.customer.style')
    @stack('addon-style')
    <title>@yield('title') - FERMOSO</title>
</head>

<body class="{{ $page }}">

    <!-- HEADER -->
    @include('partials.customer.header')
    <!-- end header -->

    @yield('content')

    <!-- Footer -->
    @include('partials.customer.footer')

    <!-- Script-->
    @include('partials.customer.script')
    @stack('addon-script')
    @include('partials.customer.plugin')

</body>

</html>
