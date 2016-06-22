$(function(){

	$(window).scroll(function(){
	    var window_top = $(window).scrollTop(); // the "12" should equal the margin-top value for nav.stick
	    var div_top = $('#nav-anchor').offset().top;
	        if (window_top > div_top) {
	            $('.front-nav').addClass('stick');
	        } else {
	            $('.front-nav').removeClass('stick');
	        }
	});

});






