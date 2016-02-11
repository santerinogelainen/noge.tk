
$(document).ready(function(){
	/* Menu hover background color changes */
	$(".link").mouseover(function () {
		$(this).css("background-color", "rgba(0, 0, 0, 0.2)");
	});
	$(".link").mouseleave(function () {
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
		
		$(window).resize(function() {
			posF = $(fix).offset().top;
			posP = $(prev).offset().top;

			posSF = $(fix).offset().top;
			posSP = $(prev).offset().top;
		});
		
		return function () {
			posSF = $(fix).offset().top;
			posSP = $(prev).offset().top;
			var posU = (posSP - (posSF - (screen.height * 0.080)));
			var top = $(this).scrollTop();
			if (posU > screen.height * 0.015) {
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
	
});