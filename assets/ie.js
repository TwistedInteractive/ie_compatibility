// Check IE Version:

var is_ie7 = /MSIE 7\.0/.test(window.navigator.userAgent);
var is_ie8 = /MSIE 8\.0/.test(window.navigator.userAgent);

if(is_ie7 || is_ie8)
{
    var cssLink = document.createElement('link');
    cssLink.rel = 'stylesheet';
    cssLink.type = 'text/css';
    cssLink.href = is_ie7 ? '/extensions/ie_compatibility/assets/ie7.css' : '/extensions/ie_compatibility/assets/ie8.css';
    document.getElementsByTagName('head')[0].appendChild(cssLink);

    jQuery(function(){
        jQuery('tr:even td').addClass('even');
    });
}