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
                {{-- <li class="{{ request()->is('admin/sales*') ? 'active' : '' }}">
                    <a href="{{ route('admin.sales') }}">
                        <img src="{{ asset('admin/img/icons/sales1.svg') }}" alt="img">
                        <span>Sales</span>
                    </a>
                </li> --}}
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
                        <li>
                            <a href="{{ route('admin.theme.services.index') }}"
                                class="{{ request()->is('admin/theme/services*') ? 'active' : '' }}">4 Services</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.theme.footer.index') }}"
                                class="{{ request()->is('admin/theme/footer*') ? 'active' : '' }}">Footer</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
