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
		$("h1").css("background-size", "2em auto");
		$("h1").css("-webkit-background-size", "2em auto");
		$("h1").css("background-repeat", "no-repeat");
	}
	$("#noge").mouseenter(function(){
		/* this is probably really horrible sphagetti code but im bad */
		if (bowser.webkit){
			var mr = Math.floor(Math.random() * 14);
			if (mr <= 2) {
				getAni("sky.gif");
			} else if (mr <= 4 && mr > 2) {
				getAni("err.gif");
			} else if (mr <= 6 && mr > 4) {
				getAni("lightspeed.gif");
			} else if (mr <= 8 && mr > 6) {
				getAni("stars.gif");
			} else if (mr <= 10 && mr > 8) {
				getAni("subway.gif");
			} else if (mr <= 12 && mr > 10) {
				getAni("water.gif");
			} else if (mr > 12) {
			getAni("wave.gif");
			}
		} else {
			$("h1").css("animation", "ani1 8s infinite");
			$("h1").css("-moz-animation", "ani1 8s infinite");
			$("h1").css("-ms-animation", "ani1 8s infinite");
		}
		
	});
	$("#noge").mouseleave(function(){
		$("h1").css("background", "");
		$("h1").css("-webkit-background-clip", "");
		$("h1").css("-webkit-text-fill-color", "");
		$("h1").css("background-size", "");
		$("h1").css("-webkit-background-size", "");
		$("h1").css("background-repeat", "");
		$("h1").css("animation", "");
		$("h1").css("-moz-animation", "");
		$("h1").css("-ms-animation", "");
	});
});