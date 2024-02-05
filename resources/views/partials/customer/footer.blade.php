<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box" class="row">
            <div class="col-md-3">
                <div id="address-box">
                    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.jpg') }}" alt="" /></a>
                    <div id="address-list">
                        <div class="tit-name">Alamat:</div>
                        <div class="tit-contain">Indonesia</div>
                        <div class="tit-name">Telepon:</div>
                        <div class="tit-contain"><a href="https://wa.me/6281381970719"
                                target="_blank">+62-813-8197-0719</a></div>
                        <div class="tit-name">Email:</div>
                        <div class="tit-contain"><a href="mailto:idnfermoso1@gmail.com">idnfermoso1@gmail.com</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4 col-xs-4 col-12">
                        <div class="introduce-title">Perusahaan</div>
                        <ul id="introduce-company" class="introduce-list">
                            <li><a href="{{ url('/faq-toko-kami') }}">FAQ Toko Kami</a></li>
                            <li><a href="{{ url('/faq-product') }}">FAQ Product</a></li>
                            <li>Hubungi kami:</li>
                            <li><img src="{{ url('images/barcode-wa.png') }}" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-xs-4 col-12">
                        <div class="introduce-title">Akun</div>
                        <ul id = "introduce-Account" class="introduce-list">
                            <li><a href="{{ url('/my-account/orders') }}">Order</a></li>
                            <li><a href="{{ url('/my-account/addresses') }}">Alamat</a></li>
                            <li><a href="{{ url('/my-account/edit-account') }}">Profile</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-xs-4 col-12">
                        <div class="introduce-title">Dukungan</div>
                        <ul id = "introduce-support" class="introduce-list">
                            <li><a href="#">Whatsapp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="contact-box">
                    <div class="introduce-title">Newsletter</div>
                    <div class="input-group" id="mail-box">
                        <input type="text" placeholder="Your Email Address" />
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                        </span>
                    </div><!-- /input-group -->
                    <div class="introduce-title">Sosial Media</div>
                    <div class="social-link">
                        <a href="https://shopee.co.id/fermoso.idn2"><img
                                src="{{ url('customer/assets/images/shopee.ico') }}"></a>
                        <a href="https://www.tokopedia.com/fermosoidn"><img
                                src="{{ url('customer/assets/images/tokopedia.png') }}"></a>
                        <a href="https://www.instagram.com/fermoso.id/"><img
                                src="{{ url('customer/assets/images/instagram.webp') }}"></a>
                    </div>
                </div>

            </div>
        </div><!-- /#introduce-box -->

        <div id="footer-menu-box">
            <p class="text-center">Copyrights &#169; 2024. All Rights Reserved. Designed by
                ©FermosoMedical.com</p>
        </div><!-- /#footer-menu-box -->
    </div>
</footer>

<a href="#" class="scroll_top footer" title="Scroll to Top" style="display: inline;">Scroll</a>
