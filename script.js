
$(document).ready(function(){
	/* Menu hover background color changes */
	$(".link").mouseover(function () {
		$(this).css("background-color", "rgba(0, 0, 0, 0.2)");
	});
	$(".link").mouseleave(function () {
		$(this).css("background-color", "inherit");
	});
	$(".pop-link").mouseover(function () {
		$(this).css("background-color", "rgba(0, 0, 0, 0.2)");
	});
	$(".pop-link").mouseleave(function () {
		$(this).css("background-color", "inherit");
	});
	
	function fixFirst(fix) {
		var pos = $(fix).offset().top;
		$(window).resize(function(){
			pos = $(fix).offset().top;
		});
		return function () {
			var top = $(this).scrollTop();
			if (top >= pos) {
				$(fix).css("position", "fixed");
				$(fix).css("top", "-1.5vh");
			} else {
				$(fix).css("position", "absolute");
				$(fix).css("top", "");
			}
		}
	}
	
	
	function scrollLock(fix, prev) {
		var posF = $(fix).offset().top;
		var posP = $(prev).offset().top;

		var posSF = $(fix).offset().top;
		var posSP = $(prev).offset().top;
		
		var sh = $(window).height();
		
		$(window).resize(function() {
			posF = $(fix).offset().top;
			posP = $(prev).offset().top;

			posSF = $(fix).offset().top;
			posSP = $(prev).offset().top;
			
			sh = $(window).height();
		});
		
		return function () {
			posSF = $(fix).offset().top;
			posSP = $(prev).offset().top;
			sh = $(window).height();
			var posU = (posSP - (posSF - (sh * 0.13)));
			var top = $(this).scrollTop();
			if (posU > sh * 0.015) {
				$(prev).css("top", -posU.toString() + "px");
			}
			if (top >= posF) {
				$(fix).css("position", "fixed");
				$(fix).css("top", "-1.5vh");
			} else {
				$(fix).css("position", "absolute");
				$(fix).css("top", "");
			}
		}
	}
	
	fixFirst("h1");
	$(window).scroll(fixFirst("h1"));
	scrollLock("#info_T", "h1");
	$(window).scroll(scrollLock("#info_T", "h1", "25vh"));
	$('img').on('dragstart', function(event) { event.preventDefault(); });
	
	
	$("#hamburger").click(function (){
		$("#pop-menu").css("display", "inline-block");
		$("#pop-menu").animate({
			opacity: "1"
		}, 250);
		$("#pop-back").css("display", "inline-block");
		$("#pop-back").animate({
			opacity: "1"
		}, 250);
	});
	$("#pop-menu, #pop-back").click(function () {
		$("#pop-back").css("display", "none");
		$("#pop-menu").css("display", "none");
		$("#pop-back").css("opacity", "0");
		$("#pop-menu").css("opacity", "0");
	});
});