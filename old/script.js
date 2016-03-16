
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
	
	/*EVEN I CANT COMPLETELY UNDERSTAND THIS ANYMORE I SHOULD PROBABLY DOCUMENT MORE*/
	
	function fixFirst(h1) {
		var pos = $(h1).offset().top;
		var dif = $(window).height() * 0.175;
		var df = pos - dif;
		setInterval(function () {
			var topR = $(window).scrollTop();
			dif = $(window).height() * 0.175;
			df = pos - dif;
			if (topR < pos) {
				pos = $(h1).offset().top;
			}
		},1000);
		$(window).resize(function () {
			var topR = $(window).scrollTop();
			dif = $(window).height() * 0.17;
			df = pos - dif;
			if (topR < pos) {
				pos = $(h1).offset().top;
			}
		});
		return function () {
			var top = $(window).scrollTop();
			if (top >= pos) {
				$(h1).css("position", "fixed");
				$(h1).css("top", "-1.5vh");
				$(h1).css("color", "hsl(360, 0%, 0%)");
				$(h1).css("text-shadow", "none");
			} else {
				$(h1).css("position", "absolute");
				$(h1).css("top", "");
				$(h1).css("color", "hsl(360, 0%, 100%)");
				$(h1).css("text-shadow", "-1px 0 rgba(0, 0, 0, 1), 0 1px rgba(0, 0, 0, 1), 1px 0 rgba(0, 0, 0, 1), 0 -1px rgba(0, 0, 0, 1)");
			}
			if (top > dif && top < pos) {
				var posD = top - dif;
				var decimal = (1 - posD / df);
				var perC = decimal * 100;
				$("h1").css("color", "hsl(360, 0%, " + perC + "%)");
				$("h1").css("text-shadow", "-1px 0 rgba(0, 0, 0, " + decimal + "), 0 1px rgba(0, 0, 0, " + decimal + "), 1px 0 rgba(0, 0, 0, " + decimal + "), 0 -1px rgba(0, 0, 0, " + decimal + ")");
			}
		}
	}
	
	$(window).scroll(fixFirst("h1"));
	fixFirst("h1");
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
	
	function fixImg(img, chng) {
		var posI = $(img).offset().top;
		setInterval(function () {
			var topX = $(window).scrollTop();
			if (topX < posI) {
				posI = $(img).offset().top;
			}
		},1000);
		$(window).resize(function () {
			var topX = $(window).scrollTop();
			if (topX < posI) {
				posI = $(img).offset().top;
			}
		});
		return function () {
			var topY = $(window).scrollTop();
			if (topY >= posI) {
				$(chng).css("opacity", "1");
			} else {
				$(chng).css("opacity", "0");
			}
		}
	}
	
	$(window).scroll(fixImg("#INFO", ".fixedImg:nth-child(6)"));
	fixImg("#INFO", ".fixedImg:nth-child(6)");
	$(window).scroll(fixImg("#LINKS", ".fixedImg:nth-child(7)"));
	fixImg("#LINKS", ".fixedImg:nth-child(7)");
	
	
	function goup(ele, amount, dur) {
		$(ele).animate({
			top: amount
		}, dur);
	} function godown(ele, amount, dur) {
		$(ele).animate({
			top: amount
		}, dur)
	}
	function bob(ele, amountUp, amountDown, durUp, durDown, interval) {
		setInterval(function() {
			goup(ele, amountUp, durUp);
			setTimeout(godown(ele, amountDown, durDown), durUp);
		}, interval);
	}
	
	bob("#goup", "86vh", "87vh", 300, 300, 2500);
	
	
});