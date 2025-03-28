jQuery(function () {
	/* opening
	------------------------------------------------------------*/

	setTimeout(function () {
		$("#open .box").fadeIn(500)
	}, 1000)

	setTimeout(function () {
		$("#home").css("visibility", "visible")
		$("#open").fadeOut(1000)
	}, 3000)

	// $("#home").css("visibility", "visible")
	// $("#open").fadeOut(1000)

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
		$(".works__image__fade").each(function () {
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
				$(".works__image__fade .box__1").addClass("on")
				setTimeout(function () {
					$(".works__image__fade .box__2").addClass("on")
				}, 1000)
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

	if (window.matchMedia("(max-width:768px)").matches) {
		$("#nav__list>ul>li>a").on("click", function (e) {
			e.preventDefault()
			$(this).siblings("ul").stop(true, true).slideToggle()
			$(this).toggleClass("on")
		})
		$("#nav__list>ul>li>ul>li>a").on("click", function () {
			isMenuActive = !isMenuActive
			$(".menubar__trigger").toggleClass("active", isMenuActive)
			$(".nav").fadeToggle()
		})
	} else {
		$("#nav a").on("click", function () {
			isMenuActive = !isMenuActive
			$(".menubar__trigger").toggleClass("active", isMenuActive)
			$(".nav").fadeToggle()
		})
	}

	$(".fbtn button").on("click", function () {
		$("#popup__sp").fadeIn()
	})
	$("#closebtn").on("click", function () {
		$("#popup__sp").fadeOut()
	})

	/* nav
	------------------------------------------------------------*/

	$("#nav__list>ul>li>ul>li>a").hover(
		function () {
			const $dt = $(this).closest("ul").parent("li").children("a").find("dt")

			$dt.addClass("on")
		},
		function () {
			const $dt = $(this).closest("ul").parent("li").children("a").find("dt")
			$dt.removeClass("on")
		}
	)

	/* indexの採用を知るのボタン
	------------------------------------------------------------*/

	$("#open__entry").on("click", function () {
		$("#popup__entry").fadeIn()
	})
	$("#open__mypage").on("click", function () {
		$("#popup__mypage").fadeIn()
	})

	$("#btn__recruit__entry").on("click", function () {
		$("#popup__entry").fadeIn()
	})

	/* system
	------------------------------------------------------------*/

	// num1
	$({ countNum: 99 }).animate(
		{ countNum: 0 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num1").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num1").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	// num2
	$({ countNum: 0 }).animate(
		{ countNum: 9.3 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num2").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num2").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	// num3_1
	$({ countNum: 0 }).animate(
		{ countNum: 67 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num3__1").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num3__1").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	// num3_2
	$({ countNum: 0 }).animate(
		{ countNum: 33 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num3__2").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num3__2").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	// num4
	$({ countNum: 0 }).animate(
		{ countNum: 33 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num4").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num4").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	// num5
	$({ countNum: 0 }).animate(
		{ countNum: 120 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num5").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num5").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	// num6
	$({ countNum: 0 }).animate(
		{ countNum: 13.9 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num6").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num6").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	// num8
	$({ countNum: 0 }).animate(
		{ countNum: 95 },
		{
			duration: 3000, // 3秒
			easing: "easeOutExpo",
			step: function () {
				$("#num8").text(Math.floor(this.countNum))
			},
			complete: function () {
				$("#num8").text(this.countNum) // 最後にピッタリ合わせる
			},
		}
	)

	/* fbtn
	------------------------------------------------------------*/

	let scrollTimer = null

	$(window).on("scroll", function () {
		$(".fbtn").removeClass("show")
		if (scrollTimer !== null) {
			clearTimeout(scrollTimer)
		}
		scrollTimer = setTimeout(function () {
			$(".fbtn").addClass("show")
		}, 200)
	})

	/* topback
	------------------------------------------------------------*/

	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$("#topback").fadeIn()
		} else {
			$("#topback").fadeOut()
		}
	})

	/* top
	------------------------------------------------------------*/

	if ($("#index").length) {
		$("#visual__l").vegas({
			slides: [
				{ src: "assets/images/visual_1_1.webp" },
				{ src: "assets/images/visual_2_1.webp" },
				{ src: "assets/images/visual_3_1.webp" },
			],
			transition: "fade",
			transitionDuration: 3000,
			animation: "random",
			delay: 8000,
			timer: false,
		})
		$("#visual__r1").vegas({
			slides: [
				{ src: "assets/images/visual_1_2.webp" },
				{ src: "assets/images/visual_2_2.webp" },
				{ src: "assets/images/visual_3_2.webp" },
			],
			transition: "fade",
			transitionDuration: 3000,
			animation: "random",
			delay: 8000,
			timer: false,
		})
		$("#visual__r2").vegas({
			slides: [
				{ src: "assets/images/visual_1_3.webp" },
				{ src: "assets/images/visual_2_3.webp" },
				{ src: "assets/images/visual_3_3.webp" },
			],
			transition: "fade",
			transitionDuration: 3000,
			animation: "random",
			delay: 8000,
			timer: false,
		})

		$("#visual__l__sp").vegas({
			slides: [
				{ src: "assets/images/visual_1_1_sp.webp" },
				{ src: "assets/images/visual_2_1_sp.webp" },
				{ src: "assets/images/visual_3_1_sp.webp" },
			],
			transition: "fade",
			transitionDuration: 3000,
			animation: "random",
			delay: 8000,
			timer: false,
		})
		$("#visual__r1__sp").vegas({
			slides: [
				{ src: "assets/images/visual_1_2_sp.webp" },
				{ src: "assets/images/visual_2_2_sp.webp" },
				{ src: "assets/images/visual_3_2_sp.webp" },
			],
			transition: "fade",
			transitionDuration: 3000,
			animation: "random",
			delay: 8000,
			timer: false,
		})
		$("#visual__r2__sp").vegas({
			slides: [
				{ src: "assets/images/visual_1_3_sp.webp" },
				{ src: "assets/images/visual_2_3_sp.webp" },
				{ src: "assets/images/visual_3_3_sp.webp" },
			],
			transition: "fade",
			transitionDuration: 3000,
			animation: "random",
			delay: 8000,
			timer: false,
		})
	}
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
