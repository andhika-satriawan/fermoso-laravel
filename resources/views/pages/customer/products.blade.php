@include('partials.customer.header')
<div id="content" class="container site-content sidebar-left shop-page">
    <nav class="woocommerce-breadcrumb">
        <a href="<?= url('/') ?>">Home</a><span class="delimiter"></span>
        {{ $title }}
    </nav>
    <div id=primary class=content-area>
        <main id=main class=site-main>
            <header class=woocommerce-products-header></header>
            <div class=woocommerce-notices-wrapper></div>
            <div class="shop-control shop-before-control">
                <h1 class="page-title entry-title">
                    <span>{{ $title }}</span>
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
                    <input type=hidden name=shop_page_layout value=grid><input type=hidden name=demo value=21>
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
                        <input type=hidden name=shop_page_layout value=grid><input type=hidden name=demo value=21>
                    </form>
                </div>
            </div>
            <ul class="products shop-page response-content columns-3 ovic-products style-01 border-full">
                @foreach ($product_subcategories as $product_subcategory)
                    @foreach ($product_subcategory->products as $product)
                        <li data-product_id="{{ $product->id }}"
                            class="product-item style-01 rtwpvs-product product type-product post-{{ $product->id }} status-publish first instock product_cat-for-women product_cat-summer-dresses product_tag-market has-post-thumbnail shipping-taxable purchasable product-type-variable">
                            <div class="product-inner product-01 add-cart-01">
                                <div class="product-thumb tooltip-wrap tooltip-start">
                                    <div class="thumb-wrapper">
                                        <a class="thumb-link hover-zoom woocommerce-product-gallery__image"
                                            href="{{ url('product/' . $product->slug) }}">
                                            <figure class="primary-thumb">
                                                <img width="850" height="1021"
                                                    src="{{ Storage::url($product->photo) }}"
                                                    class="attachment-850x1021 size-850x1021 wp-post-image" alt
                                                    loading="lazy">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="group-button style-01 popup">
                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-{{ $product->id }}  wishlist-fragment on-first-load"
                                            data-fragment-ref={{ $product->id }}
                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:{{ $product->id }},&quot;parent_product_id&quot;:{{ $product->id }},&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;main-icon-heart1 ovic-wl-icon&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                            <div class=yith-wcwl-add-button>
                                                <a href="?add_to_wishlist={{ $product->id }}&#038;_wpnonce=66865b33fb"
                                                    class="add_to_wishlist single_add_to_wishlist"
                                                    data-product-id="{{ $product->id }}" data-product-type=variable
                                                    data-original-product-id="{{ $product->id }}"
                                                    data-title="Wishlist" rel="nofollow">
                                                    <i class="yith-wcwl-icon fa main-icon-heart1 ovic-wl-icon"></i>
                                                    <span>Wishlist</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="woocommerce product compare-button"><a
                                                href="{{ $product->slug }}?action=yith-woocompare-add-product&id={{ $product->id }}"
                                                class="compare button" data-product_id="{{ $product->id }}"
                                                rel=nofollow>Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button"
                                            data-product_id="{{ $product->id }}">Quick View</a>
                                    </div>
                                    <span class=add-to-cart data-title="Select options">
                                        <a href="{{ $product->name }}" data-quantity="1"
                                            class="button product_type_variable add_to_cart_button rtwpvs_add_to_cart rtwpvs_ajax_add_to_cart"
                                            data-product_id="{{ $product->id }}"
                                            data-product_sku="{{ $product->details->first()->sku }}"
                                            aria-label="Select options for &ldquo;Women’s Cocktail Dress&rdquo;"
                                            aria-describedby="This product has multiple variants. The options may be chosen on the product page"
                                            rel="nofollow" data-variation_id data-variation>Select options</a>
                                    </span>
                                </div>
                                <div class="product-info equal-elem">
                                    <h2 class="product-title">
                                        <a href="{{ $product->slug }}">{{ $product->name }}</a>
                                    </h2>
                                    <div class="star-rating-wrap">
                                        <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                            <span style="width:80%">Rated <strong class="rating">4.00</strong> out of
                                                5</span>
                                        </div>
                                        <strong class="rating-count">01</strong>
                                    </div>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">Rp</span>
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
                                href="https://kuteshop.kutethemes.net/product-category/market/page/2/?shop_page_layout=grid&#038;demo=21">2</a>
                        </li>
                        <li><a class=page-numbers
                                href="https://kuteshop.kutethemes.net/product-category/market/page/3/?shop_page_layout=grid&#038;demo=21">3</a>
                        </li>
                        <li><span class="page-numbers dots">&hellip;</span></li>
                        <li><a class=page-numbers
                                href="https://kuteshop.kutethemes.net/product-category/market/page/8/?shop_page_layout=grid&#038;demo=21">8</a>
                        </li>
                        <li><a class=page-numbers
                                href="https://kuteshop.kutethemes.net/product-category/market/page/9/?shop_page_layout=grid&#038;demo=21">9</a>
                        </li>
                        <li><a class="next page-numbers"
                                href="https://kuteshop.kutethemes.net/product-category/market/page/2/?shop_page_layout=grid&#038;demo=21">Next</a>
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
                            <a href="{{ url('product/category/' . $product_subcategory->slug) }}">
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
                                                sizes="(max-width: 180px) 100vw, 180px">Inside Fashion</a>
                                        <span class=count>(5)</span>
                                    </li>
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
<div class=container></div>
<footer class="footer footer-01">
    <div class=container>
        <div data-elementor-type=wp-post data-elementor-id=332 class="elementor elementor-332">
            <div class=elementor-inner>
                <div class=elementor-section-wrap>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-4058170 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                        data-id=4058170 data-element_type=section
                        data-settings={&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}>
                        <div class="elementor-container elementor-column-gap-extended">
                            <div class=elementor-row>
                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-37f693b none"
                                    data-id=37f693b data-element_type=column>
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class=elementor-widget-wrap>
                                            <div class="elementor-element elementor-element-1e90de1 none elementor-widget elementor-widget-image"
                                                data-id=1e90de1 data-element_type=widget data-widget_type=image.default>
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="213" height="54"
                                                            src="{{ asset('images/logo.jpg') }}"
                                                            class="attachment-full size-full wp-image-912 wp-post-image"
                                                            alt loading="lazy"
                                                            srcset="{{ asset('images/logo.jpg') }} 213w, {{ asset('images/logo.jpg') }} 86w, {{ asset('images/logo.jpg') }} 64w, {{ asset('images/logo.jpg') }} 84w"
                                                            sizes="(max-width: 213px) 100vw, 213px">
                                                    </div>
                                                </div>
                                            </div>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-3e41e3f elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                                                data-id=3e41e3f data-element_type=section>
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class=elementor-row>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-12686ed none"
                                                            data-id=12686ed data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-9133473 none elementor-widget elementor-widget-heading"
                                                                        data-id=9133473 data-element_type=widget
                                                                        data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container>
                                                                            <h3
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Address:</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-518322c none"
                                                            data-id=518322c data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-a64aaa4 elementor-widget__width-initial elementor-widget-tablet__width-inherit none elementor-widget elementor-widget-heading"
                                                                        data-id=a64aaa4 data-element_type=widget
                                                                        data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container>
                                                                            <p
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Example Street 68, Mahattan, New
                                                                                York, USA.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-cf6383e elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                                                data-id=cf6383e data-element_type=section>
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class=elementor-row>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-86ad259 none"
                                                            data-id=86ad259 data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-a382a9d none elementor-widget elementor-widget-heading"
                                                                        data-id=a382a9d data-element_type=widget
                                                                        data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container>
                                                                            <h3
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Phone:</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-88fa6d5 none"
                                                            data-id=88fa6d5 data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-3b8f002 none elementor-widget elementor-widget-heading"
                                                                        data-id=3b8f002 data-element_type=widget
                                                                        data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container>
                                                                            <p
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                <a href=tel:+00%20123%20456%20789>+00
                                                                                    123 456 789</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-79337fd elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                                                data-id=79337fd data-element_type=section>
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class=elementor-row>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ec3adb4 none"
                                                            data-id=ec3adb4 data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-069ee12 none elementor-widget elementor-widget-heading"
                                                                        data-id=069ee12 data-element_type=widget
                                                                        data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container>
                                                                            <h3
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                Email:</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-38cd41a none"
                                                            data-id=38cd41a data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-b928ff0 none elementor-widget elementor-widget-heading"
                                                                        data-id=b928ff0 data-element_type=widget
                                                                        data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container>
                                                                            <p
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                <a
                                                                                    href=mailto:support@business.com>support@business.com</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-984706c none"
                                    data-id=984706c data-element_type=column>
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class=elementor-widget-wrap>
                                            <div class="elementor-element elementor-element-b85c931 none elementor-widget elementor-widget-ovic_menu"
                                                data-id=b85c931 data-element_type=widget
                                                data-widget_type=ovic_menu.default>
                                                <div class=elementor-widget-container>
                                                    <div class="ovic-custommenu style-02 wpb_content_element vc_wp_custommenu"
                                                        data-name="01 Footer - Company">
                                                        <div class="widget widget_nav_menu">
                                                            <h3 class="widget-title"><span class=text>COMPANY</span>
                                                            </h3>
                                                            <div class="ovic-menu-wapper horizontal">
                                                                <ul id=menu-01-footer-company class="menu ovic-menu">
                                                                    <li id=menu-item-358
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-358">
                                                                        <a href="https://kuteshop.kutethemes.net/about-us/?demo=21"
                                                                            data-megamenu=0>About Us</a>
                                                                    </li>
                                                                    <li id=menu-item-361
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-361">
                                                                        <a href=# class=disable-link
                                                                            data-megamenu=0>Testimonials</a>
                                                                    </li>
                                                                    <li id=menu-item-362
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-362">
                                                                        <a href=# class=disable-link
                                                                            data-megamenu=0>Affiliate
                                                                            Program</a>
                                                                    </li>
                                                                    <li id=menu-item-360
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360">
                                                                        <a href="https://kuteshop.kutethemes.net/terms-conditions/?demo=21"
                                                                            data-megamenu=0>Terms &#038;
                                                                            Conditions</a>
                                                                    </li>
                                                                    <li id=menu-item-359
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359">
                                                                        <a href="https://kuteshop.kutethemes.net/contact-us/?demo=21"
                                                                            data-megamenu=0>Contact Us</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-fc787cf none"
                                    data-id=fc787cf data-element_type=column>
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class=elementor-widget-wrap>
                                            <div class="elementor-element elementor-element-bbb1397 none elementor-widget elementor-widget-ovic_menu"
                                                data-id=bbb1397 data-element_type=widget
                                                data-widget_type=ovic_menu.default>
                                                <div class=elementor-widget-container>
                                                    <div class="ovic-custommenu style-02 wpb_content_element vc_wp_custommenu"
                                                        data-name="01 Footer - My Account">
                                                        <div class="widget widget_nav_menu">
                                                            <h3 class="widget-title"><span class=text>MY
                                                                    ACCOUNT</span></h3>
                                                            <div class="ovic-menu-wapper horizontal">
                                                                <ul id=menu-01-footer-my-account
                                                                    class="menu ovic-menu">
                                                                    <li id=menu-item-1130
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1130">
                                                                        <a href="https://kuteshop.kutethemes.net/my-account/orders/?demo=21"
                                                                            data-megamenu=0>My Order</a>
                                                                    </li>
                                                                    <li id=menu-item-1126
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1126">
                                                                        <a href="https://kuteshop.kutethemes.net/wishlist/?demo=21"
                                                                            data-megamenu=0>My Wishlist</a>
                                                                    </li>
                                                                    <li id=menu-item-1127
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1127">
                                                                        <a href=# class=disable-link data-megamenu=0>My
                                                                            Credit Slip</a>
                                                                    </li>
                                                                    <li id=menu-item-1128
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1128">
                                                                        <a href=# class=disable-link data-megamenu=0>My
                                                                            Addresses</a>
                                                                    </li>
                                                                    <li id=menu-item-1129
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1129">
                                                                        <a href=# class=disable-link data-megamenu=0>My
                                                                            Personal Info</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-50efb26 none"
                                    data-id=50efb26 data-element_type=column>
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class=elementor-widget-wrap>
                                            <div class="elementor-element elementor-element-7802909 none elementor-widget elementor-widget-ovic_menu"
                                                data-id=7802909 data-element_type=widget
                                                data-widget_type=ovic_menu.default>
                                                <div class=elementor-widget-container>
                                                    <div class="ovic-custommenu style-02 wpb_content_element vc_wp_custommenu"
                                                        data-name="01 Footer - Support">
                                                        <div class="widget widget_nav_menu">
                                                            <h3 class="widget-title"><span class=text>SUPPORT</span>
                                                            </h3>
                                                            <div class="ovic-menu-wapper horizontal">
                                                                <ul id=menu-01-footer-support class="menu ovic-menu">
                                                                    <li id=menu-item-368
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-368">
                                                                        <a href=# class=disable-link data-megamenu=0>New
                                                                            User Guide</a>
                                                                    </li>
                                                                    <li id=menu-item-370
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-370">
                                                                        <a href=# class=disable-link
                                                                            data-megamenu=0>Help Center</a>
                                                                    </li>
                                                                    <li id=menu-item-369
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-369">
                                                                        <a href="https://kuteshop.kutethemes.net/privacy-policy/?demo=21"
                                                                            data-megamenu=0>Refund Policy</a>
                                                                    </li>
                                                                    <li id=menu-item-371
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-371">
                                                                        <a href=# class=disable-link
                                                                            data-megamenu=0>Report Spam</a>
                                                                    </li>
                                                                    <li id=menu-item-372
                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-372">
                                                                        <a href=# class=disable-link
                                                                            data-megamenu=0>FAQs</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-72584d8 none"
                                    data-id=72584d8 data-element_type=column>
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class=elementor-widget-wrap>
                                            <div class="elementor-element elementor-element-27fd78e none elementor-widget elementor-widget-ovic_newsletter"
                                                data-id=27fd78e data-element_type=widget
                                                data-widget_type=ovic_newsletter.default>
                                                <div class=elementor-widget-container>
                                                    <div class="ovic-newsletter style-01">
                                                        <div class=inner>
                                                            <h3 class="title">NEWSLETTER</h3>
                                                            <div class=content>
                                                                <script>
                                                                    (function() {
                                                                        window.mc4wp = window.mc4wp || {
                                                                            listeners: [],
                                                                            forms: {
                                                                                on: function(evt, cb) {
                                                                                    window.mc4wp.listeners.push({
                                                                                        event: evt,
                                                                                        callback: cb
                                                                                    });
                                                                                }
                                                                            }
                                                                        }
                                                                    })();
                                                                </script>
                                                                <form id=mc4wp-form-1 class="mc4wp-form mc4wp-form-93"
                                                                    method=post data-id=93 data-name="default form">
                                                                    <div class=mc4wp-form-fields> <label
                                                                            class="text-field field-email">
                                                                            <input class="input-text email-newsletter"
                                                                                type=email name=EMAIL required=required
                                                                                placeholder="Your email address">
                                                                            <span class=input-focus></span>
                                                                        </label>
                                                                        <button type=submit class=submit-newsletter
                                                                            value>
                                                                            OK </button>
                                                                    </div><label
                                                                        style="display: none !important;">Leave
                                                                        this field empty if you're human: <input
                                                                            type=text name=_mc4wp_honeypot value
                                                                            tabindex=-1 autocomplete=off></label><input
                                                                        type=hidden name=_mc4wp_timestamp
                                                                        value=1702967005><input type=hidden
                                                                        name=_mc4wp_form_id value=93><input type=hidden
                                                                        name=_mc4wp_form_element_id value=mc4wp-form-1>
                                                                    <div class=mc4wp-response></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-371e90e none elementor-widget elementor-widget-heading"
                                                data-id=371e90e data-element_type=widget
                                                data-widget_type=heading.default>
                                                <div class=elementor-widget-container>
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        LET’S SOCIALIZE</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b6c8dfd elementor-shape-square elementor-grid-5 main-bg-hover none elementor-widget elementor-widget-social-icons"
                                                data-id=b6c8dfd data-element_type=widget
                                                data-widget_type=social-icons.default>
                                                <div class=elementor-widget-container>
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <span class=elementor-grid-item>
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-14a8d20"
                                                                target=_blank>
                                                                <span class=elementor-screen-only>Facebook-f</span>
                                                                <i class="fab fa-facebook-f"></i> </a>
                                                        </span>
                                                        <span class=elementor-grid-item>
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-67c7ad8"
                                                                target=_blank>
                                                                <span class=elementor-screen-only>Twitter</span>
                                                                <i class="fab fa-twitter"></i> </a>
                                                        </span>
                                                        <span class=elementor-grid-item>
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-e7a0d92"
                                                                target=_blank>
                                                                <span class=elementor-screen-only>Youtube</span>
                                                                <i class="fab fa-youtube"></i> </a>
                                                        </span>
                                                        <span class=elementor-grid-item>
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-6c45962"
                                                                target=_blank>
                                                                <span class=elementor-screen-only>Instagram</span>
                                                                <i class="fab fa-instagram"></i> </a>
                                                        </span>
                                                        <span class=elementor-grid-item>
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest-p elementor-repeater-item-2aec99e"
                                                                target=_blank>
                                                                <span class=elementor-screen-only>Pinterest-p</span>
                                                                <i class="fab fa-pinterest-p"></i> </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-8a5f66f none"
                                    data-id=8a5f66f data-element_type=column>
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class=elementor-widget-wrap>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-442ba9b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                                                data-id=442ba9b data-element_type=section>
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class=elementor-row>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c81bf57 none"
                                                            data-id=c81bf57 data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class=elementor-widget-wrap>
                                                                    <div class="elementor-element elementor-element-50b5fd4 none elementor-widget elementor-widget-heading"
                                                                        data-id=50b5fd4 data-element_type=widget
                                                                        data-widget_type=heading.default>
                                                                        <div class=elementor-widget-container>
                                                                            <h3
                                                                                class="elementor-heading-title elementor-size-default">
                                                                                ACCEPTED PAYMENT METHODS:</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2c509a7 none"
                                                            data-id=2c509a7 data-element_type=column>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="owl-slick rows-space-0 elementor-widget-wrap"
                                                                    data-slick={&quot;slidesToShow&quot;:9,&quot;infinite&quot;:true,&quot;arrows&quot;:false,&quot;rows&quot;:1,&quot;slidesMargin&quot;:1,&quot;autoplaySpeed&quot;:3000,&quot;speed&quot;:500,&quot;autoplay&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:7,&quot;slidesMargin&quot;:1,&quot;rows&quot;:1,&quot;vertical&quot;:false}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:1,&quot;rows&quot;:1,&quot;vertical&quot;:false}},{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:1,&quot;rows&quot;:1,&quot;vertical&quot;:false}}]}
                                                                    style=--show:9;--margin:1px;--show-ipad:7;--margin-ipad:1px;--show-landscape:5;--margin-landscape:1px;--show-mobile:3;--margin-mobile:1px;>
                                                                    <div class="elementor-element elementor-element-9580756 effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=9580756 data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=99 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-1.png
                                                                                    class="attachment-full size-full wp-image-859 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-1.png 99w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-1-86x39.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-1-64x29.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-1-84x38.png 84w"
                                                                                    sizes="(max-width: 99px) 100vw, 99px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-008a637 effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=008a637 data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=99 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-2.png
                                                                                    class="attachment-full size-full wp-image-860 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-2.png 99w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-2-86x39.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-2-64x29.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-2-84x38.png 84w"
                                                                                    sizes="(max-width: 99px) 100vw, 99px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-0cf3feb effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=0cf3feb data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=99 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-3.png
                                                                                    class="attachment-full size-full wp-image-861 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-3.png 99w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-3-86x39.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-3-64x29.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-3-84x38.png 84w"
                                                                                    sizes="(max-width: 99px) 100vw, 99px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-31c0b04 effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=31c0b04 data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=95 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-4.png
                                                                                    class="attachment-full size-full wp-image-862 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-4.png 95w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-4-86x41.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-4-64x30.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-4-84x40.png 84w"
                                                                                    sizes="(max-width: 95px) 100vw, 95px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-8bb3968 effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=8bb3968 data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=78 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-5.png
                                                                                    class="attachment-full size-full wp-image-863 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-5.png 78w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-5-64x37.png 64w"
                                                                                    sizes="(max-width: 78px) 100vw, 78px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-6562da7 effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=6562da7 data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=81 height=43
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-6.png
                                                                                    class="attachment-full size-full wp-image-864 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-6.png 81w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-6-64x34.png 64w"
                                                                                    sizes="(max-width: 81px) 100vw, 81px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-a23eeed effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=a23eeed data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=91 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-7.png
                                                                                    class="attachment-full size-full wp-image-865 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-7.png 91w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-7-86x43.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-7-64x32.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-7-84x42.png 84w"
                                                                                    sizes="(max-width: 91px) 100vw, 91px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-c91284e effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=c91284e data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=99 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-8.png
                                                                                    class="attachment-full size-full wp-image-866 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-8.png 99w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-8-86x39.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-8-64x29.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-8-84x38.png 84w"
                                                                                    sizes="(max-width: 99px) 100vw, 99px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-a936186 effect bounce-in elementor-widget elementor-widget-image"
                                                                        data-id=a936186 data-element_type=widget
                                                                        data-widget_type=image.default>
                                                                        <div class=elementor-widget-container>
                                                                            <div class=elementor-image>
                                                                                <img width=108 height=45
                                                                                    src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-9.png
                                                                                    class="attachment-full size-full wp-image-867 wp-post-image"
                                                                                    alt loading=lazy
                                                                                    srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-9.png 108w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-9-86x36.png 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-9-64x27.png 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/01-pay-9-84x35.png 84w"
                                                                                    sizes="(max-width: 108px) 100vw, 108px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <div class="elementor-element elementor-element-602df33 default-color none elementor-widget elementor-widget-text-editor"
                                                data-id=602df33 data-element_type=widget
                                                data-widget_type=text-editor.default>
                                                <div class=elementor-widget-container>
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>Copyrights © Fermoso. All Rights Reserved. Designed by <a
                                                                href="<?= url('/') ?>" target="_blank"
                                                                rel="noopener">Fermoso.com</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href=# class="backtotop action-to-top"></a> <a class=ovic-purchase-button href=https://1.envato.market/WEdOn
    target=_blank>
    <small class=symbol>$</small>
    69 </a>
