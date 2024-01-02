@extends('layouts.customer.main')

@section('title')
    {{ $product->name }}
@endsection

@push('addon-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/assets/lib/fancyBox/jquery.fancybox.css') }}" />
@endpush

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <a href="{{ 'category/' . $product->product_subcategory->slug }}"
                    title="Return to Home">{{ $product->product_subcategory->name }}</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">{{ $product->name }}</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">

                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12" id="center_column">
                    <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-5">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src="{{ Storage::url($product->photo) }}"
                                            data-zoom-image="{{ Storage::url($product->photo) }}" />
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false"
                                            data-margin="21" data-loop="false">
                                            @foreach ($product->details as $product_detail)
                                                @if ($product_detail->image)
                                                <li>
                                                    <a href="{{ url('product/' . $product->slug) }}"
                                                        data-image="{{ Storage::url($product_detail->image) }}"
                                                        data-zoom-image="{{ Storage::url($product_detail->image) }}">
                                                        <img id="product-zoom"
                                                            src="{{ Storage::url($product_detail->image) }}" />
                                                    </a>
                                                </li>
                                                @endif
                                            @endforeach
                                            @foreach ($product->images as $product_image)
                                                <li>
                                                    <a href="{{ url('product/' . $product->slug) }}"
                                                        data-image="{{ Storage::url($product_image->image) }}"
                                                        data-zoom-image="{{ Storage::url($product_image->image) }}">
                                                        <img id="product-zoom"
                                                            src="{{ Storage::url($product_image->image) }}" />
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-7">
                                <h1 class="product-name">{{ $product->name }}</h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    {{-- <div class="comments-advices">
                                        <a href="#">Based on 3 ratings</a>
                                        <a href="#"><i class="fa fa-pencil"></i> write a review</a>
                                    </div> --}}
                                </div>
                                <div class="product-price-group">
                                    <span
                                        class="price">Rp{{ number_format($product->details->first()->price, 0, ',', '.') }}</span>
                                    {{-- <span class="old-price">$52.00</span>
                                    <span class="discount">-30%</span> --}}
                                </div>
                                <div class="info-orther">
                                    <p>SKU: #{{ $product->details[0]->sku }}</p>
                                    <p>Availability: <span class="in-stock">{{ $product->details->first()->stock }}</span>
                                    </p>
                                    <p>Condition: New</p>
                                </div>
                                <div class="product-desc">
                                    {!! $product->description !!}
                                </div>
                                
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Error!</strong> {{ $error }}
                                        </div>
                                    @endforeach
                                @endif

                                <form action="{{ route('cart.store') }}" id="formSubmission" method="post" id="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-option">
                                        <div class="attributes">
                                            <div class="attribute-label">Qty:</div>
                                            <div class="attribute-list">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input id="option-product-qty" class="form-control" type="number" name="quantity" value="1" min="1">
                                            </div>
                                        </div>
                                        @if (count($product->details) > 1)
                                            <div class="attributes">
                                                <div class="attribute-label">Size:</div>
                                                <div class="attribute-list">
                                                    <select name="product_detail_id">
                                                        @foreach ($product->details as $variant)
                                                        <option value="{{ $variant->id }}">{{ $variant->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <a id="size_chart" class="fancybox"
                                                        href="{{ Storage::url($product->photo) }}">Size
                                                        Chart</a>
                                                </div>
    
                                            </div>
                                        @else
                                            <input type="hidden" name="product_detail_id" value="{{ $product->details[0]->id }}">
                                        @endif
                                    </div>
                                    <div class="form-action">
                                        <div class="button-group">
                                            <div class="loader" style="display: none"></div>
                                            @auth
                                            <button class="btn-add-cart" type="submit">Add to cart</button>
                                            @else
                                            <a class="btn-add-cart" href="{{ route('login') }}">Add to cart</a>
                                            @endauth
                                        </div>
                                        {{-- <div class="button-group">
                                            <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                                <br>Wishlist</a>
                                            <a class="compare" href="#"><i class="fa fa-signal"></i>
                                                <br>
                                                Compare</a>
                                        </div> --}}
                                    </div>
                                </form>

                                {{-- <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">information</a>
                                </li>
                                {{-- <li>
                                    <a data-toggle="tab" href="#reviews">reviews</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#extra-tabs">Extra Tabs</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#guarantees">guarantees</a>
                                </li> --}}
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    {!! $product->description !!}
                                </div>
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="200">Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr>
                                            <td>Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Colorful Dress</td>
                                        </tr>
                                    </table>
                                </div>
                                {{-- <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Jame</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet
                                                convallis pulvinar
                                            </div>
                                        </div>
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Author</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet
                                                convallis pulvinar
                                            </div>
                                        </div>
                                        <p>
                                            <a class="btn-comment" href="#">Write your review !</a>
                                        </p>
                                    </div>

                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis
                                        pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a
                                        libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus
                                        ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.
                                    </p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci.
                                        Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et
                                        nisl sagittis vestibulum. Aliquam eu nunc.</p>
                                </div>
                                <div id="guarantees" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis
                                        pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a
                                        libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus
                                        ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.
                                    </p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci.
                                        Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et
                                        nisl sagittis vestibulum. Aliquam eu nunc.</p>
                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus
                                        ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.
                                    </p>
                                </div> --}}
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Related Products</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true"
                                data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true"
                                data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                @foreach ($related_products as $related_product)
                                    <li>
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="{{ url('product/' . $related_product->slug) }}">
                                                    <img class="img-responsive" alt="product"
                                                        src="{{ Storage::url($related_product->photo) }}" />
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#add">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a
                                                        href="{{ url('product/' . $related_product->slug) }}">{{ $related_product->name }}</a>
                                                </h5>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="content_price">
                                                    <span
                                                        class="price product-price">Rp{{ number_format($product->details->first()->price, 0, ',', '.') }}</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        {{-- <div class="page-product-box">
                            <h3 class="heading">You might also like</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true"
                                data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true"
                                data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                @foreach ($products as $product)
                                    <li>
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="{{ url('product/' . $product->slug) }}">
                                                    <img class="img-responsive" alt="product"
                                                        src="{{ Storage::url($product->photo) }}" />
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#add">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a
                                                        href="{{ url('product/' . $product->slug) }}">{{ $product->name }}</a>
                                                </h5>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="content_price">
                                                    <span
                                                        class="price product-price">Rp{{ number_format($product->details->first()->price, 0, ',', '.') }}</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div> --}}
                        <!-- ./box product -->
                    </div>
                    <!-- Product -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection

@push('addon-script')
    <script type="text/javascript" src="{{ asset('customer/assets/lib/jquery.elevatezoom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('customer/assets/lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('customer/assets/lib/fancyBox/jquery.fancybox.js') }}"></script>
@endpush
