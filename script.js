
$(document).ready(function(){
		$(".menu_item").mouseover(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0.15)");
		});
		$(".menu_item").mouseleave(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0)");
		});
});