<div class=ovic-sales-popup></div>
</div>
<a href="/product-category/market/?shop_page_layout=grid&demo=21&d=rtl" class="ovic-rtl-button"
    style="display: none">Change to <span>RTL</span></a>
<div id=ovic-menu-mobile-1 class="ovic-menu-clone-wrap mobile-main-menu loaded"
    data-locations=[&quot;primary-menu&quot;,&quot;01-vertical-menu&quot;] data-default=primary>
    <div class=head-menu-mobile>
        <a href=https://kuteshop.kutethemes.net/my-account/ class="action login">
            <span class="icon main-icon-enter"></span>
            Login </a>
        <a href=https://kuteshop.kutethemes.net/my-account/ class=avatar>
            <figure>
                <img src="https://secure.gravatar.com/avatar/?s=60&#038;d=mm&#038;r=g" alt="Avatar Mobile">
            </figure>
        </a>
        <div class=author>
            <a href=https://kuteshop.kutethemes.net/my-account/ class=name>
                Guest <span class=email>Example@email.com</span>
            </a>
        </div>
    </div>
    <div class=ovic-menu-panels-actions-wrap><span class=ovic-menu-current-panel-title data-main-title="Main Menu">
            Main Menu </span><a href=# class="ovic-menu-close-btn ovic-menu-close-panels">x</a></div>
    <div class=ovic-menu-panels>
        <div id=ovic-menu-panel-main-658136dd95628 class='ovic-menu-panel ovic-menu-panel-main'>
            <ul class=depth-0>
                <li
                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item menu-item-121 menu-item-has-mega-menu menu-item-has-children item-megamenu'>
                    <a class=ovic-menu-next-panel href=#ovic-menu-panel-121></a><a class=menu-link
                        href=https://kuteshop.kutethemes.net />Home</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-191 menu-item-has-mega-menu menu-item-has-children item-megamenu'>
                    <a class=ovic-menu-next-panel href=#ovic-menu-panel-191></a><a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/?demo=21'>Shop</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-192 menu-item-has-mega-menu menu-item-has-children item-megamenu'>
                    <a class=ovic-menu-next-panel href=#ovic-menu-panel-192></a><a class=menu-link
                        href='https://kuteshop.kutethemes.net/blog/?demo=21'>Blog</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-193 disable-link'>
                    <a class=ovic-menu-next-panel href=#ovic-menu-panel-193></a><a class=menu-link href>Pages</a>
                </li>
                <li class='item-end menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-194'>
                    <a class=menu-link href='https://1.envato.market/WEdOn?demo=21'>Buy KuteShop !</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-448 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/electronic/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-1.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Electronics</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-447 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/sport/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-2.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Sports &
                        Outdoors</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-439 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/digital/smartphone-tablets/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-3.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Smartphone
                        &amp; Tablets</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-445 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/health-beauty/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-4.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Health
                        &amp; Beauty</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-441 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/fashion/bags-shoes/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-5.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Bags &amp;
                        Shoes</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-443 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/toys-hobbies/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-6.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Toys &amp;
                        Hobbies</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-438 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/digital/networking-plus/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-7.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Networking
                        Plus</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-437 menu-item-icon-image'>
                    <a class=ovic-menu-next-panel href=#ovic-menu-panel-437></a><a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/digital/laptops-plus/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-8.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Laptops
                        Plus</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-444 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/jewelry/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-9.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Jewelry &
                        Watches</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-440 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/electronic/lights-lamps/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-10.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Lights
                        &amp; Lamps</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-436 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/digital/cameras-photo/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-11.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Cameras
                        &amp; Photo</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-451 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/digital/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-1.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Digital</a>
                </li>
                <li
                    class='menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-449 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/furniture/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-10.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Furniture</a>
                </li>
                <li
                    class='hide menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-450 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/fashion/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-1.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Fashion &
                        Clothing</a>
                </li>
                <li
                    class='hide menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item menu-item-442 menu-item-icon-image'>
                    <a class=menu-link
                        href='https://kuteshop.kutethemes.net/product-category/market/food-drink/?demo=21'><span
                            class="icon icon-img"><img width=16 height=16
                                src=https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/01-menu-2.png
                                class="icon-image wp-post-image" alt decoding=async loading=lazy></span>Food &amp;
                        Drink</a>
                </li>
            </ul>
        </div>
        <div id=ovic-menu-panel-121 class='ovic-menu-panel ovic-menu-sub-panel ovic-menu-hidden'>
            <ul class=depth-1>
                <li
                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item menu-item-121 menu-item-has-mega-menu menu-item-has-children item-megamenu'>
                    <div class="sub-menu megamenu" data-responsive=.megamenu-wrap style=width:830px;>
                        <div data-elementor-type=wp-post data-elementor-id=464 class="elementor elementor-464">
                            <div class=elementor-inner>
                                <div class=elementor-section-wrap>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-60906931 section-follow-header menu-follow-header elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                                        data-id=60906931 data-element_type=section>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class=elementor-row>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1973c27 none"
                                                    data-id=1973c27 data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-b25c9fc none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=b25c9fc data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Home - 1">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Homepage</span></h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-home-3
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-470">
                                                                                        <a href=https://kuteshop.kutethemes.net/
                                                                                            data-megamenu=0>Market
                                                                                            01</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-965">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-02/
                                                                                            data-megamenu=0>Market
                                                                                            02</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-964">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-03/
                                                                                            data-megamenu=0>Market
                                                                                            03</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-963">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-04/
                                                                                            data-megamenu=0>Market
                                                                                            04</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-962">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-05/
                                                                                            data-megamenu=0>Market
                                                                                            05</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3415">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-06/
                                                                                            data-megamenu=0>Market
                                                                                            06</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3e5f51f4 none"
                                                    data-id=3e5f51f4 data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-722b416c none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=722b416c data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Home - 2">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Homepage</span></h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-home-4
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4970">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-market-square/
                                                                                            data-megamenu=0>Market
                                                                                            07</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3412">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-fashion-bg/
                                                                                            data-megamenu=0>Fashion
                                                                                            Bg</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3413">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-furniture/
                                                                                            data-megamenu=0>Furniture</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3414">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-sport/
                                                                                            data-megamenu=0>Sport</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4632">
                                                                                        <a href=https://kuteshop.kutethemes.net/home-sunglasses/
                                                                                            data-megamenu=0>Sunglasses</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7225a2db none"
                                                    data-id=7225a2db data-element_type=column>
                                                    <div class=elementor-column-wrap>
                                                        <div class=elementor-widget-wrap></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7c736d5c none"
                                                    data-id=7c736d5c data-element_type=column>
                                                    <div class=elementor-column-wrap>
                                                        <div class=elementor-widget-wrap></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id=ovic-menu-panel-191 class='ovic-menu-panel ovic-menu-sub-panel ovic-menu-hidden'>
            <ul class=depth-2>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-191 menu-item-has-mega-menu menu-item-has-children item-megamenu'>
                    <div class="sub-menu megamenu" data-responsive=.megamenu-wrap style=width:1030px;>
                        <div data-elementor-type=wp-post data-elementor-id=240 class="elementor elementor-240">
                            <div class=elementor-inner>
                                <div class=elementor-section-wrap>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-ee1a11f section-follow-header menu-follow-header elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                                        data-id=ee1a11f data-element_type=section>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class=elementor-row>
                                                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-75a0bcf none"
                                                    data-id=75a0bcf data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-29524e7b none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=29524e7b data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Shop - Layout">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Layout</span></h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-shop-layout-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-277">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?shop_page_layout=grid&#038;demo=21"
                                                                                            aria-current=page
                                                                                            data-megamenu=0>Grid</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-276">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?shop_page_layout=list&#038;demo=21"
                                                                                            data-megamenu=0>List</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-b083f81 none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=b083f81 data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Shop - Hover Item">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Hover Items</span>
                                                                            </h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-shop-hover-item-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-282">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?product_hover=change&#038;demo=21"
                                                                                            data-megamenu=0>Change
                                                                                            Image</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-283">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?product_hover=zoom&#038;demo=21"
                                                                                            data-megamenu=0>Zoom
                                                                                            Image</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-284">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?product_hover=slide&#038;demo=21"
                                                                                            data-megamenu=0>Slide
                                                                                            Image</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-285">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?product_hover&#038;demo=21"
                                                                                            data-megamenu=0>No
                                                                                            Hover</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-5a198f1b none"
                                                    data-id=5a198f1b data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-5b6560ed none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=5b6560ed data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Shop - Sidebar">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Sidebar</span></h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-shop-sidebar-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-286">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?sidebar_shop_layout=left&#038;demo=21"
                                                                                            data-megamenu=0>Left
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-287">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?sidebar_shop_layout=right&#038;demo=21"
                                                                                            data-megamenu=0>Right
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-288">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?sidebar_shop_layout=full&#038;product_loop_columns=4&#038;product_per_page=24&#038;demo=21"
                                                                                            data-megamenu=0>No
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-289">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?sticky_sidebar=1&#038;product_per_page=40&#038;demo=21"
                                                                                            data-megamenu=0>Sticky
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-6c7abdf none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=6c7abdf data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Shop - Pagination">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Pagination</span>
                                                                            </h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-shop-pagination-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-290">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?woocommerce_pagination=load_more&#038;demo=21"
                                                                                            data-megamenu=0>Load
                                                                                            More</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-291">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?woocommerce_pagination=pagination&#038;demo=21"
                                                                                            data-megamenu=0>Default
                                                                                            Pagination</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-292">
                                                                                        <a href="https://kuteshop.kutethemes.net/product-category/market/?woocommerce_pagination=infinite&#038;demo=21"
                                                                                            data-megamenu=0>Infinite
                                                                                            Scroll</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-7a6412c9 none"
                                                    data-id=7a6412c9 data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-1a962a97 none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=1a962a97 data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Shop - Other Pages">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Other Pages</span>
                                                                            </h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-shop-other-pages-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293">
                                                                                        <a href="https://kuteshop.kutethemes.net/cart/?demo=21"
                                                                                            data-megamenu=0>Cart</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-294">
                                                                                        <a href="https://kuteshop.kutethemes.net/checkout/?demo=21"
                                                                                            data-megamenu=0>Checkout</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296">
                                                                                        <a href="https://kuteshop.kutethemes.net/wishlist/?demo=21"
                                                                                            data-megamenu=0>Wishlist</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-295">
                                                                                        <a href="https://kuteshop.kutethemes.net/order-tracking/?demo=21"
                                                                                            data-megamenu=0>Order
                                                                                            Tracking</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-14be8bbd none"
                                                    data-id=14be8bbd data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-581b450a none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=581b450a data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Shop - Product Layout">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Product Layout</span>
                                                                            </h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-shop-product-layout-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-298">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?single_product_thumbnail=standard&#038;demo=21"
                                                                                            data-megamenu=0>Standard</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-299">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?single_product_thumbnail=grid&#038;demo=21"
                                                                                            data-megamenu=0>Grid
                                                                                            Gallery</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-300">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?single_product_thumbnail=slide&#038;demo=21"
                                                                                            data-megamenu=0>Slide
                                                                                            Gallery</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-301">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?single_product_thumbnail=sticky&#038;demo=21"
                                                                                            data-megamenu=0>Sticky
                                                                                            Summary</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-302">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?single_product_tabs=show-all&#038;demo=21"
                                                                                            data-megamenu=0>Tabs
                                                                                            Show All</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-323">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?sidebar_product_layout=left&#038;woo_related_desktop=4&#038;woo_related_laptop=3&#038;woo_related_ipad=3&#038;demo=21"
                                                                                            data-megamenu=0>Has
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-a728f58 none"
                                                    data-id=a728f58 data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-a061651 none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=a061651 data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Shop - Product Featured">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Product
                                                                                    Feature</span></h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-shop-product-featured-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3984">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/daily-womens-dress/?demo=21"
                                                                                            data-megamenu=0>Simple</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3983">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/womens-cocktail-dress/?demo=21"
                                                                                            data-megamenu=0>Variable</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3985">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/dresses-flowers-pattern/?demo=21"
                                                                                            data-megamenu=0>Grouped</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3986">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/sleeveless-dress/?demo=21"
                                                                                            data-megamenu=0>External/Affiliate</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-3987">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/short-sleeve-dress/?demo=21"
                                                                                            data-megamenu=0>On
                                                                                            Sale</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-product menu-item-4432">
                                                                                        <a href="https://kuteshop.kutethemes.net/product/dresses-summer-floral/?demo=21"
                                                                                            data-megamenu=0>Has
                                                                                            Bundle</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id=ovic-menu-panel-192 class='ovic-menu-panel ovic-menu-sub-panel ovic-menu-hidden'>
            <ul class=depth-3>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-192 menu-item-has-mega-menu menu-item-has-children item-megamenu'>
                    <div class="sub-menu megamenu" data-responsive=.megamenu-wrap style=width:830px;>
                        <div data-elementor-type=wp-post data-elementor-id=239 class="elementor elementor-239">
                            <div class=elementor-inner>
                                <div class=elementor-section-wrap>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-1a40ef2 section-follow-header menu-follow-header elementor-section-boxed elementor-section-height-default elementor-section-height-default none"
                                        data-id=1a40ef2 data-element_type=section>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class=elementor-row>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-23d56f2 none"
                                                    data-id=23d56f2 data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-4e27c8f none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=4e27c8f data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Blog - Layout">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Layout</span></h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-blog-layout-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-233">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?blog_list_style=standard&#038;demo=21"
                                                                                            data-megamenu=0>Standard</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-231">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?blog_list_style=grid&#038;demo=21"
                                                                                            data-megamenu=0>Grid</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-232">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?blog_list_style=list&#038;demo=21"
                                                                                            data-megamenu=0>List</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f16ec95 none"
                                                    data-id=f16ec95 data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-0ab352e none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=0ab352e data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Blog - Sidebar">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Sidebar</span></h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-blog-sidebar-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-234">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?sidebar_blog_layout=left&#038;demo=21"
                                                                                            data-megamenu=0>Left
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-235">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?sidebar_blog_layout=right&#038;demo=21"
                                                                                            data-megamenu=0>Right
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-236">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?sidebar_blog_layout=full&#038;blog_list_column=3&#038;demo=21"
                                                                                            data-megamenu=0>No
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-237">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?sticky_sidebar=1&#038;blog_list_style=standard&#038;demo=21"
                                                                                            data-megamenu=0>Sticky
                                                                                            Sidebar</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f97e2bf none"
                                                    data-id=f97e2bf data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-d76780f none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=d76780f data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Blog - Pagination">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Pagination</span>
                                                                            </h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-blog-pagination-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?blog_pagination=pagination&#038;demo=21"
                                                                                            data-megamenu=0>Default
                                                                                            Pagination</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-249">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?blog_pagination=load_more&#038;demo=21"
                                                                                            data-megamenu=0>Load
                                                                                            More</a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-247">
                                                                                        <a href="https://kuteshop.kutethemes.net/blog/?blog_pagination=infinite&#038;demo=21"
                                                                                            data-megamenu=0>Infinite
                                                                                            Scroll</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-536f3fd none"
                                                    data-id=536f3fd data-element_type=column>
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class=elementor-widget-wrap>
                                                            <div class="elementor-element elementor-element-7da0552 none elementor-widget elementor-widget-ovic_menu"
                                                                data-id=7da0552 data-element_type=widget
                                                                data-widget_type=ovic_menu.default>
                                                                <div class=elementor-widget-container>
                                                                    <div class="ovic-custommenu default wpb_content_element vc_wp_custommenu"
                                                                        data-name="Blog - Post">
                                                                        <div class="widget widget_nav_menu">
                                                                            <h3 class="widget-title"><span
                                                                                    class=text>Post Single</span>
                                                                            </h3>
                                                                            <div class="ovic-menu-wapper horizontal">
                                                                                <ul id=menu-blog-post-1
                                                                                    class="menu ovic-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-238">
                                                                                        <a href="https://kuteshop.kutethemes.net/electroluxs-award-winning-kettlet-and-dryer-pair/?demo=21"
                                                                                            data-megamenu=0>Standard</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id=ovic-menu-panel-193 class='ovic-menu-panel ovic-menu-sub-panel ovic-menu-hidden'>
            <ul class=depth-4>
                <li class='menu-item menu-item-type-post_type menu-item-object-page menu-item menu-item-324'><a
                        class=menu-link href='https://kuteshop.kutethemes.net/my-account/?demo=21'>My account</a>
                </li>
                <li class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-325'><a
                        class=menu-link href='/404-error?demo=21'>404 Error</a></li>
            </ul>
        </div>
        <div id=ovic-menu-panel-437 class='ovic-menu-panel ovic-menu-sub-panel ovic-menu-hidden'>
            <ul class=depth-5>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-452 disable-link'>
                    <a class=ovic-menu-next-panel href=#ovic-menu-panel-452></a><a class=menu-link href=#>Laptop
                        Window</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-453 disable-link'>
                    <a class=ovic-menu-next-panel href=#ovic-menu-panel-453></a><a class=menu-link href=#>Macbook</a>
                </li>
            </ul>
        </div>
        <div id=ovic-menu-panel-452 class='ovic-menu-panel ovic-menu-sub-panel ovic-menu-hidden'>
            <ul class=depth-6>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-457 disable-link'>
                    <a class=menu-link href=#>Laptop HP</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-458 disable-link'>
                    <a class=menu-link href=#>Laptop Lenovo</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-454 disable-link'>
                    <a class=menu-link href=#>Laptop Dell</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-455 disable-link'>
                    <a class=menu-link href=#>Laptop Acer</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-456 disable-link'>
                    <a class=menu-link href=#>Laptop Asus</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-459 disable-link'>
                    <a class=menu-link href=#>Laptop MSI</a>
                </li>
            </ul>
        </div>
        <div id=ovic-menu-panel-453 class='ovic-menu-panel ovic-menu-sub-panel ovic-menu-hidden'>
            <ul class=depth-7>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-460 disable-link'>
                    <a class=menu-link href=#>Macbook Air</a>
                </li>
                <li
                    class='menu-item menu-item-type-custom menu-item-object-custom menu-item menu-item-461 disable-link'>
                    <a class=menu-link href=#>Macbook Pro</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    var xlwcty_info = [];
