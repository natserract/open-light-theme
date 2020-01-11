
jQuery(document).ready(function($){
	$(document).on('click touchstart', '.search-button>span', function(e){
		e.preventDefault();
        $('.search-form-container').toggleClass('show')
    });
});