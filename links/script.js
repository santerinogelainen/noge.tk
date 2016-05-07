
$(document).ready(function(){
		$(".menu_item").mouseover(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0.15)");
		});
		$(".menu_item").mouseleave(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0)");
		});

		$(".block").mouseover(function(){
			$(".widget_name", this).animate({
				top: "-40px"
			}, 250);
		});
		$(".block").mouseleave(function(){
			$(".widget_name", this).animate({
				top: "0"
			}, 250);
		});
});