</script>
<script>
    (function() {
        function maybePrefixUrlField() {
            const value = this.value.trim()
            if (value !== '' && value.indexOf('http') !== 0) {
                this.value = 'http://' + value
            }
        }
        const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
        for (let j = 0; j < urlFields.length; j++) {
            urlFields[j].addEventListener('blur', maybePrefixUrlField)
        }
    })();
</script>
<div id=yith-quick-view-modal>
    <div class=yith-quick-view-overlay></div>
    <div class=yith-wcqv-wrapper>
        <div class=yith-wcqv-main>
            <div class=yith-wcqv-head>
                <a href=# id=yith-quick-view-close class=yith-wcqv-close>X</a>
            </div>
            <div id=yith-quick-view-content class="woocommerce single-product"></div>
        </div>
    </div>
</div>
<script type=application/ld+json>
    {
        "@context": "https:\/\/schema.org\/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "item": {
                "name": "Home",
                "@id": "https:\/\/kuteshop.kutethemes.net"
            }
        }, {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "name": "Market",
                "@id": "https:\/\/kuteshop.kutethemes.net\/product-category\/market\/?demo=21"
            }
        }]
    }
</script>
<script>
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<div class=pswp tabindex=-1 role=dialog aria-hidden=true>
    <div class=pswp__bg></div>
    <div class=pswp__scroll-wrap>
        <div class=pswp__container>
            <div class=pswp__item></div>
            <div class=pswp__item></div>
            <div class=pswp__item></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class=pswp__top-bar>
                <div class=pswp__counter></div>
                <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" aria-label=Share></button>
                <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                <div class=pswp__preloader>
                    <div class=pswp__preloader__icn>
                        <div class=pswp__preloader__cut>
                            <div class=pswp__preloader__donut></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class=pswp__share-tooltip></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
            <div class=pswp__caption>
                <div class=pswp__caption__center></div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/da031.css" media="all">
