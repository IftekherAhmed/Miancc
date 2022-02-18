$(function() {
	$("#main_slider").owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		/*navText: ["<span class='fa fa-angle-left'></span>","<span class='fa fa-angle-right'></span>"],*/
		dots: true,
		autoplay: true,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	
	$("#certificate_slider").owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: ["<span class='fa fa-angle-left'></span>","<span class='fa fa-angle-right'></span>"],
		dots: false,
		autoplay: true,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	});
	
});