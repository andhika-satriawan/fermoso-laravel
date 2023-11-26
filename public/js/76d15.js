/*! This file is auto-generated */
window.wp=window.wp||{},function(s){var t="undefined"==typeof _wpUtilSettings?{}:_wpUtilSettings;wp.template=_.memoize(function(e){var n,a={evaluate:/<#([\s\S]+?)#>/g,interpolate:/\{\{\{([\s\S]+?)\}\}\}/g,escape:/\{\{([^\}]+?)\}\}(?!\})/g,variable:"data"};return function(t){if(document.getElementById("tmpl-"+e))return(n=n||_.template(s("#tmpl-"+e).html(),a))(t);throw new Error("Template not found: #tmpl-"+e)}}),wp.ajax={settings:t.ajax||{},post:function(t,e){return wp.ajax.send({data:_.isObject(t)?t:_.extend(e||{},{action:t})})},send:function(a,t){var e,n;return _.isObject(a)?t=a:(t=t||{}).data=_.extend(t.data||{},{action:a}),t=_.defaults(t||{},{type:"POST",url:wp.ajax.settings.url,context:this}),(e=(n=s.Deferred(function(n){t.success&&n.done(t.success),t.error&&n.fail(t.error),delete t.success,delete t.error,n.jqXHR=s.ajax(t).done(function(t){var e;"1"!==t&&1!==t||(t={success:!0}),_.isObject(t)&&!_.isUndefined(t.success)?(e=this,n.done(function(){a&&a.data&&"query-attachments"===a.data.action&&n.jqXHR.hasOwnProperty("getResponseHeader")&&n.jqXHR.getResponseHeader("X-WP-Total")?e.totalAttachments=parseInt(n.jqXHR.getResponseHeader("X-WP-Total"),10):e.totalAttachments=0}),n[t.success?"resolveWith":"rejectWith"](this,[t.data])):n.rejectWith(this,[t])}).fail(function(){n.rejectWith(this,arguments)})})).promise()).abort=function(){return n.jqXHR.abort(),this},e}}}(jQuery);

var ovic_core_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "security": "3220bae054",
    "ovic_ajax_url": "\/?ovic-ajax=%%endpoint%%",
    "cart_url": "https:\/\/kuteshop.kutethemes.net\/cart\/",
    "cart_redirect_after_add": "no",
    "ajax_single_add_to_cart": "1",
    "is_preview": "",
    "growl_notice": {
        "view_cart": "View cart",
        "added_to_cart_text": "Product has been added to cart!",
        "added_to_wishlist_text": "Product added!",
        "removed_from_wishlist_text": "Product has been removed from wishlist!",
        "wishlist_url": "https:\/\/kuteshop.kutethemes.net\/wishlist\/",
        "browse_wishlist_text": "Browse",
        "growl_notice_text": "Notice!",
        "removed_cart_text": "Product Removed",
        "growl_duration": 3000
    }
};