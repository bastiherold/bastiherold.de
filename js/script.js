$(function(){
	// ScrollTop
	// Display
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('#toTop').fadeIn();
		} 
		else {
			$('#toTop').fadeOut();
		}
	});
	// Scroll Event
	$('#toTop').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 666);
	});

	// ScrollTo
	$('.navbar-nav a, .breadcrumb a, .section-link-icon').bind('click', scrollToHref);

	// Form Submit
	$('form').submit(function() {
		$.aja
	});
});

function scrollToHref(){
	var href = $(this).attr('href');
	
	if(href.substr(0,1) === '#' && href.length > 1){
		
		if(href === '#legal'){
			$('#legal').fadeIn('fast');
		}
		$('html, body').animate({scrollTop:$($(this).attr('href')).offset().top}, 666);
		return false;
	}
}
