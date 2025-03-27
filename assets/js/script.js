jQuery(function () {
	var _h = window.innerHeight ? window.innerHeight : $(window).height()

	/* scroll
	------------------------------------------------------------*/

	if (window.matchMedia("(max-width:768px)").matches) {
		// for sp
		_ajust = 80
	} else {
		// for pc
		_ajust = 140
	}

	var _urlHash = location.hash
	if (_urlHash) {
		$("body,html").stop().scrollTop(0)
		setTimeout(function () {
			var _target = $(_urlHash)
			var _pos = _target.offset().top - _ajust
			$("body,html").stop().animate({ scrollTop: _pos }, 1400, "easeOutExpo")
		}, 100)
	}
	$(document).on("click", 'a[href^="#"]', function () {
		var _href = $(this).attr("href")
		var _target = $(_href)
		var _pos = _target.offset().top - _ajust
		$("body,html").stop().animate({ scrollTop: _pos }, 1400, "easeOutExpo")
		return false
	})

	/* slide
	------------------------------------------------------------*/

	if ($(".schedule__slider").length) {
		$(".schedule__slider")
			.not(".slick-initialized")
			.slick({
				autoplay: true,
				arrows: true,
				infinite: true,
				variableWidth: true,
				slidesToScroll: 1,
				speed: 400,
				dots: false,
				autoplaySpeed: 3000,
				focusOnSelect: true,
				responsive: [
					{
						breakpoint: 768,
						settings: "unslick",
						// 	settings: {
						// 		variableWidth: false,
						// 		slidesToShow: 2,
						// 	},
					},
				],
			})
	}

	/* item fade
	------------------------------------------------------------*/

	$(".fade").on("inview", function (event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			$(this).stop().addClass("fade_on")
		} else {
			$(this).stop().removeClass("fade_on")
		}
	})

	/* item fade
	------------------------------------------------------------*/

	$(document).ready(function () {
		inviewFade()
	})

	$(window).scroll(function () {
		inviewFade()
	})

	function inviewFade() {
		$(".fade").each(function () {
			var position = $(this).offset().top
			var scroll = $(window).scrollTop()
			var windowHeight = $(window).height()
			if (window.matchMedia("(max-width:768px)").matches) {
				// for sp
				var _pos = 200
			} else {
				// for pc
				var _pos = 300
			}
			if (scroll > position - windowHeight + _pos) {
				$(this).addClass("fade__on")
			}
		})
	}

	/* radioボタンの再選択で解除する処理
	------------------------------------------------------------*/

	$("input[type='radio']").on("click", function () {
		if ($(this).hasClass("is-checked")) {
			$(this).removeClass("is-checked")
			$(this).prop("checked", false)
		} else {
			$("input[type='radio'].is-checked").removeClass("is-checked")
			$(this).addClass("is-checked")
		}
	})

	/* menu
	------------------------------------------------------------*/

	var isMenuActive = false

	$(document).on("click", ".menubar__trigger", function () {
		isMenuActive = !isMenuActive
		$(this).toggleClass("active", isMenuActive)
		$(".nav").fadeToggle()
	})

	/* header btn
	------------------------------------------------------------*/

	$("#header .btn button").on("click", function () {
		let _target = $(this).data("id")
		$("#popup__" + _target).fadeIn()
	})

	$(".popup__bg").on("click", function () {
		$(".popup").fadeOut()
	})
	$(".popup__close").on("click", function () {
		$(".popup").fadeOut()
	})

	$("#nav__btn button").on("click", function () {
		let _target = $(this).data("id")
		$("#popup__" + _target).fadeIn()
	})

	$("#nav a").on("click", function () {
		isMenuActive = !isMenuActive
		$(".menubar__trigger").toggleClass("active", isMenuActive)
		$(".nav").fadeToggle()
	})
})

/* easing
------------------------------------------------------------*/

jQuery.easing["jswing"] = jQuery.easing["swing"]

jQuery.extend(jQuery.easing, {
	easeInQuad: function (x, t, b, c, d) {
		return c * (t /= d) * t + b
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c * (t /= d) * (t - 2) + b
	},
	easeOutExpo: function (e, f, a, h, g) {
		return f == g ? a + h : h * (-Math.pow(2, (-10 * f) / g) + 1) + a
	},
})