<script src="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/86a82.js"></script>
<script id="jquery-yith-wcwl-js-extra">
    var yith_wcwl_l10n = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "yith_wcwl_button_position": "add-to-cart",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "enable_ajax_loading": "",
        "ajax_loader_url": "https:\/\/kuteshop.kutethemes.net\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
        "remove_from_wishlist_after_add_to_cart": "1",
        "is_wishlist_responsive": "1",
        "time_to_close_prettyphoto": "3000",
        "fragments_index_glue": ".",
        "reload_on_found_variation": "1",
        "mobile_media_query": "768",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
            "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
            "load_mobile_action": "load_mobile",
            "delete_item_action": "delete_item",
            "save_title_action": "save_title",
            "save_privacy_action": "save_privacy",
            "load_fragments": "load_fragments"
        },
        "nonce": {
            "add_to_wishlist_nonce": "cdbba028c6",
            "remove_from_wishlist_nonce": "d5ee8f2d70",
            "reload_wishlist_and_adding_elem_nonce": "a1f0dfe13c",
            "load_mobile_nonce": "9960254da5",
            "delete_item_nonce": "0242ebfd46",
            "save_title_nonce": "d225b55b0b",
            "save_privacy_nonce": "e558edc50f",
            "load_fragments_nonce": "0d9bb84fc1"
        },
        "redirect_after_ask_estimate": "",
        "ask_estimate_redirect_url": "https:\/\/kuteshop.kutethemes.net"
    };
