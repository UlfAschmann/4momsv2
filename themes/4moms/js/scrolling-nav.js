//jQuery to collapse the navbar on scroll
$(window).scroll(function () {
	if ($(".navbar").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
	$('a.page-scroll').bind('click', function (event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
});

$(document).ready(function () {

	$('.carousel').carousel({
		interval: 7000
	});


});


/*window.addEventListener('load', function () {
	var video = document.querySelector('#pretzel-video');

	function checkLoad() {
		if (video.readyState === 4) {
			$('.carousel').carousel({
				interval: 8500
			}, 'cycle');
		} else {
			setTimeout(checkLoad, 100);
		}
	}

	checkLoad();
}, false);*/
