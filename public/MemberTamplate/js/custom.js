// templatemo 467 easy profile

// PRELOADER

$(window).load(function(){
    $('.preloader').delay(1000).fadeOut("slow"); // set duration in brackets    
});

// HOME BACKGROUND SLIDESHOW
$(function(){
    jQuery(document).ready(function() {
		$('body').backstretch([
	 		 "MemberTamplate/images/tm-bg-slide-1.jpg", 
	 		 "MemberTamplate/images/tm-bg-slide-2.jpg",
			 "MemberTamplate/images/tm-bg-slide-3.jpg"
	 			], 	{duration: 3200, fade: 1300});
		});
});