</script>
<script src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/51e91.js></script>
<script id=contact-form-7-js-extra>
    var wpcf7 = {
        "api": {
            "root": "https:\/\/kuteshop.kutethemes.net\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
    };
</script>
<script src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/99814.js></script>
<script id=ovic-core-js-extra>
    var ovic_core_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "security": "b971ac6478",
        "ovic_ajax_url": "\/?ovic-ajax=%%endpoint%%",
        "cart_url": "http:\/\/127.0.0.1:8000\/cart\/",
        "cart_redirect_after_add": "no",
        "ajax_single_add_to_cart": "1",
        "is_preview": "",
        "growl_notice": {
            "view_cart": "View cart",
            "added_to_cart_text": "Product has been added to cart!",
            "added_to_wishlist_text": "Product added!",
            "removed_from_wishlist_text": "Product has been removed from wishlist!",
            "wishlist_url": "http:\/\/127.0.0.1:8000\/wishlist\/",
            "browse_wishlist_text": "Browse",
            "growl_notice_text": "Notice!",
            "removed_cart_text": "Product Removed",
            "growl_duration": 3000
        }
    };
</script>
<script src="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/d526b.js"></script>
<script id="yith-woocompare-main-js-extra">
    var yith_woocompare = {
        "ajaxurl": "\/?wc-ajax=%%endpoint%%",
        "actionadd": "yith-woocompare-add-product",
        "actionremove": "yith-woocompare-remove-product",
        "actionview": "yith-woocompare-view-table",
        "actionreload": "yith-woocompare-reload-product",
        "added_label": "Added",
        "table_title": "Product Comparison",
        "auto_open": "yes",
        "loader": "https:\/\/kuteshop.kutethemes.net\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif",
        "button_text": "Compare",
        "cookie_name": "yith_woocompare_list_1",
        "close_label": "Close"
    };
