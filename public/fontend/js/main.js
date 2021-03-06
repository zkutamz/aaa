$(document).ready(function () {
	$("#hamburger").click(function () {
		$(this).toggleClass("active");
		$(".head_mobile").toggleClass("menu-opening");
		$(".mobile-nav").toggleClass("show");
		$(".mobile-nav .menu .sub-menu").slideUp();
		$("body").toggleClass("has-overlay");
	});

	$(".mobile-nav .menu .inner div").on("click", function () {
		$(this).closest("li").siblings().find(".inner").next().slideUp();
		$(this).closest("li").siblings().find(".inner div").removeClass("is-open");
		$(this).parent().next().slideToggle();
		$(this).toggleClass("is-open");
	});
	let $textBox = $(".slider__content .swiper__content .text-box");
	const sliderContent = new Swiper(".slider__content .swiper-container", {
		slidesPerView: 1,
		loop: true,
		speed: 700,
		navigation: {
			nextEl: ".slider__content .swiper-button-next",
			prevEl: ".slider__content .swiper-button-prev",
		},
		on: {
			slideChangeTransitionStart: function (e) {
				$textBox.hide();
				$textBox.eq(e.realIndex).show();
			},
		},
	});
	const swiper2 = new Swiper(".stories__carousel .swiper-container", {
		slidesPerView: 1,
		loop: true,
		centerInsufficientSlides: true,
		speed: 700,
		navigation: {
			nextEl: ".stories__carousel .swiper-button-next",
			prevEl: ".stories__carousel .swiper-button-prev",
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			420: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			800: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
		},
	});
});
