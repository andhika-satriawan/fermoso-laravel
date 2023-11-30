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
                class="delimiter"></span>My account</nav>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-9" class="post-9 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="u-columns col2-set" id="customer_login">
                                <div class="u-column1 col-1">
                                    <h2>Register</h2>
                                    <form method="post" class="woocommerce-form woocommerce-form-register register">
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="reg_username">No Handphone&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="tel"
                                                class="woocommerce-Input woocommerce-Input--text input-text" name="phone"
                                                id="reg_username" autocomplete="phone" value=""
                                                placeholder="08xxxxxxxxxx">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="reg_username">Username&nbsp;<span class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text" name="username"
                                                id="reg_username" autocomplete="username" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="reg_email">Email address&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="email"
                                                class="woocommerce-Input woocommerce-Input--text input-text" name="email"
                                                id="reg_email" autocomplete="email" value="">
                                        </p>
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="reg_password">Password&nbsp;<span class="required">*</span></label>
                                            <span class="password-input"><input type="password"
                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                    name="password" id="reg_password" autocomplete="new-password"><span
                                                    class="show-password-input"></span></span>
                                        </p>
                                        <div class="woocommerce-privacy-policy-text">
                                            <p>Your personal data will be used to support your experience throughout this
                                                website, to manage access to your account, and for other purposes described
                                                in our <a href="https://kuteshop.kutethemes.net/privacy-policy/"
                                                    class="woocommerce-privacy-policy-link" target="_blank">privacy
                                                    policy</a>.</p>
                                        </div>
                                        <p class="woocommerce-form-row form-row">
                                            <input type="hidden" id="woocommerce-register-nonce"
                                                name="woocommerce-register-nonce" value="6a54ffd1b3"><input type="hidden"
                                                name="_wp_http_referer" value="/my-account/?demo=21">
                                            <button type="submit"
                                                class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                                                name="register" value="Register">Register</button>
                                        </p>
                                    </form>
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
