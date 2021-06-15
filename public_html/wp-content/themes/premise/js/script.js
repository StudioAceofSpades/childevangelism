(function($) {
	$(document).ready(function() {
        bindHeader();
        initSliders();
	});	

    function bindHeader() {
        $('.mm-trigger').click(function() {
            $('.main').toggle();
        });
    }
    function initSliders() {
        $('.slider').slick({
            slidesToShow    : 1,
            slidesToScroll  : 1,
            variableWidth   : true,
            autoplay        : true,
            autoplaySpeed   : 2000,
            infinite        : true,
            arrows          : false,
            focusOnSelect   : true,
            centerMode      : true,
        });
    }
})( jQuery )