</script>
<script src="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/19969.js"></script>
<script id="yith-wcqv-frontend-js-extra">
    var yith_qv = {
        "ajaxurl": "\/wp-admin\/admin-ajax.php",
        "loader": "https:\/\/kuteshop.kutethemes.net\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif",
        "lang": ""
    };
</script>
<script src="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/27b55.js"></script>
<script id="rtwpvs-js-extra">
    var rtwpvs_params = {
        "is_product_page": "",
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "nonce": "f0d7d771c7",
        "reselect_clear": "",
        "archive_swatches": "1",
        "enable_ajax_archive_variation": "",
        "archive_swatches_enable_single_attribute": "",
        "archive_swatches_single_attribute": "",
        "archive_swatches_display_event": "click",
        "archive_image_selector": ".wp-post-image, .attachment-woocommerce_thumbnail",
        "archive_add_to_cart_text": "",
        "archive_add_to_cart_select_options": "",
        "archive_product_wrapper": ".rtwpvs-product,.product-item",
        "archive_product_price_selector": ".price",
        "archive_add_to_cart_button_selector": ".rtwpvs_add_to_cart, .add_to_cart_button",
        "enable_variation_url": "",
        "enable_archive_variation_url": "",
        "has_wc_bundles": ""
    };
</script>
<script src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/ce135.js></script>
<script id=kuteshop-js-extra>
    var kuteshop_params = {
        "ajaxurl": "https:\/\/kuteshop.kutethemes.net\/wp-admin\/admin-ajax.php",
        "security": "3fa15c0cde",
        "kuteshop_ajax_url": "\/?kuteshop-ajax=%%endpoint%%",
        "ajax_comment": "",
        "tab_warning": "<strong>Warning!<\/strong> Can not Load Data.",
        "is_mobile": "",
        "is_preview": "",
        "sticky_menu": "jquery",
        "disable_equal": "",
        "sales_popup": [{
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/sport-h1-03.jpg",
                "title": "Comfortable Shoes",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/comfortable-shoes\/"
            },
            "name": "John Joe",
            "address": "California",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fa-h1-01-1.jpg",
                "title": "Dresses-Summer Floral",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/dresses-summer-floral\/"
            },
            "name": "Andree JR",
            "address": "Vancouver",
            "time": "50 minutes ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fa-h1-01-1.jpg",
                "title": "Dresses-Summer Floral",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/dresses-summer-floral\/"
            },
            "name": "Selena",
            "address": "Monterray",
            "time": "2 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fa-h1-03.jpg",
                "title": "Short-Sleeve Dress",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/short-sleeve-dress\/"
            },
            "name": "JayKaly",
            "address": "California",
            "time": "2 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fa-h1-05.jpg",
                "title": "Dresses flowers Pattern",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/dresses-flowers-pattern\/"
            },
            "name": "John JR",
            "address": "Australia",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fa-h1-11.jpg",
                "title": "Black Autum Dresses",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/black-autum-dresses\/"
            },
            "name": "Nolan",
            "address": "Armenia",
            "time": "2 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fa-h1-10.jpg",
                "title": "Classic Solid Sweater",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/classic-solid-sweater\/"
            },
            "name": "Darius",
            "address": "Azerbaijan",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/sport-h1-02.jpg",
                "title": "Men\u2019s Superior Sneaker",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/mens-superior-sneaker\/"
            },
            "name": "Engelbert",
            "address": "Barbados",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/sport-h1-05.jpg",
                "title": "Badminton Rackets",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/badminton-rackets\/"
            },
            "name": "Shanley",
            "address": "Azerbaijan",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/elec-h1-01.jpg",
                "title": "White Front-Load Washer",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/white-front-load-washer\/"
            },
            "name": "Samson",
            "address": "Brazil",
            "time": "2 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/elec-h1-02.jpg",
                "title": "Sanyer Refrigerator 150L",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/sanyer-refrigerator-150l\/"
            },
            "name": "Darryl",
            "address": "Chile",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/elec-h1-03.jpg",
                "title": "Smart Tivi Sany 8K Full HD",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/smart-tivi-sany-8k-full-hd\/"
            },
            "name": "Adonis",
            "address": "Denmark",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/elec-h1-05.jpg",
                "title": "Sun-house Rice Cooker",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/sun-house-rice-cooker\/"
            },
            "name": "Alexander",
            "address": "DR Congo",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/digi-h1-07.jpg",
                "title": "Digital Camera Full Frame",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/digital-camera-full-frame\/"
            },
            "name": "Fergal",
            "address": "Finland",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/digi-h1-06.jpg",
                "title": "Iphone 10 Rsx Max 256GB",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/iphone-10-rsx-max-256gb\/"
            },
            "name": "Delvin",
            "address": "Ethiopia",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/digi-h1-03.jpg",
                "title": "Camera Sonic 4K Full HD",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/camera-sonic-4k-full-hd\/"
            },
            "name": "Kane",
            "address": "Germany",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/digi-h1-05.jpg",
                "title": "Tablet Air 10.5inch 5G",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/tablet-air-10-5inch-5g\/"
            },
            "name": "Maynard",
            "address": "Greece",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fur-h1-03.jpg",
                "title": "Wooden TV Frame 65 inch",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/wooden-tv-frame-65-inch\/"
            },
            "name": "Jocelyn",
            "address": "Guyana",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fur-h1-02.jpg",
                "title": "Bedroom Decoration Lights",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/bedroom-decoration-lights\/"
            },
            "name": "Raymond",
            "address": "\tIceland",
            "time": "2 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fur-h1-01.jpg",
                "title": "Lincoln Leadership Chair",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/lincoln-leadership-chair\/"
            },
            "name": "Robert",
            "address": "Indonesia",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/jewel-03.jpg",
                "title": "Circle Pendant Necklace",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/circle-pendant-necklace-2\/"
            },
            "name": "Stephen",
            "address": "Ireland",
            "time": "3 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/jewel-h1-08.jpg",
                "title": "Ring Platinum Plated",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/ring-platinum-plated\/"
            },
            "name": "Titus",
            "address": "Italy",
            "time": "3 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/fur-h1-04.jpg",
                "title": "Felt Padded Armchair",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/felt-padded-armchair\/"
            },
            "name": "Eric",
            "address": "Holy See",
            "time": "2 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/jewel-h1-03.jpg",
                "title": "Platinum Doka Earrings",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/platinum-doka-earrings\/"
            },
            "name": "Jonathan",
            "address": "Kazakhstan",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/jewel-h1-02.jpg",
                "title": "Black Pearls Necklace",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/black-pearls-necklace\/"
            },
            "name": "Mathew",
            "address": "Kyrgyzstan",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/jewel-h1-06.jpg",
                "title": "Diamond Ring Eternity Bands",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/diamond-ring-eternity-bands\/"
            },
            "name": "Daniel",
            "address": "Lesotho",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/bag-03.jpg",
                "title": "Simple Super Bag",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/simple-super-bag\/"
            },
            "name": "Gabriel",
            "address": "Malaysia",
            "time": "3 days ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/bag-02-1.jpg",
                "title": "Leather Handbags Small",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/leather-handbags-small-2\/"
            },
            "name": "Timothy",
            "address": "Maldives",
            "time": "1 day ago"
        }, {
            "product": {
                "image": "https:\/\/kuteshop.kutethemes.net\/wp-content\/uploads\/2021\/08\/other-04.jpg",
                "title": "Pretty Nautilus De Toilette",
                "link": "https:\/\/kuteshop.kutethemes.net\/product\/pretty-nautilus-de-toilette\/"
            },
            "name": "Zachary",
            "address": "Mexico",
            "time": "2 days ago"
        }],
        "sales_popup_close": "1",
        "sales_popup_hover": "1",
        "sales_popup_display": "8",
        "sales_popup_delay": "random",
        "sales_popup_delay_min": "2",
        "sales_popup_delay_max": "8",
        "sales_popup_1": "in",
        "sales_popup_2": "purchased",
        "sales_popup_3": "Verified"
    };
