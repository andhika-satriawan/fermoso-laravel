@extends('layouts.customer.main')

@section('title')
    Products
@endsection

@push('addon-style')
    <style>
        /* .product-list li .product-name {
                                float: left;
                            } */

        .product-list li .product-price {
            font-size: 12px;
        }

        .product-container .right-block a {
            font-size: 12px;
        }

        .product-list li .product-star {
            font-size: 11px;
        }

        .product-list li .right-block {
            height: 58px;
        }

        .product-list li .left-block {
            height: 217.81px;
            overflow: hidden;
        }
    </style>
@endpush

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">

            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">All Product</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- block filter -->
                    <div class="block left-module">
                        <p class="title_block">Filter selection</p>
                        <div class="block_content">
                            <form action="{{ route('products_filter') }}" id="formFilterSubmission" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- layered -->
                                <div class="layered layered-filter-price">
                                    <!-- filter categgory -->
                                    <div class="layered_subtitle">CATEGORIES</div>
                                    <div class="layered-content">
                                        <ul class="check-box-list">
                                            @foreach ($product_subcategories as $product_subcategory)
                                                <li>
                                                    <input type="radio" id="subcategory-{{ $product_subcategory->id }}"
                                                        name="subcategory" value="{{ $product_subcategory->id }}"
                                                        @if (request()->get('subcategory') == $product_subcategory->id) checked @endif />
                                                    <label for="subcategory-{{ $product_subcategory->id }}">
                                                        {{-- <span class="button"></span> --}}
                                                        {{ $product_subcategory->name }} <span
                                                            class="count">({{ $product_subcategory->products_count }})</span>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- ./filter categgory -->
                                    <!-- filter price -->
                                    <div class="layered_subtitle">price</div>
                                    <div class="layered-content slider-range">

                                        <div data-label-reasult="Range:" data-min="10000" data-max="10000000" data-unit="Rp"
                                            class="slider-range-price"
                                            data-value-min="{{ request()->get('price_from') ?? '10000' }}"
                                            data-value-max="{{ request()->get('price_to') ?? '10000000' }}"></div>
                                        <div class="amount-range-price">Range:
                                            Rp{{ request()->get('price_from') ?? '10.000' }} -
                                            Rp{{ request()->get('price_to') ?? '10.000.000' }}</div>
                                        <input type="hidden" name="price_from" class="range-price-from">
                                        <input type="hidden" name="price_to" class="range-price-to">
                                    </div>
                                    <!-- ./filter price -->
                                    <div>
                                        <button class="button" type="submit"><i class="fa fa-lock"></i> Filter</button>
                                        <a href="{{ route('products') }}" class="text-danger">Clear</a>
                                    </div>
                                </div>
                                <!-- ./layered -->
                            </form>
                        </div>
                    </div>
                    <!-- ./block filter  -->

                    <!-- left silide -->
                    {{-- <div class="col-left-slide left-module">
                        <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "30"
                            data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1"
                            data-autoplay="true">
                            <li><a href="#"><img src="customer/assets/data/slide-left.jpg" alt="slide-left"></a>
                            </li>
                            <li><a href="#"><img src="customer/assets/data/slide-left2.jpg" alt="slide-left"></a>
                            </li>
                            <li><a href="#"><img src="customer/assets/data/slide-left3.png" alt="slide-left"></a>
                            </li>
                        </ul>
                    </div> --}}
                    <!--./left silde-->
                    <!-- SPECIAL -->
                    <div class="block left-module">
                        <p class="title_block">SPECIAL PRODUCTS</p>
                        <div class="block_content">
                            <ul class="products-block">
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="customer/assets/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">Woman Within Plus Size Flared</a>
                                        </p>
                                        <p class="product-price">$38,95</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="products-block">
                                <div class="products-block-bottom">
                                    <a class="link-all" href="#">All Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./SPECIAL -->
                </div>
                <!-- ./left colunm -->

                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <!-- product-slider -->
                    <div class="product-slider">
                        @if (request()->get('subcategory'))
                            <ul class="owl-carousel owl-style2" data-dots="false" data-loop="false" data-nav="false"
                                data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                                <li>
                                    <img src="{{ Storage::url($filters['subcategory_selected']->banner_top) }}"
                                        alt="product-category-slider">
                                </li>
                            </ul>
                        @else
                            <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true"
                                data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                                @foreach ($product_sliders as $slider)
                                    <li>
                                        <img src="{{ Storage::url($slider->image) }}" alt="product-slider">
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <!-- ./category-slider -->

                    <div>
                        @if (request()->get('search'))
                            <h2 style="margin-top: 20px">Search: <span
                                    class="text-primary">{{ request()->get('search') }}</span></h2>
                        @endif
                        @if (request()->get('subcategory'))
                            <h2 style="margin-top: 20px">Subcategory: <span
                                    class="text-primary">{{ $filters['subcategory_selected']->name }}</span></h2>
                        @endif
                        @if (request()->get('price_from') || request()->get('price_from'))
                            <h2 style="margin-top: 20px">Price: <span class="text-primary">Rp
                                    {{ $filters['price_from'] > 0 ? number_format($filters['price_from'], 0, ',', '.') : 'Undefined' }}</span>
                                - <span class="text-primary">Rp
                                    {{ $filters['price_to'] > 0 ? number_format($filters['price_to'], 0, ',', '.') : 'Undefined' }}</span>
                            </h2>
                        @endif
                        <h2 style="margin-top: 20px">Show: <span
                                class="text-primary">{{ number_format($filters['product_count'], 0, ',', '.') }}
                                Product(s)</span></h2>
                    </div>

                    <!-- view-product-list-->
                    <div id="view-product-list" class="view-product-list">
                        <h2 class="page-heading">
                            <span class="page-heading-title">All Product</span>
                        </h2>
                        <ul class="display-product-option">
                            <li class="view-as-grid selected">
                                <span>grid</span>
                            </li>
                            <li class="view-as-list">
                                <span>list</span>
                            </li>
                        </ul>
                        <!-- PRODUCT LIST -->
                        <ul class="row product-list grid">
                            @foreach ($products as $product)
                                <li class="col-sx-12 col-sm-3">
                                    <div class="product-container">
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
                                            <div class="info-orther">
                                                <p>SKU: #{{ $product->details->first()->sku }}</p>
                                                <p class="availability">Availability:
                                                    <span>{{ $product->details->first()->stock }}</span>
                                                </p>
                                                <div class="product-desc">{!! $product->description !!}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- ./PRODUCT LIST -->
                    </div>
                    <!-- ./view-product-list-->
                    <div class="sortPagiBar">
                        <div class="bottom-pagination">
                            @if ($products->hasPages())
                                <div class="pagination-wrapper">
                                    {{ $products->links('pagination::bootstrap-4') }}
                                </div>
                            @endif
                        </div>
                        {{-- <div class="show-product-item">
                            <select name="">
                                <option value="">Show 18</option>
                                <option value="">Show 20</option>
                                <option value="">Show 50</option>
                                <option value="">Show 100</option>
                            </select>
                        </div>
                        <div class="sort-product">
                            <select>
                                <option value="">Product Name</option>
                                <option value="">Price</option>
                            </select>
                            <div class="sort-product-icon">
                                <i class="fa fa-sort-alpha-asc"></i>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection

@push('addon-style')
    <style>
        input[type='radio'] {
            margin: 0;
        }

        input[type='radio'],
        label {
            display: inline;
            vertical-align: top;
        }
    </style>
@endpush

@push('addon-script')
    <script type="text/javascript" src="customer/assets/lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
@endpush
