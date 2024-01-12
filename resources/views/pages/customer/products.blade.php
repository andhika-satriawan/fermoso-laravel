@extends('layouts.customer.main')

@section('title')
    Products
@endsection

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
                                    <div class="amount-range-price">Range: $50 - $350</div>
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="p1" name="cc" />
                                            <label for="p1">
                                                <span class="button"></span>
                                                $20 - $50<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="p2" name="cc" />
                                            <label for="p2">
                                                <span class="button"></span>
                                                $50 - $100<span class="count">(0)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="p3" name="cc" />
                                            <label for="p3">
                                                <span class="button"></span>
                                                $100 - $250<span class="count">(0)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./filter price -->

                                <!-- ./filter size -->
                                <div class="layered_subtitle">Size</div>
                                <div class="layered-content filter-size">
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="size1" name="cc" />
                                            <label for="size1">
                                                <span class="button"></span>X
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size2" name="cc" />
                                            <label for="size2">
                                                <span class="button"></span>XXL
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size3" name="cc" />
                                            <label for="size3">
                                                <span class="button"></span>XL
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size4" name="cc" />
                                            <label for="size4">
                                                <span class="button"></span>XXL
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size5" name="cc" />
                                            <label for="size5">
                                                <span class="button"></span>M
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size6" name="cc" />
                                            <label for="size6">
                                                <span class="button"></span>XXS
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size7" name="cc" />
                                            <label for="size7">
                                                <span class="button"></span>S
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size8" name="cc" />
                                            <label for="size8">
                                                <span class="button"></span>XS
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size9" name="cc" />
                                            <label for="size9">
                                                <span class="button"></span>34
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size10" name="cc" />
                                            <label for="size10">
                                                <span class="button"></span>36
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size11" name="cc" />
                                            <label for="size11">
                                                <span class="button"></span>35
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size12" name="cc" />
                                            <label for="size12">
                                                <span class="button"></span>37
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ./filter size -->
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
                    <!-- category-slider -->
                    <div class="category-slider">
                        <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true"
                            data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                            <li>
                                <img src="customer/assets/data/category-slide.jpg" alt="category-slider">
                            </li>
                            <li>
                                <img src="customer/assets/data/slide-cart2.jpg" alt="category-slider">
                            </li>
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
                            @foreach ($product_subcategories as $product_subcategory)
                                @foreach ($product_subcategory->products as $product)
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
                            @endforeach

                        </ul>
                        <!-- ./PRODUCT LIST -->
                    </div>
                    <!-- ./view-product-list-->
                    <div class="sortPagiBar">
                        <div class="bottom-pagination">
                            <nav>
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">Next &raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="show-product-item">
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
                        </div>
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
