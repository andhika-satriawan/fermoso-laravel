<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box" class="row">
            <div class="col-md-3">
                <div id="address-box">
                    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.jpg') }}" alt="" /></a>
                    <div id="address-list">
                        <div class="tit-name">Alamat:</div>
                        <div class="tit-contain">Example Street 68, Mahattan, New York, USA.</div>
                        <div class="tit-name">Telepon:</div>
                        <div class="tit-contain">+00 123 456 789</div>
                        <div class="tit-name">Email:</div>
                        <div class="tit-contain">support@business.com</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="introduce-title">Perusahaan</div>
                        <ul id="introduce-company" class="introduce-list">
                            <li><a href="{{ url('/faq-toko-kami') }}">FAQ Toko Kami</a></li>
                            <li><a href="{{ url('/faq-product') }}">FAQ Product</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="introduce-title">Akun</div>
                        <ul id = "introduce-Account" class="introduce-list">
                            <li><a href="{{ url('/my-account/orders') }}">Order</a></li>
                            <li><a href="{{ url('/my-account/addresses') }}">Alamat</a></li>
                            <li><a href="{{ url('/my-account/edit-account') }}">Profile</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
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
                    <div class="introduce-title">Let's Socialize</div>
                    <div class="social-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div><!-- /#introduce-box -->

        <div id="footer-menu-box">
            <p class="text-center">Copyrights &#169; 2024. All Rights Reserved. Designed by
                FermosoMedical</p>
        </div><!-- /#footer-menu-box -->
    </div>
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
