;(function(){

// Menu settings
$('#menuToggle, .menu-close').on('click', function(){
	$('#menuToggle').toggleClass('active');
	$('body').toggleClass('body-push-toleft');
	$('#theMenu').toggleClass('menu-open');
});

})(jQuery)



//Back-to-top Button

jQuery(document).ready(function() {
    var offset = 250;
    var duration = 300;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
