@push('addon-style')
    <style>
        .box-left {
            background-color: #f1f1f1;
            padding: 24px;
        }

        .box-left ul li {
            border-bottom: 1px solid #eee;
        }

        .box-left ul li a {
            display: block;
            padding: 8px 0;
        }

        li.active a {
            color: #000;
            text-decoration: underline;
        }

        li.active a:hover {
            color: #ff3366;
        }

        li.active a::after {
            float: right;
            font-family: FontAwesome, sans-serif;
            content: '\f105';
            margin-inline-start: 10px;
        }

        .box-right p {
            padding-bottom: 2rem;
            color: #666;
        }
    </style>
@endpush

<div class="box-left">
    <ul>
        <li class="{{ request()->is('my-account/dashboard*') ? 'active' : '' }}">
            <a href="{{ route('my_account.dashboard') }}">Dashboard</a>
        </li>
        <li class="{{ request()->is('my-account/orders*') ? 'active' : '' }}">
            <a href="{{ route('my_account.order') }}">Orders</a>
        </li>
        <li class="{{ 
                request()->is('my-account/addresses*') || 
                request()->is('my-account/add-address*') ||
                request()->is('my-account/address*') ? 'active' : '' }}">
            <a href="{{ route('my_account.address') }}">Addresses</a>
        </li>
        <li class="{{ request()->is('my-account/edit-account*') ? 'active' : '' }}">
            <a href="{{ route('my_account.edit_account') }}">Account details</a>
        </li>
        <li>
            {{-- <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                @csrf
            </form> --}}
            <a onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" style="cursor: pointer">Logout</a>
        </li>
    </ul>
</div>
