jQuery(document).ready(function(){jQuery(".fusion-sharing-box").each(function(){jQuery('meta[property="og:title"]').length||(jQuery("head title").after('<meta property="og:title" content="'+jQuery(this).data("title")+'"/>'),jQuery("head title").after('<meta property="og:description" content="'+jQuery(this).data("description")+'"/>'),jQuery("head title").after('<meta property="og:type" content="article"/>'),jQuery("head title").after('<meta property="og:url" content="'+jQuery(this).data("link")+'"/>'),jQuery("head title").after('<meta property="og:image" content="'+jQuery(this).data("image")+'"/>'))}),cssua.ua.mobile&&jQuery(".fusion-social-network-icon, .fusion-facebook-sharer-icon, .fusion-social-networks span a").each(function(e,t){0===t.href.indexOf("https://www.facebook.com/sharer.php")&&t.setAttribute("href",t.href.replace("https://www.facebook.com/sharer.php","https://m.facebook.com/sharer.php"))})});