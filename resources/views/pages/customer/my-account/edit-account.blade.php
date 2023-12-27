@extends('layouts.customer.main')

@section('title')
    My Account || Edit Account
@endsection

@push('addon-style')
    <style>
        .box-authentication input {
            border-radius: 0px;
            border: 1px solid #eaeaea;
            -webkit-box-shadow: inherit;
            box-shadow: inherit;
            width: 100%;
        }

        .form-group.half {
            display: inline-block;
            width: calc(50% - 15px);
            overflow: visible;
        }

        legend {
            font-weight: bold;
            margin-top: 30px;
            border-bottom: 1px solid #e5e5e5;
        }

        button.edit-account.button {
            width: 100%;
            font-weight: bold;
            background-color: #ff3366;
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
                <a class="home" href="{{ url('/my-account') }}" title="My Account">My Account</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Edit Account</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Edit Account</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-3">
                        @include('pages.customer.my-account.sidebar')
                    </div>
                    <div class="col-sm-9">
                        <div class="box-authentication">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group half">
                                        <label for="first_name">First Name<span class="required">*</span></label>
                                        <input id="first_name" type="text" class="form-control">
                                    </div>
                                    <div class="form-group half">
                                        <label for="last_name">Last Name<span class="required">*</span></label>
                                        <input id="last_name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="account_display_name">Display name<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="account_display_name"
                                        id="account_display_name" value="andhika">
                                    <em>This will be how your name will be displayed in the account section and in
                                        reviews</em>
                                </div>
                                <div class="form-group">
                                    <label for="account_email">Email address<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="account_email" id="account_email"
                                        autocomplete="email" value="andhika.satriawan1988@gmail.com">
                                </div>

                                <legend>Password change</legend>

                                <div class="form-group">
                                    <label for="password_current">Current password (leave blank to leave unchanged)</label>
                                    <span class="password-input"><input type="password" class="form-control"
                                            name="password_current" id="password_current" autocomplete="off"><span
                                            class="show-password-input"></span></span>
                                </div>
                                <div class="form-group">
                                    <label for="password_1">New password (leave blank to leave unchanged)</label>
                                    <span class="password-input"><input type="password" class="form-control"
                                            name="password_1" id="password_1" autocomplete="off"><span
                                            class="show-password-input"></span></span>
                                </div>
                                <div class="form-group">
                                    <label for="password_2">Confirm new password</label>
                                    <span class="password-input"><input type="password" class="form-control"
                                            name="password_2" id="password_2" autocomplete="off"><span
                                            class="show-password-input"></span></span>
                                </div>
                                <button type="submit" class="edit-account button" name="save_account_details"
                                    value="Save changes">SAVE CHANGES</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
