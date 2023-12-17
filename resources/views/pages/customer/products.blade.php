@extends('layouts.customer.main')

@push('addon-style-4de37')
    <link rel="stylesheet" href="{{ asset('css/4de37.css') }}" />
@endpush
@push('addon-style-products-2b01b')
    <link rel="stylesheet" href="{{ asset('css/2b01b.css') }}" />
@endpush
@push('addon-style-products-da031')
    <link rel="stylesheet" href="{{ asset('css/da031.css') }}" />
@endpush

@section('container')
    <div id=content class="container site-content sidebar-left shop-page">
        <nav class=woocommerce-breadcrumb><a href=https://kuteshop.kutethemes.net>Home</a><span
                class=delimiter></span>Market</nav>
        <div id=primary class=content-area>
            <main id=main class=site-main>
                <header class=woocommerce-products-header></header>
                <div class=woocommerce-notices-wrapper></div>
                <div class="shop-control shop-before-control">
                    <h1 class="page-title entry-title">
                        <span>Market</span>
                    </h1>
                    <div class=display-per-page-inline>
                        <p class=title>Show:</p>
                        <form class=per-page-form method=GET
                            action=https://kuteshop.kutethemes.net/product-category/market />
                        <button type=submit name=product_per_page value=3 class=button>
                            03 </button>
                        / <button type=submit name=product_per_page value=6 class=button>
                            06 </button>
                        / <button type=submit name=product_per_page value=9 class=button>
                            09 </button>
                        / <button type=submit name=product_per_page value=12 class=button>
                            12 </button>
                        / <button type=submit name=product_per_page value=-1 class=button>
                            All </button>
                        <input type=hidden name=demo value=21>
                        </form>
                    </div>
                    <div class=display-mode-control>
                        <form class=display-mode method=get
                            action=https://kuteshop.kutethemes.net/product-category/market />
                        <button type=submit value=list name=shop_page_layout class="mode-list ">
                            <span class=icon>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <button type=submit value=grid name=shop_page_layout class="mode-grid active">
                            <span class=icon>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <input type=hidden name=demo value=21>
                        </form>
                    </div>
                    <div class=display-sort-by>
                        <form class=woocommerce-ordering method=get>
                            <select name=orderby class=orderby aria-label="Shop order">
                                <option value=popularity>Popularity</option>
                                <option value=rating>Average Rating</option>
                                <option value=date selected=selected>Latest</option>
                                <option value=price>Price: Low To High</option>
                                <option value=price-desc>Price: High To Low</option>
                                <option value=sale>Sale</option>
                                <option value=on-sale>On-Sale</option>
                                <option value=feature>Feature</option>
                            </select>
                            <input type=hidden name=paged value=1>
                            <input type=hidden name=demo value=21>
                        </form>
                    </div>
                </div>
                <ul class="products shop-page response-content columns-3 ovic-products style-01 border-full">
                    @foreach ($product_subcategories as $product_subcategory)
                        @foreach ($product_subcategory->products as $product)
                            <li data-product_id="{{ $product->id }}"
                                class="product-item style-01 rtwpvs-product product type-product post-2222 status-publish first instock product_cat-for-women product_cat-summer-dresses product_tag-market has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                <div class="product-inner product-01 add-cart-01">
                                    <div class="product-thumb tooltip-wrap tooltip-start">
                                        <div class=thumb-wrapper>
                                            <a class="thumb-link hover-zoom woocommerce-product-gallery__image"
                                                href="{{ url('product/' . $product->slug) }}">
                                                <figure class=primary-thumb><img width=850 height=1021
                                                        src="{{ Storage::url($product->photo) }}"
                                                        class="attachment-850x1021 size-850x1021 wp-post-image" alt
                                                        loading=lazy>
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="group-button style-01 popup">
                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2222  wishlist-fragment on-first-load"
                                                data-fragment-ref=2222
                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:2222,&quot;parent_product_id&quot;:2222,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;main-icon-heart1 ovic-wl-icon&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                <div class=yith-wcwl-add-button>
                                                    <a href="?add_to_wishlist=2222&#038;_wpnonce=66865b33fb"
                                                        class="add_to_wishlist single_add_to_wishlist" data-product-id=2222
                                                        data-product-type=variable data-original-product-id=2222
                                                        data-title=Wishlist rel=nofollow>
                                                        <i class="yith-wcwl-icon fa main-icon-heart1 ovic-wl-icon"></i>
                                                        <span>Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="woocommerce product compare-button"><a
                                                    href="https://kuteshop.kutethemes.net?action=yith-woocompare-add-product&id=2222"
                                                    class="compare button" data-product_id=2222 rel=nofollow>Compare</a>
                                            </div><a href=# class="button yith-wcqv-button" data-product_id=2222>Quick
                                                View</a>
                                        </div>
                                        <span class=add-to-cart data-title="Select options"><a
                                                href=https://kuteshop.kutethemes.net/product/womens-cocktail-dress/
                                                data-quantity=1
                                                class="button product_type_variable add_to_cart_button rtwpvs_add_to_cart rtwpvs_ajax_add_to_cart"
                                                data-product_id=2222 data-product_sku=MK-FS-005
                                                aria-label="Select options for &ldquo;Women’s Cocktail Dress&rdquo;"
                                                aria-describedby="This product has multiple variants. The options may be chosen on the product page"
                                                rel=nofollow data-variation_id data-variation>Select options</a></span>
                                    </div>
                                    <div class="product-info equal-elem">
                                        <h2 class="product-title"><a
                                                href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?demo=21">Women’s
                                                Cocktail Dress</a></h2>
                                        <div class=star-rating-wrap>
                                            <div class=star-rating role=img aria-label="Rated 4.00 out of 5"><span
                                                    style=width:80%>Rated <strong class=rating>4.00</strong> out of 5</span>
                                            </div><strong class=rating-count>01</strong>
                                        </div>
                                        <span class=price>
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                    <span class=woocommerce-Price-currencySymbol>Rp</span>
                                                    {{ $product->details->first()->price }}
                                                </bdi>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
                <div class="shop-control shop-after-control">
                    <div class="woocommerce-pagination pagination-nav type-pagination">
                        <ul class=page-numbers>
                            <li><span aria-current=page class="page-numbers current">1</span></li>
                            <li><a class=page-numbers
                                    href="https://kuteshop.kutethemes.net/product-category/market/page/2/?demo=21">2</a>
                            </li>
                            <li><a class=page-numbers
                                    href="https://kuteshop.kutethemes.net/product-category/market/page/3/?demo=21">3</a>
                            </li>
                            <li><span class="page-numbers dots">&hellip;</span></li>
                            <li><a class=page-numbers
                                    href="https://kuteshop.kutethemes.net/product-category/market/page/8/?demo=21">8</a>
                            </li>
                            <li><a class=page-numbers
                                    href="https://kuteshop.kutethemes.net/product-category/market/page/9/?demo=21">9</a>
                            </li>
                            <li><a class="next page-numbers"
                                    href="https://kuteshop.kutethemes.net/product-category/market/page/2/?demo=21">Next</a>
                            </li>
                        </ul>
                    </div>
                    <p class=woocommerce-result-count>
                        Showing 1&ndash;18 of 154 results</p>
                </div>
            </main>
        </div>
        <aside id=secondary class="widget-area shop-widget-area" role=complementary aria-label="Shop Sidebar">
            <div class=sidebar-inner>
                <div id=woocommerce_product_categories-2 class="widget woocommerce widget_product_categories">
                    <h2 class="widget-title"><span class=text>Categories</span><span class=arrow></span></h2>
                    <ul class=product-categories>
                        @foreach ($product_subcategories as $product_subcategory)
                            <li class="cat-item cat-item-{{ $product_subcategory->id }}">
                                <a href="{{ url('product-category/' . $product_subcategory->slug) }}">
                                    {{ $product_subcategory->name }}</a>
                                <span class=count>({{ $product_subcategory->product_count }})</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id=ovic_woocommerce_layered_nav-3 class="widget ovic_widget_layered_nav widget_layered_nav">
                    <h2 class="widget-title"><span class=text>Size</span><span class=arrow></span></h2>
                    <ul class=woocommerce-widget-layered-nav-list>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel=nofollow
                                href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_size=s">S</a>
                            <span class=count>(71)</span>
                        </li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel=nofollow
                                href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_size=m">M</a>
                            <span class=count>(71)</span>
                        </li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel=nofollow
                                href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_size=l">L</a>
                            <span class=count>(71)</span>
                        </li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel=nofollow
                                href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_size=xl">XL</a>
                            <span class=count>(71)</span>
                        </li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel=nofollow
                                href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_size=2xl">2XL</a>
                            <span class=count>(70)</span>
                        </li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel=nofollow
                                href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_size=xxl">XXL</a>
                            <span class=count>(70)</span>
                        </li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel=nofollow
                                href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_size=3xl">3XL</a>
                            <span class=count>(70)</span>
                        </li>
                    </ul>
                </div>
                <div id=ovic_woocommerce_layered_nav-2 class="widget ovic_widget_layered_nav widget_layered_nav">
                    <h2 class="widget-title"><span class=text>Color</span><span class=arrow></span></h2>
                    <div class="box-group group-color">
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=red"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #ff0000"></i>
                            <span class=term-name>Red</span>
                            <span class=count>(68)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=black"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #000000"></i>
                            <span class=term-name>Black</span>
                            <span class=count>(69)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=blue"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #2196f3"></i>
                            <span class=term-name>Blue</span>
                            <span class=count>(67)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=brown"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #795548"></i>
                            <span class=term-name>Brown</span>
                            <span class=count>(69)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=green"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #9fac76"></i>
                            <span class=term-name>Green</span>
                            <span class=count>(68)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=yellow"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #fdd835"></i>
                            <span class=term-name>Yellow</span>
                            <span class=count>(69)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=cyan"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #01bdae"></i>
                            <span class=term-name>Cyan</span>
                            <span class=count>(67)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=white"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #ffffff"></i>
                            <span class=term-name>White</span>
                            <span class=count>(68)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=beige"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #f6deb8"></i>
                            <span class=term-name>Beige</span>
                            <span class=count>(67)</span> </a>
                        <a class=term-color
                            href="https://kuteshop.kutethemes.net/product-category/market/?demo=21&#038;filter_color=grey"
                            style="font-size: 16px">
                            <i style="display:inline-block;width:24px;height:24px;background-color: #cccccc"></i>
                            <span class=term-name>Grey</span>
                            <span class=count>(68)</span> </a>
                    </div>
                </div>
                <div id=woocommerce_product_brand-2
                    class="widget woocommerce widget_product_brand widget_product_categories">
                    <h2 class="widget-title"><span class=text>Manufatures</span><span class=arrow></span></h2>
                    <ul class="product-categories list">
                        <li class="cat-item cat-item-360 cat-parent"><a
                                href="https://kuteshop.kutethemes.net/product-brand/market/?demo=21">Market</a>
                            <span class=count>(135)</span>
                            <ul class=children>
                                <li class="cat-item cat-item-362 cat-parent"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/market/digital/?demo=21">Digital</a>
                                    <span class=count>(30)</span>
                                    <ul class=children>
                                        <li class="cat-item cat-item-283"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-7/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-7.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-7.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-7-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-7-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-7-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Canon</a> <span
                                                class=count>(4)</span></li>
                                        <li class="cat-item cat-item-285"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-9/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-9.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-9.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-9-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-9-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-9-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Daikin</a> <span
                                                class=count>(3)</span></li>
                                        <li class="cat-item cat-item-282"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-6/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-6.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-6.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-6-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-6-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-6-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Dell</a> <span
                                                class=count>(0)</span></li>
                                        <li class="cat-item cat-item-281"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-5/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-5.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-5.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-5-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-5-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-5-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">LG</a> <span
                                                class=count>(3)</span></li>
                                        <li class="cat-item cat-item-280"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-4/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-4.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-4.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-4-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-4-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-4-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Nokia</a> <span
                                                class=count>(1)</span></li>
                                        <li class="cat-item cat-item-284"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-8/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-8.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-8.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-8-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-8-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-8-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Oppo</a> <span
                                                class=count>(2)</span></li>
                                        <li class="cat-item cat-item-278"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-2/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-2.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-2.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-2-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-2-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-2-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Samsung</a> <span
                                                class=count>(4)</span></li>
                                        <li class="cat-item cat-item-279"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-3/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-3.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-3.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-3-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-3-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-3-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Sharp</a> <span
                                                class=count>(6)</span></li>
                                        <li class="cat-item cat-item-277"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/digital/05-brand-1/?demo=21"><img
                                                    width=146 height=50
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-1.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-1.png 146w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-1-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-1-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/05-brand-1-84x29.png 84w"
                                                    sizes="(max-width: 146px) 100vw, 146px">Sony</a> <span
                                                class=count>(7)</span></li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-363 cat-parent"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/market/fashion/?demo=21">Fashion</a>
                                    <span class=count>(105)</span>
                                    <ul class=children>
                                        <li class="cat-item cat-item-209"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/guerlain/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-guerlain.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-guerlain.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-guerlain-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-guerlain-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-guerlain-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-guerlain-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Guerlain</a> <span
                                                class=count>(23)</span></li>
                                        <li class="cat-item cat-item-210"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/hermes/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-hermes.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-hermes.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-hermes-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-hermes-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-hermes-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-hermes-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Hermes</a> <span
                                                class=count>(7)</span></li>
                                        <li class="cat-item cat-item-211"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/gucci/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-gucci-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Gucci</a> <span
                                                class=count>(34)</span></li>
                                        <li class="cat-item cat-item-212"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/etro/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-etro.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-etro.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-etro-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-etro-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-etro-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-etro-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Etro</a> <span
                                                class=count>(10)</span></li>
                                        <li class="cat-item cat-item-213"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/paul-smith/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-paul-smith.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-paul-smith.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-paul-smith-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-paul-smith-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-paul-smith-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-paul-smith-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Paul Smith</a> <span
                                                class=count>(16)</span></li>
                                        <li class="cat-item cat-item-214"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/cartier/?demo=21"><img
                                                    width=117 height=40
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/tab-cartier.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/tab-cartier.png 117w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/tab-cartier-86x29.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/tab-cartier-64x22.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/tab-cartier-88x30.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/tab-cartier-84x29.png 84w"
                                                    sizes="(max-width: 117px) 100vw, 117px">Cartier</a> <span
                                                class=count>(17)</span></li>
                                        <li class="cat-item cat-item-215"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/inside-fashion/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-inside-fashion.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-inside-fashion.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-inside-fashion-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-inside-fashion-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-inside-fashion-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-inside-fashion-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Inside Fashion</a> <span
                                                class=count>(5)</span></li>
                                        <li class="cat-item cat-item-216"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/lack/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-lack.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-lack.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-lack-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-lack-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-lack-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-lack-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Lack</a> <span
                                                class=count>(18)</span></li>
                                        <li class="cat-item cat-item-217"><a
                                                href="https://kuteshop.kutethemes.net/product-brand/market/fashion/chanel/?demo=21"><img
                                                    width=180 height=100
                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel.png
                                                    class="attachment-full size-full wp-post-image" alt decoding=async
                                                    loading=lazy
                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel.png 180w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-86x48.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-64x36.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-88x49.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/brand-chanel-84x47.png 84w"
                                                    sizes="(max-width: 180px) 100vw, 180px">Chanel</a> <span
                                                class=count>(34)</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-361 cat-parent"><a
                                href="https://kuteshop.kutethemes.net/product-brand/fashion-bg/?demo=21">Fashion
                                Bg</a> <span class=count>(6)</span>
                            <ul class=children>
                                <li class="cat-item cat-item-306"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/fashion-bg/fashion-bg-3/?demo=21"><img
                                            width=139 height=95
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-11.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-11.png 139w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-11-86x59.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-11-64x44.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-11-84x57.png 84w"
                                            sizes="(max-width: 139px) 100vw, 139px">Bike Club</a> <span
                                        class=count>(0)</span></li>
                                <li class="cat-item cat-item-304"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/fashion-bg/fashion-bg-1/?demo=21"><img
                                            width=139 height=95
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-9.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-9.png 139w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-9-86x59.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-9-64x44.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-9-84x57.png 84w"
                                            sizes="(max-width: 139px) 100vw, 139px">Lumber Jack</a> <span
                                        class=count>(4)</span></li>
                                <li class="cat-item cat-item-305"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/fashion-bg/fashion-bg-2/?demo=21"><img
                                            width=139 height=95
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-10.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-10.png 139w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-10-86x59.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-10-64x44.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-10-84x57.png 84w"
                                            sizes="(max-width: 139px) 100vw, 139px">Retro Races</a> <span
                                        class=count>(2)</span></li>
                                <li class="cat-item cat-item-307"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/fashion-bg/fashion-bg-4/?demo=21"><img
                                            width=139 height=95
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-12.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-12.png 139w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-12-86x59.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-12-64x44.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/fas_bg-img-12-84x57.png 84w"
                                            sizes="(max-width: 139px) 100vw, 139px">Woody Nature</a> <span
                                        class=count>(0)</span></li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-135 cat-parent"><a
                                href="https://kuteshop.kutethemes.net/product-brand/appliances-2/?demo=21">Appliances</a>
                            <span class=count>(49)</span>
                            <ul class=children>
                                <li class="cat-item cat-item-136"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/cross/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand1.jpg
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand1.jpg 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand1-86x44.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand1-64x33.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand1-88x45.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand1-84x43.jpg 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Cross</a> <span class=count>(5)</span>
                                </li>
                                <li class="cat-item cat-item-137"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/acqua-di-parma/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand2.jpg
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand2.jpg 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand2-86x44.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand2-64x33.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand2-88x45.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand2-84x43.jpg 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Acqua Di Parma</a> <span
                                        class=count>(1)</span></li>
                                <li class="cat-item cat-item-138"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/febreze/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand3.jpg
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand3.jpg 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand3-86x44.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand3-64x33.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand3-88x45.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand3-84x43.jpg 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Febreze</a> <span
                                        class=count>(1)</span></li>
                                <li class="cat-item cat-item-139"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/woll/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand4.jpg
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand4.jpg 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand4-86x44.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand4-64x33.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand4-88x45.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand4-84x43.jpg 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">WOLL</a> <span class=count>(6)</span>
                                </li>
                                <li class="cat-item cat-item-140"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/the-north-face/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand5.jpg
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand5.jpg 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand5-86x44.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand5-64x33.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand5-88x45.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand5-84x43.jpg 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">The North Face</a> <span
                                        class=count>(1)</span></li>
                                <li class="cat-item cat-item-141"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/gateman/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand6.jpg
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand6.jpg 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand6-86x44.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand6-64x33.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand6-88x45.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand6-84x43.jpg 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Gateman</a> <span
                                        class=count>(21)</span></li>
                                <li class="cat-item cat-item-142"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/furniture-m/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand7.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand7.png 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand7-86x44.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand7-64x33.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand7-88x45.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand7-84x43.png 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Furniture</a> <span
                                        class=count>(14)</span></li>
                                <li class="cat-item cat-item-143"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/microwave/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand8.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand8.png 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand8-86x44.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand8-64x33.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand8-88x45.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand8-84x43.png 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Microwave</a> <span
                                        class=count>(2)</span></li>
                                <li class="cat-item cat-item-144"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/kettlet/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand9.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand9.png 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand9-86x44.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand9-64x33.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand9-88x45.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand9-84x43.png 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Kettlet</a> <span
                                        class=count>(1)</span></li>
                                <li class="cat-item cat-item-145"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/appliances/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand10.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand10.png 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand10-86x44.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand10-64x33.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand10-88x45.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand10-84x43.png 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Appliances</a> <span
                                        class=count>(5)</span></li>
                                <li class="cat-item cat-item-146"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/lighting/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand11.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand11.png 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand11-86x44.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand11-64x33.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand11-88x45.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand11-84x43.png 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Lighting</a> <span
                                        class=count>(3)</span></li>
                                <li class="cat-item cat-item-147"><a
                                        href="https://kuteshop.kutethemes.net/product-brand/appliances-2/ipad-m/?demo=21"><img
                                            width=124 height=63
                                            src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand12.png
                                            class="attachment-full size-full wp-post-image" alt decoding=async loading=lazy
                                            srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand12.png 124w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand12-86x44.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand12-64x33.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand12-88x45.png 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/brand12-84x43.png 84w"
                                            sizes="(max-width: 124px) 100vw, 124px">Ipad</a> <span class=count>(2)</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id=media_image-2 class="widget widget_media_image"><a href=https://kuteshop.kutethemes.net /><img
                        width=330 height=190 src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1.jpg
                        class="image wp-image-60  attachment-full size-full wp-post-image" alt
                        style="max-width: 100%; height: auto;" decoding=async loading=lazy
                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1.jpg 330w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1-300x173.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1-220x127.jpg 220w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1-86x50.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1-64x37.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1-88x51.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/widget-1-84x48.jpg 84w"
                        sizes="(max-width: 330px) 100vw, 330px"></a></div>
                <div id=woocommerce_products-2 class="widget woocommerce widget_products">
                    <h2 class="widget-title"><span class=text>Special Offers!</span><span class=arrow></span></h2>
                    <ul class=product_list_widget>
                        <li>
                            <a href=https://kuteshop.kutethemes.net/product/womens-cocktail-dress />
                            <img width=850 height=1021
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-04.jpg
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt
                                decoding=async loading=lazy> <span class=product-title>Women’s Cocktail
                                Dress</span>
                            </a>
                            <div class=star-rating-wrap>
                                <div class=star-rating role=img aria-label="Rated 4.00 out of 5"><span
                                        style=width:80%>Rated <strong class=rating>4.00</strong> out of 5</span>
                                </div><strong class=rating-count>01</strong>
                            </div>
                            <span class="woocommerce-Price-amount amount"><bdi><span
                                        class=woocommerce-Price-currencySymbol>&#36;</span>189.00</bdi></span>
                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                        class=woocommerce-Price-currencySymbol>&#36;</span>219.00</bdi></span>
                        </li>
                        <li>
                            <a href=https://kuteshop.kutethemes.net/product/dresses-flowers-pattern />
                            <img width=850 height=1021
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-05.jpg
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt
                                decoding=async loading=lazy> <span class=product-title>Dresses flowers
                                Pattern</span>
                            </a>
                            <div class=star-rating-wrap>
                                <div class=star-rating role=img aria-label="Rated 5.00 out of 5"><span
                                        style=width:100%>Rated <strong class=rating>5.00</strong> out of 5</span>
                                </div><strong class=rating-count>01</strong>
                            </div>
                            <span class="woocommerce-Price-amount amount"><bdi><span
                                        class=woocommerce-Price-currencySymbol>&#36;</span>230.00</bdi></span>
                            &ndash; <span class="woocommerce-Price-amount amount"><bdi><span
                                        class=woocommerce-Price-currencySymbol>&#36;</span>250.00</bdi></span>
                        </li>
                        <li>
                            <a href=https://kuteshop.kutethemes.net/product/sleeveless-dress />
                            <img width=850 height=1021
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-02.jpg
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt
                                decoding=async loading=lazy
                                srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-02.jpg 850w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-02-199x239.jpg 199w"
                                sizes="(max-width: 850px) 100vw, 850px"> <span class=product-title>Sleeveless
                                Dress</span>
                            </a>
                            <div class=star-rating-wrap>
                                <div class=star-rating role=img aria-label="Rated 5.00 out of 5"><span
                                        style=width:100%>Rated <strong class=rating>5.00</strong> out of 5</span>
                                </div><strong class=rating-count>01</strong>
                            </div>
                            <span class="woocommerce-Price-amount amount"><bdi><span
                                        class=woocommerce-Price-currencySymbol>&#36;</span>250.00</bdi></span>
                        </li>
                        <li>
                            <a href=https://kuteshop.kutethemes.net/product/short-sleeve-dress />
                            <img width=850 height=1021
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-03.jpg
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt
                                decoding=async loading=lazy> <span class=product-title>Short-Sleeve
                                Dress</span>
                            </a>
                            <div class=star-rating-wrap>
                                <div class=star-rating role=img aria-label="Rated 3.00 out of 5"><span
                                        style=width:60%>Rated <strong class=rating>3.00</strong> out of 5</span>
                                </div><strong class=rating-count>01</strong>
                            </div>
                            <del aria-hidden=true><span class="woocommerce-Price-amount amount"><bdi><span
                                            class=woocommerce-Price-currencySymbol>&#36;</span>250.00</bdi></span></del>
                            <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                            class=woocommerce-Price-currencySymbol>&#36;</span>230.00</bdi></span></ins>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
@endsection
