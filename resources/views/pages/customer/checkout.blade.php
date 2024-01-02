@extends('layouts.customer.main')

@section('title')
    Checkout
@endsection

@push('addon-style')
    <style>
        a.add-address {
            color: #ff3366;
            font-weight: bold;
        }

        .box-border .row {
            margin-top: 15px;
        }

        .address-item {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            clear: both;
            background: #f6f6f6;
        }

        .address-item input[type="radio"] {
            width: 20px;
            height: 20px;
            background-color: #ccc;
        }

        .address-item input:checked+label {
            font-weight: bold;
            color: #333;
        }

        .address-item input {
            float: right;
        }

        .address-item h4 {
            font-weight: bold;
            font-size: 24px;
        }

        .address-item h5 {
            font-weight: bold;
            color: #666;
            font-size: 18px;
            padding-bottom: 20px;
        }

        .address-item a {
            color: #ff3366;
        }
    </style>
@endpush

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{ url('/') }}" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Checkout</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Checkout</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content checkout-page">
                <h3 class="checkout-sep">1. Pilih Alamat Tujuan Kamu</h3>
                <div class="box-border">
                    <a href="#" class="add-address">Tambah Alamat</a>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="address-item">
                                <input type="radio" id="alamat1" name="alamat" value="Alamat 1">
                                <label for="alamat1">
                                    <h4>Rumah</h4>
                                    <h5>John</h5>
                                    <p>JL. Ciputat Raya No.64, RT.02 / RW.12. Kebayoran Lama, Jakarta Selatan, DKI Jakarta
                                    </p>
                                    <a href="#">Edit</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="address-item">
                                <input type="radio" id="alamat2" name="alamat" value="Alamat 2">
                                <label for="alamat2">
                                    <h4>Kantor</h4>
                                    <h5>John</h5>
                                    <p>JL. Ciputat Raya No.64, RT.02 / RW.12. Kebayoran Lama, Jakarta Selatan, DKI Jakarta
                                    </p>
                                    <a href="#">Edit</a>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <h3 class="checkout-sep">2. Billing Infomations</h3>
                <div class="box-border">
                    <ul>
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="first_name" class="required">First Name</label>
                                <input type="text" class="input form-control" name="" id="first_name">
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label for="last_name" class="required">Last Name</label>
                                <input type="text" name="" class="input form-control" id="last_name">
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="company_name">Company Name</label>
                                <input type="text" name="" class="input form-control" id="company_name">
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label for="email_address" class="required">Email Address</label>
                                <input type="text" class="input form-control" name="" id="email_address">
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-xs-12">

                                <label for="address" class="required">Address</label>
                                <input type="text" class="input form-control" name="" id="address">

                            </div><!--/ [col] -->

                        </li><!-- / .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="city" class="required">City</label>
                                <input class="input form-control" type="text" name="" id="city">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">
                                <label class="required">State/Province</label>
                                <select class="input form-control" name="">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Kansas">Kansas</option>
                                </select>
                            </div><!--/ [col] -->
                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="postal_code" class="required">Zip/Postal Code</label>
                                <input class="input form-control" type="text" name="" id="postal_code">
                            </div><!--/ [col] -->

                            <div class="col-sm-6">
                                <label class="required">Country</label>
                                <select class="input form-control" name="">
                                    <option value="USA">USA</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Canada">Canada</option>
                                </select>
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="telephone" class="required">Telephone</label>
                                <input class="input form-control" type="text" name="" id="telephone">
                            </div><!--/ [col] -->

                            <div class="col-sm-6">
                                <label for="fax">Fax</label>
                                <input class="input form-control" type="text" name="" id="fax">
                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">
                            <div class="col-sm-6">
                                <label for="password" class="required">Password</label>
                                <input class="input form-control" type="password" name="" id="password">
                            </div><!--/ [col] -->

                            <div class="col-sm-6">
                                <label for="confirm" class="required">Confirm Password</label>
                                <input class="input form-control" type="password" name="" id="confirm">
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li>
                            <button class="button">Continue</button>
                        </li>
                    </ul>
                </div>
                <h3 class="checkout-sep">3. Shipping Information</h3>
                <div class="box-border">
                    <ul>

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="first_name_1" class="required">First Name</label>
                                <input class="input form-control" type="text" name="" id="first_name_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label for="last_name_1" class="required">Last Name</label>
                                <input class="input form-control" type="text" name="" id="last_name_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="company_name_1">Company Name</label>
                                <input class="input form-control" type="text" name="" id="company_name_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label for="email_address_1" class="required">Email Address</label>
                                <input class="input form-control" type="text" name="" id="email_address_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-xs-12">

                                <label for="address_1" class="required">Address</label>
                                <input class="input form-control" type="text" name="" id="address_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="city_1" class="required">City</label>
                                <input class="input form-control" type="text" name="" id="city_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label class="required">State/Province</label>

                                <div class="custom_select">

                                    <select class="input form-control" name="">

                                        <option value="Alabama">Alabama</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Kansas">Kansas</option>

                                    </select>

                                </div>

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="postal_code_1" class="required">Zip/Postal Code</label>
                                <input class="input form-control" type="text" name="" id="postal_code_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label class="required">Country</label>

                                <div class="custom_select">

                                    <select class="input form-control" name="">

                                        <option value="USA">USA</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Canada">Canada</option>

                                    </select>

                                </div>

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="telephone_1" class="required">Telephone</label>
                                <input class="input form-control" type="text" name="" id="telephone_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label for="fax_1">Fax</label>
                                <input class="input form-control" type="text" name="" id="fax_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                    </ul>
                    <button class="button">Continue</button>
                </div>
                <h3 class="checkout-sep">4. Shipping Method</h3>
                <div class="box-border">
                    <ul class="shipping_method">
                        <li>
                            <p class="subcaption bold">Free Shipping</p>
                            <label for="radio_button_3"><input type="radio" checked name="radio_3"
                                    id="radio_button_3">Free $0</label>
                        </li>

                        <li>
                            <p class="subcaption bold">Free Shipping</p>
                            <label for="radio_button_4"><input type="radio" name="radio_3" id="radio_button_4">
                                Standard Shipping $5.00</label>
                        </li>
                    </ul>
                    <button class="button">Continue</button>
                </div>
                <h3 class="checkout-sep">5. Payment Information</h3>
                <div class="box-border">
                    <ul>
                        <li>
                            <label for="radio_button_5"><input type="radio" checked name="radio_4"
                                    id="radio_button_5"> Check / Money order</label>
                        </li>

                        <li>

                            <label for="radio_button_6"><input type="radio" name="radio_4" id="radio_button_6"> Credit
                                card (saved)</label>
                        </li>

                    </ul>
                    <button class="button">Continue</button>
                </div>
                <h3 class="checkout-sep">6. Order Review</h3>
                <div class="box-border">
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                            <tr>
                                <th class="cart_product">Product</th>
                                <th>Description</th>
                                <th>Avail.</th>
                                <th>Unit price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th class="action"><i class="fa fa-trash-o"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cart_product">
                                    <a href="#"><img src="{{ asset('customer/assets/data/product-100x122.jpg') }}"
                                            alt="Product"></a>
                                </td>
                                <td class="cart_description">
                                    <p class="product-name"><a href="#">Frederique Constant </a></p>
                                    <small class="cart_ref">SKU : #123654999</small><br>
                                    <small><a href="#">Color : Beige</a></small><br>
                                    <small><a href="#">Size : S</a></small>
                                </td>
                                <td class="cart_avail"><span class="label label-success">In stock</span></td>
                                <td class="price"><span>61,19 €</span></td>
                                <td class="qty">
                                    <input class="form-control input-sm" type="text" value="1">
                                    <a href="#"><i class="fa fa-caret-up"></i></a>
                                    <a href="#"><i class="fa fa-caret-down"></i></a>
                                </td>
                                <td class="price">
                                    <span>61,19 €</span>
                                </td>
                                <td class="action">
                                    <a href="#">Delete item</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cart_product">
                                    <a href="#"><img src="{{ asset('customer/assets/data/product-100x122.jpg') }}"
                                            alt="Product"></a>
                                </td>
                                <td class="cart_description">
                                    <p class="product-name"><a href="#">Frederique Constant </a></p>
                                    <small class="cart_ref">SKU : #123654999</small><br>
                                    <small><a href="#">Color : Beige</a></small><br>
                                    <small><a href="#">Size : S</a></small>
                                </td>
                                <td class="cart_avail"><span class="label label-success">In stock</span></td>
                                <td class="price"><span>61,19 €</span></td>
                                <td class="qty">
                                    <input class="form-control input-sm" type="text" value="1">
                                    <a href="#"><i class="fa fa-caret-up"></i></a>
                                    <a href="#"><i class="fa fa-caret-down"></i></a>
                                </td>
                                <td class="price">
                                    <span>61,19 €</span>
                                </td>
                                <td class="action">
                                    <a href="#">Delete item</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" rowspan="2"></td>
                                <td colspan="3">Total products (tax incl.)</td>
                                <td colspan="2">122.38 €</td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong>Total</strong></td>
                                <td colspan="2"><strong>122.38 €</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <button class="button pull-right">Place Order</button>
                </div>
            </div>
        </div>
    </div>
@endsection
