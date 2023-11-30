@extends('layouts.customer.main')

@section('css')
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/a5ff7.css">
    <link rel="stylesheet" href="css/a901f.css">
    <link rel="stylesheet" href="css/dae58.css">
    <link rel="stylesheet" href="css/4ac1b.css">
    <link rel="stylesheet" href="css/dcbdf.css">
    <link rel="stylesheet" href="css/1bf85.css">
    <link rel="stylesheet" href="css/53f0a.css">
    <link rel="stylesheet" href="css/5fa7e.css">

    <link rel="stylesheet" href="css/22b88.css">


    <script src="js/818c0.js"></script>
    <script src="script.js"></script>
@endsection

@section('container')
    <div id="content" class="container site-content sidebar-full">
        <nav class="woocommerce-breadcrumb"><a href="https://kuteshop.kutethemes.net">Home</a><span
                class="delimiter"></span>Cart</nav>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-7" class="post-7 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form class="woocommerce-cart-form" action="https://kuteshop.kutethemes.net/cart/"
                                method="post">
                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="product-remove"><span class="screen-reader-text">Remove item</span>
                                            </th>
                                            <th class="product-thumbnail"><span class="screen-reader-text">Thumbnail
                                                    image</span></th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                <a href="https://kuteshop.kutethemes.net/cart/?remove_item=01894d6f048493d2cacde3c579c315a3&amp;_wpnonce=0193df6807"
                                                    class="remove" aria-label="Remove Daily Women’s Dress from cart"
                                                    data-product_id="2213" data-product_sku="MK-FS-001">×</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="https://kuteshop.kutethemes.net/product/daily-womens-dress/"><img
                                                        fetchpriority="high" decoding="async" width="850" height="1021"
                                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/08/fa-h1-06.jpg"
                                                        class="attachment-120 size-120 wp-post-image" alt=""></a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="https://kuteshop.kutethemes.net/product/daily-womens-dress/">Daily
                                                    Women’s Dress</a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>230.00</bdi></span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <a href="#" class="arrow minus quantity-minus"></a> <label
                                                        class="screen-reader-text" for="quantity_6568cef6a1ec5">Daily
                                                        Women’s Dress quantity</label>
                                                    <input type="number" id="quantity_6568cef6a1ec5"
                                                        class="input-text qty text"
                                                        name="cart[01894d6f048493d2cacde3c579c315a3][qty]" value="1"
                                                        aria-label="Product quantity" size="4" min="0"
                                                        max="86" step="1" placeholder="" inputmode="numeric"
                                                        autocomplete="off">
                                                    <a href="#" class="arrow plus quantity-plus"></a>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Subtotal">
                                                <span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>230.00</bdi></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="actions">
                                                <button type="submit" class="button" name="update_cart"
                                                    value="Update cart" disabled="">Update cart</button>
                                                <input type="hidden" id="woocommerce-cart-nonce"
                                                    name="woocommerce-cart-nonce" value="0193df6807"><input
                                                    type="hidden" name="_wp_http_referer" value="/cart/">
                                                <div class="coupon">
                                                    <label for="provinsi" class="screen-reader-text">Provinsi Asal</label>
                                                    <input type="text" name="provinsi" class="input-text provinsi"
                                                        id="coupon_code" value="" placeholder="Provinsi Asal">
                                                    <label for="kabupaten" class="screen-reader-text">Kabupaten
                                                        Asal</label>
                                                    <input type="text" name="kabupaten" class="input-text"
                                                        id="coupon_code" value="" placeholder="Coupon code">
                                                    <label for="coupon_code" class="screen-reader-text">Kota Asal</label>
                                                    <input type="text" name="kota" class="input-text"
                                                        id="coupon_code" value="" placeholder="Kota Asal">
                                                    <button type="submit" class="button" name="cek_ongkir"
                                                        value="Cek Ongkir">Cek Ongkir</button>
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Cart totals</h2>
                                    <table cellspacing="0" class="shop_table shop_table_responsive">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td data-title="Subtotal"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">$</span>230.00</bdi></span>
                                                </td>
                                            </tr>
                                            <tr class="woocommerce-shipping-totals shipping">
                                                <th>Shipping</th>
                                                <td data-title="Shipping">
                                                    <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                        <li>
                                                            <input type="hidden" name="shipping_method[0]"
                                                                data-index="0" id="shipping_method_0_flat_rate2"
                                                                value="flat_rate:2" class="shipping_method"><label
                                                                for="shipping_method_0_flat_rate2">Flat rate: <span
                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                            class="woocommerce-Price-currencySymbol">$</span>30.00</bdi></span></label>
                                                        </li>
                                                    </ul>
                                                    <p class="woocommerce-shipping-destination">
                                                        Shipping to <strong>CA</strong>.</p>
                                                    <form class="woocommerce-shipping-calculator"
                                                        action="https://kuteshop.kutethemes.net/cart/" method="post"><a
                                                            href="#" class="shipping-calculator-button">Change
                                                            address</a>
                                                        <section class="shipping-calculator-form" style="display:none;">
                                                            <p class="form-row form-row-wide"
                                                                id="calc_shipping_country_field">
                                                                <label for="calc_shipping_country"
                                                                    class="screen-reader-text">Country / region:</label>
                                                                <select name="calc_shipping_country"
                                                                    id="calc_shipping_country"
                                                                    class="country_to_state country_select"
                                                                    rel="calc_shipping_state">
                                                                    <option value="default">Select a country / region…
                                                                    </option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="PW">Belau</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BQ">Bonaire, Saint Eustatius and
                                                                        Saba</option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic
                                                                    </option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo (Brazzaville)</option>
                                                                    <option value="CD">Congo (Kinshasa)</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Curaçao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="SZ">Eswatini</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and McDonald
                                                                        Islands</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="CI">Ivory Coast</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MK">North Macedonia</option>
                                                                    <option value="MP">Northern Mariana Islands
                                                                    </option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PS">Palestinian Territory</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="ST">São Tomé and Príncipe</option>
                                                                    <option value="BL">Saint Barthélemy</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="SX">Saint Martin (Dutch part)
                                                                    </option>
                                                                    <option value="MF">Saint Martin (French part)
                                                                    </option>
                                                                    <option value="PM">Saint Pierre and Miquelon
                                                                    </option>
                                                                    <option value="VC">Saint Vincent and the Grenadines
                                                                    </option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia/Sandwich Islands
                                                                    </option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syria</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands
                                                                    </option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom (UK)</option>
                                                                    <option value="US" selected="selected">United
                                                                        States (US)</option>
                                                                    <option value="UM">United States (US) Minor
                                                                        Outlying Islands</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VA">Vatican</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Vietnam</option>
                                                                    <option value="VG">Virgin Islands (British)
                                                                    </option>
                                                                    <option value="VI">Virgin Islands (US)</option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </p>
                                                            <p class="form-row validate-required form-row-wide address-field"
                                                                id="calc_shipping_state_field">
                                                                <span>
                                                                    <label for="calc_shipping_state"
                                                                        class="screen-reader-text">State&nbsp;<abbr
                                                                            class="required"
                                                                            title="required">*</abbr></label>
                                                                    <select name="calc_shipping_state"
                                                                        class="state_select" id="calc_shipping_state"
                                                                        data-placeholder="State / County">
                                                                        <option value="">Select an option…</option>
                                                                        <option value="AL">Alabama</option>
                                                                        <option value="AK">Alaska</option>
                                                                        <option value="AZ">Arizona</option>
                                                                        <option value="AR">Arkansas</option>
                                                                        <option value="CA">California</option>
                                                                        <option value="CO">Colorado</option>
                                                                        <option value="CT">Connecticut</option>
                                                                        <option value="DE">Delaware</option>
                                                                        <option value="DC">District Of Columbia
                                                                        </option>
                                                                        <option value="FL">Florida</option>
                                                                        <option value="GA">Georgia</option>
                                                                        <option value="HI">Hawaii</option>
                                                                        <option value="ID">Idaho</option>
                                                                        <option value="IL">Illinois</option>
                                                                        <option value="IN">Indiana</option>
                                                                        <option value="IA">Iowa</option>
                                                                        <option value="KS">Kansas</option>
                                                                        <option value="KY">Kentucky</option>
                                                                        <option value="LA">Louisiana</option>
                                                                        <option value="ME">Maine</option>
                                                                        <option value="MD">Maryland</option>
                                                                        <option value="MA">Massachusetts</option>
                                                                        <option value="MI">Michigan</option>
                                                                        <option value="MN">Minnesota</option>
                                                                        <option value="MS">Mississippi</option>
                                                                        <option value="MO">Missouri</option>
                                                                        <option value="MT">Montana</option>
                                                                        <option value="NE">Nebraska</option>
                                                                        <option value="NV">Nevada</option>
                                                                        <option value="NH">New Hampshire</option>
                                                                        <option value="NJ">New Jersey</option>
                                                                        <option value="NM">New Mexico</option>
                                                                        <option value="NY">New York</option>
                                                                        <option value="NC">North Carolina</option>
                                                                        <option value="ND">North Dakota</option>
                                                                        <option value="OH">Ohio</option>
                                                                        <option value="OK">Oklahoma</option>
                                                                        <option value="OR">Oregon</option>
                                                                        <option value="PA">Pennsylvania</option>
                                                                        <option value="RI">Rhode Island</option>
                                                                        <option value="SC">South Carolina</option>
                                                                        <option value="SD">South Dakota</option>
                                                                        <option value="TN">Tennessee</option>
                                                                        <option value="TX">Texas</option>
                                                                        <option value="UT">Utah</option>
                                                                        <option value="VT">Vermont</option>
                                                                        <option value="VA">Virginia</option>
                                                                        <option value="WA">Washington</option>
                                                                        <option value="WV">West Virginia</option>
                                                                        <option value="WI">Wisconsin</option>
                                                                        <option value="WY">Wyoming</option>
                                                                        <option value="AA">Armed Forces (AA)</option>
                                                                        <option value="AE">Armed Forces (AE)</option>
                                                                        <option value="AP">Armed Forces (AP)</option>
                                                                    </select>
                                                                </span>
                                                            </p>
                                                            <p class="form-row validate-required form-row-wide address-field"
                                                                id="calc_shipping_city_field">
                                                                <label for="calc_shipping_city"
                                                                    class="screen-reader-text">Town / City&nbsp;<abbr
                                                                        class="required" title="required">*</abbr></label>
                                                                <input type="text" class="input-text" value=""
                                                                    placeholder="City" name="calc_shipping_city"
                                                                    id="calc_shipping_city">
                                                            </p>
                                                            <p class="form-row validate-required form-row-wide address-field"
                                                                id="calc_shipping_postcode_field">
                                                                <label for="calc_shipping_postcode"
                                                                    class="screen-reader-text">ZIP Code&nbsp;<abbr
                                                                        class="required" title="required">*</abbr></label>
                                                                <input type="text" class="input-text" value=""
                                                                    placeholder="Postcode / ZIP"
                                                                    name="calc_shipping_postcode"
                                                                    id="calc_shipping_postcode">
                                                            </p>
                                                            <p><button type="submit" name="calc_shipping" value="1"
                                                                    class="button">Update</button></p>
                                                            <input type="hidden"
                                                                id="woocommerce-shipping-calculator-nonce"
                                                                name="woocommerce-shipping-calculator-nonce"
                                                                value="d717fdb240"><input type="hidden"
                                                                name="_wp_http_referer" value="/cart/">
                                                        </section>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total"><strong><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>260.00</bdi></span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="https://kuteshop.kutethemes.net/checkout/"
                                            class="checkout-button button alt wc-forward">
                                            Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
@endsection

@section('js')
    <script src="script-footer.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600%2C400%2C700%7CRoboto:400&display=swap" rel=stylesheet
        property=stylesheet media=all type=text/css>
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

    <script src="js/86a82.js"></script>
    <script src="script-footer2.js"></script>
    <script src="js/51e91.js"></script>
    <script src="js/2b35d.js"></script>
    <script src="js/76d15.js"></script>
    <script src="js/83e16.js"></script>
    <script src="js/dc06c.js"></script>
    <script src="js/63a69.js"></script>
    <script src="js/19969.js"></script>
    <script src="js/27b55.js"></script>
    <script src="js/db857.js"></script>
    <script src="js/183fc.js"></script>
    <script src="js/cc4bd.js"></script>
    <script src="js/c8e70.js"></script>
    <script src="js/76278.js"></script>
    <script defer src="js/1d5f8.js"></script>
    <script src="js/00538.js"></script>
    <script src="js/85527.js"></script>
    <script src="js/bcf3d.js"></script>
    <div class="xlwcty_header_passed" style='display: none;'></div>
@endsection
