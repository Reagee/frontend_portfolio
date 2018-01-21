$(document).on("scroll", function() {

	if($(document).scrollTop()>200) {
		$("nav").addClass("small-nav");
		$("li").addClass("small-li");
	} else {
		$("li").removeClass("small-li");
		$("nav").removeClass("small-nav");
	
	}
	
});