</script>
<script src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/cc4bd.js></script>
<script id=megamenu-frontend-js-extra>
    var ovic_ajax_megamenu = {
        "ajaxurl": "https:\/\/kuteshop.kutethemes.net\/wp-admin\/admin-ajax.php",
        "security": "48ed6739ea",
        "load_menu": "",
        "delay": "",
        "resize": "",
        "load_megamenu": ""
    };
</script>
<script src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/c8e70.js></script>
<script id=jquery-dgwt-wcas-js-extra>
    var dgwt_wcas = {
        "labels": {
            "post": "Post",
            "page": "Page",
            "vendor": "Vendor",
            "product_plu": "Products",
            "post_plu": "Posts",
            "page_plu": "Pages",
            "vendor_plu": "Vendors",
            "sku_label": "SKU:",
            "sale_badge": "Sale",
            "vendor_sold_by": "Sold by:",
            "featured_badge": "Featured",
            "in": "in",
            "read_more": "continue reading",
            "no_results": "\"No results\"",
            "no_results_default": "No results",
            "show_more": "See all products...",
            "show_more_details": "See all products...",
            "search_placeholder": "Search for products...",
            "submit": "Search",
            "search_hist": "Your search history",
            "search_hist_clear": "Clear",
            "tax_product_cat_plu": "Categories",
            "tax_product_cat": "Category",
            "tax_product_tag_plu": "Tags",
            "tax_product_tag": "Tag"
        },
        "ajax_search_endpoint": "\/?wc-ajax=dgwt_wcas_ajax_search",
        "ajax_details_endpoint": "\/?wc-ajax=dgwt_wcas_result_details",
        "ajax_prices_endpoint": "\/?wc-ajax=dgwt_wcas_get_prices",
        "action_search": "dgwt_wcas_ajax_search",
        "action_result_details": "dgwt_wcas_result_details",
        "action_get_prices": "dgwt_wcas_get_prices",
        "min_chars": "3",
        "width": "auto",
        "show_details_panel": "",
        "show_images": "1",
        "show_price": "1",
        "show_desc": "",
        "show_sale_badge": "",
        "show_featured_badge": "",
        "dynamic_prices": "",
        "is_rtl": "",
        "show_preloader": "1",
        "show_headings": "1",
        "preloader_url": "",
        "taxonomy_brands": "",
        "img_url": "https:\/\/kuteshop.kutethemes.net\/wp-content\/plugins\/ajax-search-for-woocommerce\/assets\/img\/",
        "is_premium": "",
        "layout_breakpoint": "992",
        "mobile_overlay_breakpoint": "1",
        "mobile_overlay_wrapper": "body",
        "mobile_overlay_delay": "0",
        "debounce_wait_ms": "400",
        "send_ga_events": "1",
        "enable_ga_site_search_module": "",
        "magnifier_icon": "\t\t\t\t<svg class=\"\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"\n\t\t\t\t\t xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"\n\t\t\t\t\t viewBox=\"0 0 51.539 51.361\" xml:space=\"preserve\">\n\t\t             <path \t\t\t\t\t\t d=\"M51.539,49.356L37.247,35.065c3.273-3.74,5.272-8.623,5.272-13.983c0-11.742-9.518-21.26-21.26-21.26 S0,9.339,0,21.082s9.518,21.26,21.26,21.26c5.361,0,10.244-1.999,13.983-5.272l14.292,14.292L51.539,49.356z M2.835,21.082 c0-10.176,8.249-18.425,18.425-18.425s18.425,8.249,18.425,18.425S31.436,39.507,21.26,39.507S2.835,31.258,2.835,21.082z\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "magnifier_icon_pirx": "\t\t\t\t<svg class=\"\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\">\n\t\t\t\t\t<path d=\" M 16.722523,17.901412 C 16.572585,17.825208 15.36088,16.670476 14.029846,15.33534 L 11.609782,12.907819 11.01926,13.29667 C 8.7613237,14.783493 5.6172703,14.768302 3.332423,13.259528 -0.07366363,11.010358 -1.0146502,6.5989684 1.1898146,3.2148776\n\t\t\t\t\t\t  1.5505179,2.6611594 2.4056498,1.7447266 2.9644271,1.3130497 3.4423015,0.94387379 4.3921825,0.48568469 5.1732652,0.2475835 5.886299,0.03022609 6.1341883,0 7.2037391,0 8.2732897,0 8.521179,0.03022609 9.234213,0.2475835 c 0.781083,0.23810119 1.730962,0.69629029 2.208837,1.0654662\n\t\t\t\t\t\t  0.532501,0.4113763 1.39922,1.3400096 1.760153,1.8858877 1.520655,2.2998531 1.599025,5.3023778 0.199549,7.6451086 -0.208076,0.348322 -0.393306,0.668209 -0.411622,0.710863 -0.01831,0.04265 1.065556,1.18264 2.408603,2.533307 1.343046,1.350666 2.486621,2.574792 2.541278,2.720279 0.282475,0.7519\n\t\t\t\t\t\t  -0.503089,1.456506 -1.218488,1.092917 z M 8.4027892,12.475062 C 9.434946,12.25579 10.131043,11.855461 10.99416,10.984753 11.554519,10.419467 11.842507,10.042366 12.062078,9.5863882 12.794223,8.0659672 12.793657,6.2652398 12.060578,4.756293 11.680383,3.9737304 10.453587,2.7178427\n\t\t\t\t\t\t  9.730569,2.3710306 8.6921295,1.8729196 8.3992147,1.807606 7.2037567,1.807606 6.0082984,1.807606 5.7153841,1.87292 4.6769446,2.3710306 3.9539263,2.7178427 2.7271301,3.9737304 2.3469352,4.756293 1.6138384,6.2652398 1.6132726,8.0659672 2.3454252,9.5863882 c 0.4167354,0.8654208 1.5978784,2.0575608\n\t\t\t\t\t\t  2.4443766,2.4671358 1.0971012,0.530827 2.3890403,0.681561 3.6130134,0.421538 z\n\t\t\t\t\t\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "history_icon": "\t\t\t\t<svg class=\"\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"18\" height=\"16\">\n\t\t\t\t\t<g transform=\"translate(-17.498822,-36.972165)\">\n\t\t\t\t\t\t<path \t\t\t\t\t\t\td=\"m 26.596964,52.884295 c -0.954693,-0.11124 -2.056421,-0.464654 -2.888623,-0.926617 -0.816472,-0.45323 -1.309173,-0.860824 -1.384955,-1.145723 -0.106631,-0.400877 0.05237,-0.801458 0.401139,-1.010595 0.167198,-0.10026 0.232609,-0.118358 0.427772,-0.118358 0.283376,0 0.386032,0.04186 0.756111,0.308336 1.435559,1.033665 3.156285,1.398904 4.891415,1.038245 2.120335,-0.440728 3.927688,-2.053646 4.610313,-4.114337 0.244166,-0.737081 0.291537,-1.051873 0.293192,-1.948355 0.0013,-0.695797 -0.0093,-0.85228 -0.0806,-1.189552 -0.401426,-1.899416 -1.657702,-3.528366 -3.392535,-4.398932 -2.139097,-1.073431 -4.69701,-0.79194 -6.613131,0.727757 -0.337839,0.267945 -0.920833,0.890857 -1.191956,1.27357 -0.66875,0.944 -1.120577,2.298213 -1.120577,3.35859 v 0.210358 h 0.850434 c 0.82511,0 0.854119,0.0025 0.974178,0.08313 0.163025,0.109516 0.246992,0.333888 0.182877,0.488676 -0.02455,0.05927 -0.62148,0.693577 -1.32651,1.40957 -1.365272,1.3865 -1.427414,1.436994 -1.679504,1.364696 -0.151455,-0.04344 -2.737016,-2.624291 -2.790043,-2.784964 -0.05425,-0.16438 0.02425,-0.373373 0.179483,-0.477834 0.120095,-0.08082 0.148717,-0.08327 0.970779,-0.08327 h 0.847035 l 0.02338,-0.355074 c 0.07924,-1.203664 0.325558,-2.153721 0.819083,-3.159247 1.083047,-2.206642 3.117598,-3.79655 5.501043,-4.298811 0.795412,-0.167616 1.880855,-0.211313 2.672211,-0.107576 3.334659,0.437136 6.147035,3.06081 6.811793,6.354741 0.601713,2.981541 -0.541694,6.025743 -2.967431,7.900475 -1.127277,0.871217 -2.441309,1.407501 -3.893104,1.588856 -0.447309,0.05588 -1.452718,0.06242 -1.883268,0.01225 z m 3.375015,-5.084703 c -0.08608,-0.03206 -2.882291,-1.690237 -3.007703,-1.783586 -0.06187,-0.04605 -0.160194,-0.169835 -0.218507,-0.275078 L 26.639746,45.549577 V 43.70452 41.859464 L 26.749,41.705307 c 0.138408,-0.195294 0.31306,-0.289155 0.538046,-0.289155 0.231638,0 0.438499,0.109551 0.563553,0.298452 l 0.10019,0.151342 0.01053,1.610898 0.01053,1.610898 0.262607,0.154478 c 1.579961,0.929408 2.399444,1.432947 2.462496,1.513106 0.253582,0.322376 0.140877,0.816382 -0.226867,0.994404 -0.148379,0.07183 -0.377546,0.09477 -0.498098,0.04986 z\"\/>\n\t\t\t\t\t<\/g>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "close_icon": "\t\t\t\t<svg class=\"\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" height=\"24\" viewBox=\"0 0 24 24\"\n\t\t\t\t\t width=\"24\">\n\t\t\t\t\t<path \t\t\t\t\t\td=\"M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "back_icon": "\t\t\t\t<svg class=\"\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 16 16\">\n\t\t\t\t\t<path \t\t\t\t\t\td=\"M14 6.125H3.351l4.891-4.891L7 0 0 7l7 7 1.234-1.234L3.35 7.875H14z\" fill-rule=\"evenodd\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "preloader_icon": "\t\t\t\t<svg class=\"dgwt-wcas-loader-circular \" viewBox=\"25 25 50 50\">\n\t\t\t\t\t<circle class=\"dgwt-wcas-loader-circular-path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\"\n\t\t\t\t\t\t stroke-miterlimit=\"10\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "voice_search_inactive_icon": "\t\t\t\t<svg class=\"dgwt-wcas-voice-search-mic-inactive\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" height=\"24\"\n\t\t\t\t\t width=\"24\">\n\t\t\t\t\t<path \t\t\t\t\t\td=\"M12 13Q11.15 13 10.575 12.425Q10 11.85 10 11V5Q10 4.15 10.575 3.575Q11.15 3 12 3Q12.85 3 13.425 3.575Q14 4.15 14 5V11Q14 11.85 13.425 12.425Q12.85 13 12 13ZM12 8Q12 8 12 8Q12 8 12 8Q12 8 12 8Q12 8 12 8Q12 8 12 8Q12 8 12 8Q12 8 12 8Q12 8 12 8ZM11.5 20.5V16.975Q9.15 16.775 7.575 15.062Q6 13.35 6 11H7Q7 13.075 8.463 14.537Q9.925 16 12 16Q14.075 16 15.538 14.537Q17 13.075 17 11H18Q18 13.35 16.425 15.062Q14.85 16.775 12.5 16.975V20.5ZM12 12Q12.425 12 12.713 11.712Q13 11.425 13 11V5Q13 4.575 12.713 4.287Q12.425 4 12 4Q11.575 4 11.288 4.287Q11 4.575 11 5V11Q11 11.425 11.288 11.712Q11.575 12 12 12Z\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "voice_search_active_icon": "\t\t\t\t<svg class=\"dgwt-wcas-voice-search-mic-active\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" height=\"24\"\n\t\t\t\t\t width=\"24\">\n\t\t\t\t\t<path \t\t\t\t\t\td=\"M12 13Q11.15 13 10.575 12.425Q10 11.85 10 11V5Q10 4.15 10.575 3.575Q11.15 3 12 3Q12.85 3 13.425 3.575Q14 4.15 14 5V11Q14 11.85 13.425 12.425Q12.85 13 12 13ZM11.5 20.5V16.975Q9.15 16.775 7.575 15.062Q6 13.35 6 11H7Q7 13.075 8.463 14.537Q9.925 16 12 16Q14.075 16 15.538 14.537Q17 13.075 17 11H18Q18 13.35 16.425 15.062Q14.85 16.775 12.5 16.975V20.5Z\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "voice_search_disabled_icon": "\t\t\t\t<svg class=\"dgwt-wcas-voice-search-mic-disabled\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" height=\"24\" width=\"24\">\n\t\t\t\t\t<path \t\t\t\t\t\td=\"M16.725 13.4 15.975 12.625Q16.1 12.325 16.2 11.9Q16.3 11.475 16.3 11H17.3Q17.3 11.75 17.138 12.337Q16.975 12.925 16.725 13.4ZM13.25 9.9 9.3 5.925V5Q9.3 4.15 9.875 3.575Q10.45 3 11.3 3Q12.125 3 12.713 3.575Q13.3 4.15 13.3 5V9.7Q13.3 9.75 13.275 9.8Q13.25 9.85 13.25 9.9ZM10.8 20.5V17.025Q8.45 16.775 6.875 15.062Q5.3 13.35 5.3 11H6.3Q6.3 13.075 7.763 14.537Q9.225 16 11.3 16Q12.375 16 13.312 15.575Q14.25 15.15 14.925 14.4L15.625 15.125Q14.9 15.9 13.913 16.4Q12.925 16.9 11.8 17.025V20.5ZM19.925 20.825 1.95 2.85 2.675 2.15 20.65 20.125Z\"\/>\n\t\t\t\t<\/svg>\n\t\t\t\t",
        "custom_params": {},
        "convert_html": "1",
        "suggestions_wrapper": "body",
        "show_product_vendor": "",
        "disable_hits": "",
        "disable_submit": "",
        "fixer": {
            "broken_search_ui": true,
            "broken_search_ui_ajax": true,
            "broken_search_ui_hard": false,
            "broken_search_elementor_popups": true,
            "broken_search_jet_mobile_menu": true,
            "broken_search_browsers_back_arrow": true,
            "force_refresh_checkout": true
        },
        "voice_search_enabled": "",
        "voice_search_lang": "en-US",
        "show_recently_searched_products": "",
        "show_recently_searched_phrases": ""
    };
