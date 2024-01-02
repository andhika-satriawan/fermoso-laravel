<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#">
                    <img alt="phone" src="{{ asset('customer/assets/images/phone.png') }}" />00-62-658-658
                </a>
                <a href="#">
                    <img alt="email" src="{{ asset('customer/assets/images/email.png') }}" />Contact us today!
                </a>
            </div>

            <div class="support-link">
                @auth
                    <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                        @csrf
                    </form>
                    <a href="{{ route('my_account.dashboard') }}">My Account</a>
                    <a onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                @else
                    <a href="{{ route('register') }}">Register</a>
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{{ route('home') }}"><img alt="Fermoso" src="{{ asset('images/logo.jpg') }}" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                    <div class="form-group form-category">
                        <select class="select-category" id="selectCategory">
                            <option value="">All Categories</option>
                            <!-- Generated from AJAX -->
                        </select>
                    </div>
                    <div class="form-group input-serach">
                        <input type="text" placeholder="Keyword here...">
                    </div>
                    <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="{{ route('cart') }}">
                    <span class="title">Shopping cart</span>
                    <span class="total">0 items</span>
                    <span class="notify notify-left">0</span>
                </a>
                <div class="cart-block" style="display: none">
                    <div class="cart-block-content">
                        <h5 class="cart-title">0 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                            </ul>
                        </div>
                        <div class="total-cart">
                            <span>Total</span>
                            <span class="total-price pull-right">0</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="{{ route('cart') }}" class="btn-check-out">View Cart</a>
                        </div>
                        {{-- <div class="cart-buttons">
                            <a href="{{ route('checkout') }}" class="btn-check-out">Checkout</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Categories s</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list" id="categoryMenuList">
                                {{-- @foreach ($product_subcategories as $product_subcategory)
                                    <li>
                                        <a href="{{ url('product/category/' . $product_subcategory->slug) }}"><img
                                                class="icon-menu" alt="{{ $product_subcategory->name }}"
                                                src="{{ asset('customer/assets/data/1.png') }}">{{ $product_subcategory->name }}</a>
                                    </li>
                                @endforeach --}}
                            </ul>
                            <div class="all-category"><span class="open-cate">All Categories</span></div>
                        </div>
                    </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="{{ $page === 'home' ? 'active' : '' }}">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="{{ $page === 'category-page' ? 'active' : '' }}">
                                        <a href="{{ url('/products') }}">Products</a>
                                    </li>
                                    <li class="{{ $page === 'cara-belanja' ? 'active' : '' }}">
                                        <a href="{{ url('/cara-belanja') }}">Cara Belanja</a>
                                    </li>
                                    <li
                                        class="dropdown {{ $page === 'faq-product' || $page === 'faq-toko-kami' ? 'active' : '' }}">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FAQ</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a
                                                            href="{{ url('/faq-product') }}">FAQ Product</a></li>
                                                    <li class="link_container"><a
                                                            href="{{ url('/faq-toko-kami') }}">FAQ Toko Kami</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ $page === 'blog' ? 'active' : '' }}">
                                        <a href="{{ url('/blog') }}">Blog</a>
                                    </li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
