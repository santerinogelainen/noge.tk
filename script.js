
$(document).ready(function(){
	/* Menu hover background color changes */
	$(".link").mouseover(function () {
		$(this).css("background-color", "rgba(0, 0, 0, 0.2)");
	});
	$(".link").mouseleave(function () {
		$(this).css("background-color", "inherit");
	});
	function scrollLock(fix, prev, prevTop) {
		var posF = $(fix).offset().top;
		if (typeof prev !== 'undefined') {
				var posP = $(prev).offset().top;
		}
		$(window).resize(function() {
			posF = $(fix).offset().top;
			if (typeof prev !== 'undefined') {
				posP = $(prev).offset().top;
			}
		});
		return function () {
			var top = $(this).scrollTop();
			if (top >= posF) {
				$(fix).css("position", "fixed");
				$(fix).css("top", "-1.5vh");
				if (typeof prev !== 'undefined') {
					$(prev).css("top", "-200vh");
				}
			} else {
				$(fix).css("position", "absolute");
				$(fix).css("top", "");
				if (top >= posP && typeof prev !== 'undefined') {
					$(prev).css("top", "-1.5vh");
				} else if (typeof prev !== 'undefined') {
					$(prev).css("top", prevTop);
				}
			}
		}
	}
	scrollLock("h1");
	$(window).scroll(scrollLock("h1"));
	scrollLock("#info_T", "h1", "25vh");
	$(window).scroll(scrollLock("#info_T", "h1", "25vh"));
	
});