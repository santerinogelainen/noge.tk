
$(document).ready(function(){
		$(".menu_item").mouseover(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0.15)");
		});
		$(".menu_item").mouseleave(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0)");
		});

		var state = 0;

		$(".middle_style2").mouseover(function() {
			animations();
		});
		function animations() {
			$(".img_style23").animate({
				opacity: 0
			}, 750);
			$(".img_style22").animate({
				opacity: 1
			}, 750);
			setTimeout(function(){
			$(".img_style22").animate({
				opacity: 0
			}, 750);
			$(".img_style21").animate({
				opacity: 1
			}, 750);
			}, 1250);
			setTimeout(function(){
			$(".img_style21").animate({
				opacity: 0
			}, 750);
			$(".img_style20").animate({
				opacity: 1
			}, 750);
			}, 2500);
			setTimeout(function(){
			$(".img_style20").animate({
				opacity: 0
			}, 750);
			$(".img_style23").animate({
				opacity: 1
			}, 750);
			}, 3750);
		}

});
