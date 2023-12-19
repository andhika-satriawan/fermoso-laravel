<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="icon" href="{{ asset('icons/cropped-favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('icons/cropped-favicon-192x192.png') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('icons/cropped-favicon-180x180.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('icons/cropped-favicon-270x270.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    @stack('addon-style-and-script-header-home')

    @stack('addon-style-and-script-header-detail-product')
</head>

<body>
    <a href="#" class="overlay-body" aria-hidden="true"></a>
    <div id="page" class="site">
