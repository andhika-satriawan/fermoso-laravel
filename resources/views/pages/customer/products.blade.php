@extends('layouts.customer.main')

@section('title')
    Products
@endsection

@push('addon-style')
    <style>
        .product-list li .product-name {
            float: left;
        }

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
            height: 45px;
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
                            <!-- layered -->
                            <div class="layered layered-filter-price">
                                <!-- filter categgory -->
                                <div class="layered_subtitle">CATEGORIES</div>
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        @foreach ($product_subcategories as $product_subcategory)
                                            <li>
                                                <span></span>
                                                <a href="{{ url('product/category/' . $product_subcategory->slug) }}">
                                                    {{ $product_subcategory->name }}
                                                    <span class="count">({{ $product_subcategory->product_count }})</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- ./filter categgory -->
                                <!-- filter price -->
                                <div class="layered_subtitle">price</div>
                                <div class="layered-content slider-range">

                                    <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$"
                                        class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                                    <div class="amount-range-price">Range: Rp100.000 - Rp1000.000</div>
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="p1" name="cc" />
                                            <label for="p1">
                                                <span class="button"></span>
                                                Rp20 - Rp50<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="p2" name="cc" />
                                            <label for="p2">
                                                <span class="button"></span>
                                                Rp50 - Rp100<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="p3" name="cc" />
                                            <label for="p3">
                                                <span class="button"></span>
                                                Rp100 - Rp250<span class="count">(0)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./filter price -->
                            </div>
                            <!-- ./layered -->

                        </div>
                    </div>
                    <!-- ./block filter  -->

                    <!-- left silide -->
                    <div class="col-left-slide left-module">
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

                    </div>
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
                        <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true"
                            data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                            @foreach ($product_sliders as $slider)
                            <li>
                                <img src="{{ Storage::url($slider->image)}}" alt="product-slider">
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- ./category-slider -->
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

@push('addon-script')
    <script type="text/javascript" src="customer/assets/lib/jquery-ui/jquery-ui.min.js"></script>
@endpush
