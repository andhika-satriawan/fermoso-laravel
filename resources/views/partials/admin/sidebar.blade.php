<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ request()->is('monyet/dashboard*') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('admin/img/icons/dashboard.svg') }}" alt="img">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('admin/img/icons/product.svg') }}"
                            alt="img"><span>
                            Product</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.product.list.index') }}"
                                class="{{ request()->is('monyet/product/list*') ? 'active' : '' }}">Product List</a></li>
                        <li><a href="{{ route('admin.product.category.index') }}"
                                class="{{ request()->is('monyet/product/category*') ? 'active' : '' }}">Category List</a>
                        </li>
                        <li><a href="{{ route('admin.product.subcategory.index') }}"
                                class="{{ request()->is('monyet/product/subcategory*') ? 'active' : '' }}">Sub Category
                                List</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('monyet/review*') ? 'active' : '' }}">
                    <a href="{{ route('admin.review.index') }}">
                        <img src="{{ asset('admin/img/icons/transcation.svg') }}" alt="img">
                        <span>Review</span>
                    </a>
                </li>
                <li class="{{ request()->is('monyet/service*') ? 'active' : '' }}">
                    <a href="{{ route('admin.service.index') }}">
                        <img src="{{ asset('admin/img/icons/purchase1.svg') }}" alt="img">
                        <span>Service</span>
                    </a>
                </li>
                <li class="{{ request()->is('monyet/slider*') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider.index') }}">
                        <img src="{{ asset('admin/img/icons/scanners.svg') }}" alt="img">
                        <span>Slider</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('admin/img/icons/purchase1.svg') }}"
                            alt="img"><span>
                            Article</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.article.blog.index') }}"
                                class="{{ request()->is('monyet/article/blog*') ? 'active' : '' }}">Blog</a></li>
                        <li><a href="{{ route('admin.article.category.index') }}"
                                class="{{ request()->is('monyet/article/category*') ? 'active' : '' }}">Category
                                List</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('admin/img/icons/transfer1.svg') }}" alt="img"><span>
                            FAQ</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.faq.list.index') }}"
                                class="{{ request()->is('monyet/faq/list*') ? 'active' : '' }}">FAQ</a></li>
                        <li><a href="{{ route('admin.faq.category.index') }}"
                                class="{{ request()->is('monyet/faq/category*') ? 'active' : '' }}">Category List</a>
                        </li>
                    </ul>
                </li>

                <li class="{{ request()->is('monyet/customer*') ? 'active' : '' }}">
                    <a href="{{ route('admin.customer.index') }}">
                        <img src="{{ asset('admin/img/icons/users1.svg') }}" alt="img">
                        <span>Customer</span>
                    </a>
                </li>

                <li class="{{ request()->is('monyet/sales*') ? 'active' : '' }}">
                    <a href="{{ route('admin.sales.index') }}">
                        <img src="{{ asset('admin/img/icons/sales1.svg') }}" alt="img">
                        <span>Sales</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('admin/img/icons/settings.svg') }}" alt="img">
                        <span>Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.setting.general.index') }}"
                                class="{{ request()->is('monyet/setting/general*') ? 'active' : '' }}">General</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.setting.deal.index') }}"
                                class="{{ request()->is('monyet/setting/deal*') ? 'active' : '' }}">Latest Deals</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.setting.product-slider.index') }}"
                                class="{{ request()->is('monyet/setting/product-slider*') ? 'active' : '' }}">Product Sliders</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="{{ request()->is('monyet/setting*') ? 'active' : '' }}">
                    <a href="{{ route('admin.setting.deal.index') }}">
                        <img src="{{ asset('admin/img/icons/settings.svg') }}" alt="img">
                        <span>Setting</span>
                        <span class="menu-arrow"></span></a>
                    </a>
                </li> --}}

                <!--
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('admin/img/icons/product.svg') }}" alt="img">
                        <span>Themes</span> <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.theme.header.index') }}"
                                class="{{ request()->is('monyet/theme/header*') ? 'active' : '' }}">Header</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.theme.slider.index') }}"
                                class="{{ request()->is('monyet/theme/slider*') ? 'active' : '' }}">Slider</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('admin.theme.services.index') }}"
                                class="{{ request()->is('monyet/theme/services*') ? 'active' : '' }}">4 Services</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('admin.theme.footer.index') }}"
                                class="{{ request()->is('monyet/theme/footer*') ? 'active' : '' }}">Footer</a>
                        </li>
                    </ul>
                </li>
                -->

            </ul>
        </div>
    </div>
</div>
