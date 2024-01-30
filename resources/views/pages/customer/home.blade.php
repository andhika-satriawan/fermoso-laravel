@extends('layouts.customer.main')

@section('title')
    Home
@endsection

@push('addon-style')
    <style>
        li.item-3 .description {
            margin-left: 26px;
            padding-top: 70px;
            text-align: center;
            float: left;
            max-width: 290px;
        }

        li.item-3 span.title {
            font-size: 12px;
            display: block;
            margin-bottom: 8px;
            font-weight: normal;
            letter-spacing: 6px;
        }

        li.item-3 span.subtitle {
            font-weight: bold;
            display: block;
            border: 2px solid #333;
            font-size: 48px;
            line-height: 60px;
            padding: 0 15px;
            margin-bottom: 8px;
        }

        li.item-3 span.des {
            display: block;
            font-size: 18px;
            font-weight: normal;
        }

        li.item-3 .description .btn {
            background-color: transparent;
            line-height: 24px;
            padding: 0 15px;
            font-size: 15px;
            display: inline-block;
            font-weight: 300;
            border: 3px solid #333333;
            color: #333333;
            margin-top: 70px;
            text-decoration: none;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        li.item-2 .description {
            float: right;
            padding-right: 64px;
            padding-top: 50px;
            max-width: 250px;
            text-align: center;
        }

        li.item-2 span.title {
            display: block;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 2px;
            font-size: 16px;
            color: #333333;
        }

        li.item-2 span.subtitle {
            display: block;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 30px;
            margin-bottom: 27px;
            color: #fff;
            line-height: 1.12;
        }

        li.item-2 .description .btn {
            line-height: 36px;
            background-color: #e1195f;
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            padding: 0 15px;
            font-size: 16px;
            font-weight: 600;
        }

        li.item-1 .description {
            margin-right: 30px;
            padding-top: 70px;
            text-align: center;
            float: right;
            max-width: 270px;
        }

        li.item-1 span.title {
            font-size: 30px;
            display: block;
            margin-bottom: 0px;
            font-weight: 600;
            text-transform: uppercase;
        }

        li.item-1 span.subtitle {
            font-weight: normal;
            display: block;
            font-size: 14px;
            margin-bottom: 15px;
            text-transform: capitalize;
        }

        li.item-1 .description .btn {
            background-color: #849dc5;
            color: #fff;
            line-height: 36px;
            padding: 0 19px;
            font-size: 16px;
            font-weight: 600;
        }

        /* html:before {
                    content: "";
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    background: inherit;
                    z-index: -1;
                    filter: blur(10px);
                }

                html {
                    background-image: url(/customer/assets/images/watermark.png);
                    background-size: 80%;
                    background-repeat: no-repeat;
                    background-position: center;
                } */
    </style>
@endpush

@section('content')
    <!-- Home slideder-->
    <div id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 slider-left"></div>
                <div class="col-sm-9 header-top-right">
                    <div class="homeslider">
                        <div class="content-slide">
                            <ul id="contenhomeslider">
                                @foreach ($sliders as $slider)
                                    <li class="item-{{ $slider->id }}"
                                        style="background-image: url({{ Storage::url($slider->image) }}); height: 450px;">
                                        <div class="description">
                                            <span class="title">{{ $slider->title }} </span>
                                            {!! $slider->description !!}
                                            <a href="{{ $slider->link }}" class="btn">SHOP NOW</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="header-banner banner-opacity">
                        <a href="#"><img alt="Funky roots" src="{{ url('/images/01-img-2.jpg') }}" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Home slideder-->
    <!-- servives -->
    <div class="container">
        <div class="service ">
            @foreach ($services as $service)
                <div class="col-xs-6 col-sm-3 service-item">
                    <div class="icon">
                        <img alt="services" src="{{ Storage::url($service->icon) }}" />
                    </div>
                    <div class="info">
                        <a href="#">
                            <h3>{{ $service->title }}</h3>
                        </a>
                        <span>{{ $service->description }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- end services -->

    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 page-top-left">
                    <div class="popular-tabs">
                        <ul class="nav-tab">
                            <li class="active"><a data-toggle="tab" href="#tab-1">BEST SELLERS</a></li>
                            <li><a data-toggle="tab" href="#tab-2">ON SALE</a></li>
                            <li><a data-toggle="tab" href="#tab-3">New products</a></li>
                        </ul>
                        <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true"
                                    data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true"
                                    data-responsive='{"0":{"items":2},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach ($best_sellers as $best_seller)
                                        <li>
                                            <div class="left-block">
                                                <a href="{{ url('product/' . $best_seller->slug) }}">
                                                    <img class="img-responsive" alt="product"
                                                        src="{{ Storage::url($best_seller->photo) }}" />
                                                </a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart"
                                                        href="{{ url('product/' . $best_seller->slug) }}">Lihat
                                                        Detail</a>
                                                </div>
                                                <div class="group-price">
                                                    <span class="product-new">NEW</span>
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a
                                                        href="{{ url('product/' . $best_seller->slug) }}">{{ $best_seller->name }}</a>
                                                </h5>
                                                <div class="content_price">
                                                    @if ($best_seller->details->first()->discount_price > 0)
                                                        <span class="price product-price">
                                                            Rp
                                                            {{ number_format($best_seller->details->first()->discount_price, 0, ',', '.') }}
                                                        </span>
                                                        <span class="price old-price">Rp
                                                            {{ number_format($best_seller->details->first()->price, 0, ',', '.') }}</span>
                                                    @else
                                                        <span class="price product-price">
                                                            Rp{{ number_format($best_seller->details->first()->price, 0, ',', '.') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true"
                                    data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true"
                                    data-responsive='{"0":{"items":2},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach ($low_sales_products as $low_sales_product)
                                        <li>
                                            <div class="left-block">
                                                <a href="{{ url('product/' . $low_sales_product->slug) }}">
                                                    <img class="img-responsive" alt="product"
                                                        src="{{ Storage::url($low_sales_product->photo) }}" /></a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart"
                                                        href="{{ url('product/' . $low_sales_product->slug) }}">Lihat
                                                        Detail</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a
                                                        href="{{ url('product/' . $low_sales_product->slug) }}">{{ $low_sales_product->name }}</a>
                                                </h5>
                                                <div class="content_price">
                                                    @if ($low_sales_product->details->first()->discount_price > 0)
                                                        <span class="price product-price">
                                                            Rp
                                                            {{ number_format($low_sales_product->details->first()->discount_price, 0, ',', '.') }}
                                                        </span>
                                                        <span class="price old-price">Rp
                                                            {{ number_format($low_sales_product->details->first()->price, 0, ',', '.') }}</span>
                                                    @else
                                                        <span class="price product-price">
                                                            Rp{{ number_format($low_sales_product->details->first()->price, 0, ',', '.') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                    data-nav = "true" data-margin = "30" data-autoplayTimeout="1000"
                                    data-autoplayHoverPause = "true"
                                    data-responsive='{"0":{"items":2},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach ($latest_products as $latest_product)
                                        <li>
                                            <div class="left-block">
                                                <a href="{{ url('product/' . $latest_product->slug) }}">
                                                    <img class="img-responsive" alt="product"
                                                        src="{{ Storage::url($latest_product->photo) }}" />
                                                </a>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart"
                                                        href="{{ url('product/' . $latest_product->slug) }}">Lihat
                                                        Detail</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a
                                                        href="{{ url('product/' . $latest_product->slug) }}">{{ $latest_product->name }}</a>
                                                </h5>
                                                <div class="content_price">
                                                    @if ($latest_product->details->first()->discount_price > 0)
                                                        <span class="price product-price">
                                                            Rp
                                                            {{ number_format($latest_product->details->first()->discount_price, 0, ',', '.') }}
                                                        </span>
                                                        <span class="price old-price">Rp
                                                            {{ number_format($latest_product->details->first()->price, 0, ',', '.') }}</span>
                                                    @else
                                                        <span class="price product-price">
                                                            Rp{{ number_format($latest_product->details->first()->price, 0, ',', '.') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 page-top-right">
                    <div class="latest-deals">
                        <h2 class="latest-deal-title">latest deals</h2>
                        <div class="latest-deal-content">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true"
                                data-autoplayTimeout="1000" data-autoplayHoverPause = "true"
                                data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                                @foreach ($latest_deals as $latest_deal)
                                    <li>
                                        <div class="count-down-time" data-countdown="2024/01/30"></div>
                                        <div class="left-block">
                                            <a href="{{ $latest_deal->slug }}">
                                                <img class="img-responsive" alt="product"
                                                    src="{{ Storage::url($latest_deal->photo) }}" />
                                            </a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">{{ $latest_deal->name }}</a></h5>
                                            <div class="content_price">
                                                @if ($latest_deal->details->first()->discount_price > 0)
                                                    <span class="price product-price">
                                                        Rp
                                                        {{ number_format($latest_deal->details->first()->discount_price, 0, ',', '.') }}
                                                    </span>
                                                    <span class="price old-price">Rp
                                                        {{ number_format($latest_deal->details->first()->price, 0, ',', '.') }}</span>
                                                @else
                                                    <span class="price product-price">
                                                        Rp{{ number_format($latest_deal->details->first()->price, 0, ',', '.') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- HOT CATEGORY --}}
    <div id="content-wrap">
        <div class="container">
            <div id="hot-categories" class="row">
                <div class="col-sm-12 group-title-box">
                    <h2 class="group-title ">
                        <span>Hot categories</span>
                    </h2>
                </div>

                @foreach ($product_subcategories as $product_subcategory)
                    <div class="col-sm-6  col-lg-3 cate-box">
                        <div class="cate-tit">
                            <div class="div-1" style="width: 46%;">
                                <div class="cate-name-wrap">
                                    <p class="cate-name">{{ $product_subcategory->name }}</p>
                                </div>
                                <a href="{{ route('category-product.category', $product_subcategory->slug) }}"
                                    class="cate-link link-active" data-ac="flipInX"><span>shop
                                        now</span></a>
                            </div>
                            <div class="div-2">
                                <a href="{{ route('category-product.category', $product_subcategory->slug) }}">
                                    <img src="{{ isset($product_subcategory->image) ? Storage::url($product_subcategory->image) : 'customer/assets/data/cate-product1.png' }}"
                                        alt="{{ $product_subcategory->name }}" class="hot-cate-img" />
                                </a>
                            </div>

                        </div>
                        <div class="cate-content">
                            <ul>
                                @foreach ($product_subcategory->products as $product)
                                    @if ($loop->index < 4)
                                        <li>
                                            <a
                                                href="{{ route('product.detail.show', $product->slug) }}">{{ $product->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div> <!-- /.cate-box -->
                @endforeach
            </div> <!-- /#hot-categories -->

        </div> <!-- /.container -->
    </div>
    {{-- END HOT CATEGORY --}}

    <!---->
    <div class="content-page">
        <div class="container">
            <!-- featured category fashion -->
            @foreach ($product_subcategories as $key => $product_subcategory)
                @php
                    $menu_classes = ['nav-menu-red', 'nav-menu-green', 'nav-menu-orange', 'nav-menu-blue', 'nav-menu-blue2', 'nav-menu-gray'];
                    $class_index = $key % count($menu_classes);
                    $current_menu_class = $menu_classes[$class_index];
                @endphp

                <div class="category-featured">
                    <nav class="navbar nav-menu {{ $current_menu_class }} show-brand">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-brand">
                                <a href="{{ url('product/category/' . $product_subcategory->slug) }}">
                                    {{-- <img alt="fashion" src="customer/assets/data/fashion.png" /> --}}
                                    <img alt="{{ $product_subcategory->name }}"
                                        src="{{ isset($product_subcategory->icon) ? Storage::url($product_subcategory->icon) : 'customer/assets/data/fashion.png' }}" />
                                    {{ $product_subcategory->name }}
                                </a>
                            </div>
                            <span class="toggle-menu"></span>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse"></div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                        <div id="elevator-1" class="floor-elevator">
                            <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                            <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                        </div>
                    </nav>
                    <div class="category-banner">
                        <div class="col-sm-6 banner">
                            <a href="#"><img alt="ads2" class="img-responsive"
                                    src="{{ isset($product_subcategory->banner_left) ? Storage::url($product_subcategory->banner_left) : 'customer/assets/data/ads2.jpg' }}" /></a>

                        </div>
                        <div class="col-sm-6 banner">
                            <a href="#"><img alt="ads2" class="img-responsive"
                                    src="{{ isset($product_subcategory->banner_right) ? Storage::url($product_subcategory->banner_right) : 'customer/assets/data/ads3.jpg' }}" /></a>
                        </div>
                    </div>
                    <div class="product-featured clearfix">
                        <div class="banner-featured">
                            <div class="featured-text"><span>featured</span></div>
                            <div class="banner-img">
                                <a href="#">
                                    <img alt="Featurered 1"
                                        src="{{ isset($product_subcategory->featured_image) ? Storage::url($product_subcategory->featured_image) : 'customer/assets/data/f1.jpg' }}" />
                                </a>
                            </div>
                        </div>
                        <div class="product-featured-content">
                            <div class="product-featured-list">
                                <div class="tab-container">
                                    <!-- tab product -->
                                    <div class="tab-panel active" id="tab-4">
                                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                            data-nav = "true" data-margin = "0" data-autoplayTimeout="1000"
                                            data-autoplayHoverPause = "true"
                                            data-responsive='{
                                                "0":{"items":2},
                                                "420":{"items":2},
                                                "600":{"items":3},
                                                "768":{"items":3},
                                                "992":{"items":3},
                                                "1200":{"items":4}
                                            }'>
                                            @foreach ($product_subcategory->products as $product)
                                                <li>
                                                    <div class="left-block">
                                                        <a href="{{ route('product.detail.show', $product->slug) }}">
                                                            <img class="img-responsive" alt="product"
                                                                src="{{ Storage::url($product->photo) }}" />
                                                        </a>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart"
                                                                href="{{ route('product.detail.show', $product->slug) }}">Lihat
                                                                Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name">
                                                            <a
                                                                href="{{ route('product.detail.show', $product->slug) }}">{{ $product->name }}</a>
                                                        </h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            {{-- <i class="fa fa-star-half-o"></i> --}}
                                                        </div>
                                                        <div class="content_price">
                                                            @if ($product->details->first()->discount_price > 0)
                                                                <span class="price product-price">
                                                                    Rp
                                                                    {{ number_format($product->details->first()->discount_price, 0, ',', '.') }}
                                                                </span>
                                                                <span class="price old-price">Rp
                                                                    {{ number_format($product->details->first()->price, 0, ',', '.') }}</span>
                                                            @else
                                                                <span class="price product-price">
                                                                    Rp{{ number_format($product->details->first()->price, 0, ',', '.') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- tab product -->
                                    <div class="tab-panel" id="tab-5">
                                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true"
                                            data-nav = "true" data-margin = "0" data-autoplayTimeout="1000"
                                            data-autoplayHoverPause = "true"
                                            data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/04_nice-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/05_flowers-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/06_red-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/01_blue-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Blue Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/02_yellow-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Yellow Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/03_cyan-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Cyan Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/04_nice-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/05_flowers-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left-block">
                                                    <a href="#">
                                                        <img class="img-responsive" alt="product"
                                                            src="customer/assets/data/06_red-dress.jpg" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- end featured category fashion -->

            <!-- Baner bottom -->
            <div class="row banner-bottom">
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive"
                                src="customer/assets/data/ads17.jpg" /></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive"
                                src="customer/assets/data/ads18.jpg" /></a>
                    </div>
                </div>
            </div>
            <!-- end banner bottom -->
        </div>
    </div>
@endsection
