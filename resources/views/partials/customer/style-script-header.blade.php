<!-- load jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- provide the csrf token -->
<meta name="csrf-token" content="{{ csrf_token() }}" />

<meta name='robots' content='max-image-preview:large'>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/a5ff7.css" media="all">
<style id="wp-block-library-theme-inline-css">
    .wp-block-audio figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-audio figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-audio {
        margin: 0 0 1em
    }

    .wp-block-code {
        border: 1px solid #ccc;
        border-radius: 4px;
        font-family: Menlo, Consolas, monaco, monospace;
        padding: .8em 1em
    }

    .wp-block-embed figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-embed figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-embed {
        margin: 0 0 1em
    }

    .blocks-gallery-caption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .blocks-gallery-caption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-image figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image {
        margin: 0 0 1em
    }

    .wp-block-pullquote {
        border-bottom: 4px solid;
        border-top: 4px solid;
        color: currentColor;
        margin-bottom: 1.75em
    }

    .wp-block-pullquote cite,
    .wp-block-pullquote footer,
    .wp-block-pullquote__citation {
        color: currentColor;
        font-size: .8125em;
        font-style: normal;
        text-transform: uppercase
    }

    .wp-block-quote {
        border-left: .25em solid;
        margin: 0 0 1.75em;
        padding-left: 1em
    }

    .wp-block-quote cite,
    .wp-block-quote footer {
        color: currentColor;
        font-size: .8125em;
        font-style: normal;
        position: relative
    }

    .wp-block-quote.has-text-align-right {
        border-left: none;
        border-right: .25em solid;
        padding-left: 0;
        padding-right: 1em
    }

    .wp-block-quote.has-text-align-center {
        border: none;
        padding-left: 0
    }

    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large,
    .wp-block-quote.is-style-plain {
        border: none
    }

    .wp-block-search .wp-block-search__label {
        font-weight: 700
    }

    .wp-block-search__button {
        border: 1px solid #ccc;
        padding: .375em .625em
    }

    :where(.wp-block-group.has-background) {
        padding: 1.25em 2.375em
    }

    .wp-block-separator.has-css-opacity {
        opacity: .4
    }

    .wp-block-separator {
        border: none;
        border-bottom: 2px solid;
        margin-left: auto;
        margin-right: auto
    }

    .wp-block-separator.has-alpha-channel-opacity {
        opacity: 1
    }

    .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
        width: 100px
    }

    .wp-block-separator.has-background:not(.is-style-dots) {
        border-bottom: none;
        height: 1px
    }

    .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
        height: 2px
    }

    .wp-block-table {
        margin: 0 0 1em
    }

    .wp-block-table td,
    .wp-block-table th {
        word-break: normal
    }

    .wp-block-table figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-table figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video figcaption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .wp-block-video figcaption {
        color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video {
        margin: 0 0 1em
    }

    .wp-block-template-part.has-background {
        margin-bottom: 0;
        margin-top: 0;
        padding: 1.25em 2.375em
    }
</style>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/a901f.css" media="all">
<style id="yith-wcwl-main-inline-css">
    .yith-wcwl-share li a {
        color: #FFF
    }

    .yith-wcwl-share li a:hover {
        color: #FFF
    }

    .yith-wcwl-share a.facebook {
        background: #39599E;
        background-color: #39599E
    }

    .yith-wcwl-share a.facebook:hover {
        background: #595A5A;
        background-color: #595A5A
    }

    .yith-wcwl-share a.twitter {
        background: #45AFE2;
        background-color: #45AFE2
    }

    .yith-wcwl-share a.twitter:hover {
        background: #595A5A;
        background-color: #595A5A
    }

    .yith-wcwl-share a.pinterest {
        background: #AB2E31;
        background-color: #AB2E31
    }

    .yith-wcwl-share a.pinterest:hover {
        background: #595A5A;
        background-color: #595A5A
    }

    .yith-wcwl-share a.email {
        background: #FBB102;
        background-color: #FBB102
    }

    .yith-wcwl-share a.email:hover {
        background: #595A5A;
        background-color: #595A5A
    }

    .yith-wcwl-share a.whatsapp {
        background: #00A901;
        background-color: #00A901
    }

    .yith-wcwl-share a.whatsapp:hover {
        background: #595A5A;
        background-color: #595A5A
    }
</style>
<style id="classic-theme-styles-inline-css">
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
</style>
<style id="global-styles-inline-css">
    /*<![CDATA[*/
    body {
        --wp--preset--color--black: #000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #fff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1)
    }

    :where(.is-layout-flex) {
        gap: 0.5em
    }

    :where(.is-layout-grid) {
        gap: 0.5em
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important
    }

    body .is-layout-constrained>:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size)
    }

    body .is-layout-flex {
        display: flex
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center
    }

    body .is-layout-flex>* {
        margin: 0
    }

    body .is-layout-grid {
        display: grid
    }

    body .is-layout-grid>* {
        margin: 0
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6
    }

    /*]]>*/
