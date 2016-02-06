
$(document).ready(function(){
	/* Menu hover background color changes */
	$(".link").mouseover(function () {
		$(this).css("background-color", "rgba(0, 0, 0, 0.2)");
	});
	$(".link").mouseleave(function () {
		$(this).css("background-color", "inherit");
	});
	
	var posL = $("h1").offset().top;
	var posI = $("#info_T").offset().top;
	function fixI() {
		var top = $(window).scrollTop();
		if (top >= posI) {
			$("#info_T").css("position", "fixed");
			$("#info_T").css("top", "-1.5vh");
			$("h1").css("top", "-200vh");
		} else {
			$("#info_T").css("position", "absolute");
			$("#info_T").css("top", "auto");
			if (top >= posL) {
				$("h1").css("top", "-1.5vh");
			} else {
				$("h1").css("top", "25vh");
			}
		}
	}
	
	function fixL() {
		var top = $(window).scrollTop();
		if (top >= posL) {
			$("h1").css("position", "fixed");
			$("h1").css("top", "-1.5vh");
		} else {
			$("h1").css("position", "absolute");
			$("h1").css("top", "25vh");
		}
	}
	$(window).scroll(fixL);
	fixL();
	$(window).scroll(fixI);
	fixI();
});