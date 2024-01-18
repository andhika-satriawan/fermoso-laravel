<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('/icons/favicon.png') }}" type="image/x-icon">

    <meta name="description" content="Fermoso Medical produk kecantikan terlengkap di Indonesia" />
    <meta name="author" content="Fermoso Medical" />
    <meta name="language" content="id" />
    <meta name="robots" content="index, follow">
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.country" content="ID" />
    <meta name="language" content="ID" />
    <meta name="tgn.nation" content="Indonesia" />

    <!--  Essential META Tags -->
    <meta property="og:title" content="Fermoso Medical - @yield('title')" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ url('/customer/banner/banner.jpeg') }}" />
    <meta property="og:url" content="https://fermosomedical.com/">
    <meta name="twitter:card" content="summary_large_image" />

    <!--  Non-Essential, But Recommended -->
    <meta property="og:description" content="Fermoso Medical produk kecantikan terlengkap di Indonesia" />
    <meta property="og:site_name" content="Fermoso Medical" />
    <meta name="twitter:image:alt" content="Fermoso Medical produk kecantikan terlengkap di Indonesia" />

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