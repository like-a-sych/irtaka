$(function () {
	$("#container1").twentytwenty({
		default_offset_pct: 0.5,
		no_overlay: true,
	});
});
$(function () {
	$("#container2").twentytwenty({
		default_offset_pct: 0.5,
		no_overlay: true,
	});
});



$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav',
	adaptiveHeight: true
});
$('.slider-nav').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	focusOnSelect: true,
	arrows: false,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		}

	]
});
$('.multiple-items').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	arrows: false,
	adaptiveHeight: true,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		}

	]
});

$('._next-button').click(function () {
	$('.slider-for').slick('slickNext');
});

$('._next-button2').click(function () {
	$('.multiple-items').slick('slickNext');
});

