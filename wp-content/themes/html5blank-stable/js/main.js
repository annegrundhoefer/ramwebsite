$(document).ready(function(){
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	     //>=, not <=
	    if (scroll >= 500) {
	        //clearHeader, not clearheader - caps H
	        $("#home").addClass("active");
	    } else {
	    	$("#home").removeClass("active");
	    }
	}); 	
});