</script>
<script src="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/76278.js"></script>
<script id="wc-cart-fragments-js-extra">
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_c0e3087a08441ed108f05c6e1bf6c55f",
        "fragment_name": "wc_fragments_c0e3087a08441ed108f05c6e1bf6c55f",
        "request_timeout": "5000"
    };
</script>
<script id=wc-single-product-js-extra>
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes",
        "flexslider": {
            "rtl": false,
            "animation": "slide",
            "smoothHeight": true,
            "directionNav": false,
            "controlNav": "thumbnails",
            "slideshow": false,
            "animationSpeed": 500,
            "animationLoop": false,
            "allowOneSlide": false
        },
        "zoom_enabled": "1",
        "zoom_options": [],
        "photoswipe_enabled": "1",
        "photoswipe_options": {
            "shareEl": false,
            "closeOnScroll": false,
            "history": false,
            "hideAnimationDuration": 0,
            "showAnimationDuration": 0
        },
        "flexslider_enabled": "1"
    };
</script>
<script defer src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/858ab.js></script>
<script src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/0e7af.js></script>
<script id=elementor-frontend-js-before>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1200,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 991,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1199,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.17.3",
        "is_static": false,
        "experimentalFeatures": {
            "additional_custom_breakpoints": true
        },
        "urls": {
            "assets": "https:\/\/kuteshop.kutethemes.net\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper-container",
        "settings": {
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet"],
            "viewport_mobile_extra": 991,
            "viewport_tablet": 1199,
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 0,
            "title": "Market &#8211; KuteShop",
            "excerpt": ""
        }
    };
</script>
<script src=https://kuteshop.b-cdn.net/wp-content/cache/minify/1/bcf3d.js></script>
<div class=xlwcty_header_passed style='display: none;'></div>
</body>

</html>
