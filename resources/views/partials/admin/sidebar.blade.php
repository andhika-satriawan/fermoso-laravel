<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}">
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
                                class="{{ request()->is('admin/product/list*') ? 'active' : '' }}">Product List</a></li>
                        <li><a href="{{ route('admin.product.category.index') }}"
                                class="{{ request()->is('admin/product/category*') ? 'active' : '' }}">Category List</a>
                        </li>
                        <li><a href="{{ route('admin.product.subcategory.index') }}"
                                class="{{ request()->is('admin/product/subcategory*') ? 'active' : '' }}">Sub Category
                                List</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/review*') ? 'active' : '' }}">
                    <a href="{{ route('admin.review.index') }}">
                        <img src="{{ asset('admin/img/icons/transcation.svg') }}" alt="img">
                        <span>Review</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/service*') ? 'active' : '' }}">
                    <a href="{{ route('admin.service.index') }}">
                        <img src="{{ asset('admin/img/icons/purchase1.svg') }}" alt="img">
                        <span>Service</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/slider*') ? 'active' : '' }}">
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
                                class="{{ request()->is('admin/article/blog*') ? 'active' : '' }}">Blog</a></li>
                        <li><a href="{{ route('admin.article.category.index') }}"
                                class="{{ request()->is('admin/article/category*') ? 'active' : '' }}">Category List</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('admin/img/icons/transfer1.svg') }}"
                            alt="img"><span>
                            FAQ</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.faq.list.index') }}"
                                class="{{ request()->is('admin/faq/list*') ? 'active' : '' }}">FAQ</a></li>
                        <li><a href="{{ route('admin.faq.category.index') }}"
                                class="{{ request()->is('admin/faq/category*') ? 'active' : '' }}">Category List</a>
                        </li>
                    </ul>
                </li>

                <li class="{{ request()->is('admin/customer*') ? 'active' : '' }}">
                    <a href="{{ route('admin.customer.index') }}">
                        <img src="{{ asset('admin/img/icons/users1.svg') }}" alt="img">
                        <span>Customer</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/sales*') ? 'active' : '' }}">
                    <a href="{{ route('admin.sales.index') }}">
                        <img src="{{ asset('admin/img/icons/sales1.svg') }}" alt="img">
                        <span>Sales</span>
                    </a>
                </li>
                
                <li class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
                    <a href="{{ route('admin.sales.index') }}">
                        <img src="{{ asset('admin/img/icons/settings.svg') }}" alt="img">
                        <span>Setting</span>
                    </a>
                </li>

                <!--
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('admin/img/icons/product.svg') }}" alt="img">
                        <span>Themes</span> <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.theme.header.index') }}"
                                class="{{ request()->is('admin/theme/header*') ? 'active' : '' }}">Header</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.theme.slider.index') }}"
                                class="{{ request()->is('admin/theme/slider*') ? 'active' : '' }}">Slider</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('admin.theme.services.index') }}"
                                class="{{ request()->is('admin/theme/services*') ? 'active' : '' }}">4 Services</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('admin.theme.footer.index') }}"
                                class="{{ request()->is('admin/theme/footer*') ? 'active' : '' }}">Footer</a>
                        </li>
                    </ul>
                </li>
                -->
                
            </ul>
        </div>
    </div>
</div>