</style>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/dae58.css" media="all">
<style id="woocommerce-inline-inline-css">
    .woocommerce form .form-row .required {
        visibility: visible
    }
</style>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/4ac1b.css" media="all">
<style id="yith-quick-view-inline-css">
    #yith-quick-view-modal .yith-wcqv-main {
        background: #fff
    }

    #yith-quick-view-close {
        color: #cdcdcd
    }

    #yith-quick-view-close:hover {
        color: #f00
    }
</style>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/dcbdf.css" media="all">
<style id="rtwpvs-inline-css">
    .rtwpvs-term:not(.rtwpvs-radio-term) {
        width: 24px;
        height: 24px
    }

    .rtwpvs-squared .rtwpvs-button-term {
        min-width: 24px
    }

    .rtwpvs-button-term span {
        font-size: 14px
    }

    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled::before,
    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled::after,
    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled:hover::before,
    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled:hover::after {
        background: #f00 !important
    }

    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled img,
    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled span,
    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled:hover img,
    .rtwpvs.rtwpvs-attribute-behavior-blur .rtwpvs-term:not(.rtwpvs-radio-term).disabled:hover span {
        opacity: 0.3
    }
</style>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/1bf85.css" media="all">
<style id="font-awesome-inline-css">
    [data-font="FontAwesome"]:before {
        font-family: 'FontAwesome'
            !important;
        content: attr(data-icon) !important;
        speak: none !important;
        font-weight: normal !important;
        font-variant: normal !important;
        text-transform: none !important;
        line-height: 1 !important;
        font-style: normal !important;
        -webkit-font-smoothing: antialiased !important;
        -moz-osx-font-smoothing: grayscale !important
    }
</style>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/53f0a.css" media="all">
<style id="kuteshop-main-inline-css">
    /*<![CDATA[*/
    body {
        --main-color-h: 345;
        --main-color-s: 100%;
        --main-color-l: 60%;
        --default-color: #222;
        --main-color-b: #e52e5c;
        --main-color-t: #fff;
        --main-h-fw: 700
    }

    @media (max-width:1499px) and (min-width:992px) {
        body {}
    }

    @media (min-width: 1230px) {
        body {
            --main-container: 1170px
        }

        body.wcfm-store-page .site #main {
            width: 1200px !important
        }
    }

    .vertical-menu>.menu-item:nth-child(n+12) {
        display: none
    }

    /*]]>*/
</style>
<link rel="stylesheet" href="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/5fa7e.css" media="all">

@verbatim
    <script type="text/template" id="tmpl-ovic-notice-popup">
    <# if ( data.img_url != '' ) { #>
    <figure>
        <img src="{{data.img_url}}" alt="{{data.title}}" class="growl-thumb" />
    </figure>
    <# } #>
    <p class="growl-content">
        <# if ( data.title != '' ) { #>
        <span>{{data.title}}</span>
        <# } #>
        {{{data.content}}}
    </p>
</script>
    <script type="text/template id=tmpl-variation-template">
    <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
    <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
    <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
@endverbatim

<script type="text/template" id="tmpl-unavailable-variation-template">
    <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<script id="jquery-core-js-extra">
    var xlwcty = {
        "ajax_url": "https:\/\/kuteshop.kutethemes.net\/wp-admin\/admin-ajax.php",
        "version": "2.17.0",
        "wc_version": "8.3.1"
    };
</script>
<script src="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/82fd8.js"></script>
<script id="wp-util-js-extra">
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
</script>
<script src="https://kuteshop.b-cdn.net/wp-content/cache/minify/1/76d15.js"></script>
<script id="wc-add-to-cart-js-extra">
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/kuteshop.kutethemes.net\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
</script>
<script id="woocommerce-js-extra">
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
</script>
<script id="wc-add-to-cart-variation-js-extra">
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination.",
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "i18n_view_cart": "View cart",
        "i18n_add_to_cart": "Add to cart",
        "i18n_select_options": "Select options",
        "cart_url": "https:\/\/kuteshop.kutethemes.net\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no",
        "enable_ajax_add_to_cart": "yes"
    };
</script>

<style>
    .dgwt-wcas-ico-magnifier,
    .dgwt-wcas-ico-magnifier-handler {
        max-width: 20px
    }

    .dgwt-wcas-search-wrapp {
        max-width: 600px
    }
</style><noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important
        }
    </style>
</noscript>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/cropped-favicon-32x32.png"
    sizes="32x32">
<link rel="icon" href="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/cropped-favicon-192x192.png"
    sizes="192x192">
<link rel="apple-touch-icon" href="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/cropped-favicon-180x180.png">
<meta name="msapplication-TileImage"
    content="https://kuteshop.b-cdn.net/wp-content/uploads/2022/05/cropped-favicon-270x270.png">
<script>
    function setREVStartSize(e) {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
    };
</script>
<style>
    .ovic-menu-clone-wrap .head-menu-mobile {
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover
    }
</style>
