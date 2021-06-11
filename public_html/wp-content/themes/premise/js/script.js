(function($) {
	$(document).ready(function() {
        bindHeader();
	});	

    function bindHeader() {
        $('.mm-trigger').click(function() {
            $('.main').toggle();
        });
    }
})( jQuery )
