$(document).ready(function(){
	$(".link").mouseenter(function(){
		$(this).css("background-color", "black");
	});
	$(".link").mouseleave(function(){
		$(this).css("background-color", "inherit");
	});
	
	/*Text animations only work on webkit browsers because background-clip: text; value is an unofficial value supported by webkit browsers*/
	/*there is probably an easier way of doing this*/
	function getAni(fName){
		$("h1").css("background", "url(img/" + fName + ")");
		$("h1").css("-webkit-background-clip", "text");
		$("h1").css("-webkit-text-fill-color", "transparent");
		$("h1").css("background-size", "90vh auto");
		$("h1").css("-webkit-background-size", "90vh auto");
		$("h1").css("background-repeat", "no-repeat");
	}
	function rng(toNumber) {
		var mr = new Date().getMilliseconds();
		return Math.floor(mr * toNumber / 1000);
	}
	
	$(".noge").mouseenter(function(){
		if (bowser.webkit){
			var n = rng(4);
			if (n <= 2) {
				getAni("colors_big.gif");
			} else if (n <= 4 && n > 2) {
				getAni("colors_big_reverse.gif");
			}
		} else {
			$("h1").addClass("class");
		}
		
	});
	$(".noge").mouseleave(function(){
		$("h1").css("background", "");
		$("h1").css("-webkit-background-clip", "");
		$("h1").css("-webkit-text-fill-color", "");
		$("h1").css("background-size", "");
		$("h1").css("-webkit-background-size", "");
		$("h1").css("background-repeat", "");
		$("h1").removeClass("class");
	});
	
	/* LOGO STUCK ON HIT TOP */
	var howMuchTop = $("h1").offset().top;
	console.log(howMuchTop);
	function fixLogo() {
		var sT = $(window).scrollTop();
		if (sT > howMuchTop) {
			$("#logo").css("position", "fixed");
			if (bowser.msie || bowser.msedge) {
				$("#logo").css("animation", "posIE 0.5 forwards");
			} else {
				$("#logo").css("animation", "posX 0.5s forwards");
			}
			$("h1").css("animation", "fontS 0.5s forwards");
		} else {
			$("#logo").css("position", "");
			$("#logo").css("animation", "");
			$("h1").css("animation", "");
		}
	}
	$(window).scroll(fixLogo);
	fixLogo();
});