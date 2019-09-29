jQuery(document).ready(function(jQuery) {
    var Body = jQuery('body');
    Body.addClass('preloader-site');
});
jQuery(window).load(function() {
    jQuery('.preloader-wrapper').fadeOut(700);
    jQuery('body').removeClass('preloader-site');
});