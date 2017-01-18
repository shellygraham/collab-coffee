$( document ).ready(function() {
	
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	
	    if (scroll >= 1) {
	        $(".site-header").addClass("shrunk");
	    } else {
	        $(".site-header").removeClass("shrunk");
	    }
	});

});