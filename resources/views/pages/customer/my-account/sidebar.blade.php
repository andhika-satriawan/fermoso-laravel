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
        <li class="{{ $page === 'dashboard' ? 'active' : '' }}">
            <a href="{{ url('/my-account') }}">Dashboard</a>
        </li>
        <li class="{{ $page === 'orders' ? 'active' : '' }}">
            <a href="{{ url('/my-account/orders') }}">Orders</a>
        </li>
        <li class="{{ $page === 'addresses' ? 'active' : '' }}">
            <a href="{{ url('/my-account/addresses') }}">
                Addresses</a>
        </li>
        <li class="{{ $page === 'edit-account' ? 'active' : '' }}">
            <a href="{{ url('/my-account/edit-account') }}">Account details</a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                @csrf
            </form>
            <a onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
        </li>
    </ul>
</div>
