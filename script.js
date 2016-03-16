
$(document).ready(function(){
		$("#hamburger").click(function () {
			$("body").animate({
				left: "300px"
			}, 350);
			$("#expand").css("width", "100%");
			$("#expand").css("height", "100%");
			$("#expand").animate({
				opacity: "1"
			}, 350);
		});
		$("#expand").click(function () {
			$("body").animate({
				left: "0"
			}, 350);
			$("#expand").animate({
				opacity: "0"
			}, 350);
			setTimeout(function () {
				$("#expand").css("width", "0");
				$("#expand").css("height", "0");
			}, 350);
		});
		
		$.mobile.loading().hide();
		$('#hamburger').attr('draggable', false);
		$('#logo').attr('draggable', false);
		$('body').attr('draggable', false);
		
			
			var x = event.pageX;
			var mDown = false;
			var offLeft = $("#menu").offset().left;
			
			$("body").on('swiperight', function() {
				$("body").animate({
					left: "300px"
				}, 350);
				$("#expand").css("width", "100%");
				$("#expand").css("height", "100%");
				$("#expand").animate({
					opacity: "1"
				}, 350);
			});
			$("body").on('swipeleft', function() {
				$("body").animate({
					left: "0"
				}, 350);
				$("#expand").animate({
					opacity: "0"
				}, 350);
				setTimeout(function () {
					$("#expand").css("width", "0");
					$("#expand").css("height", "0");
				}, 350);
			});
			
			if (offLeft < -300) {
				$("body").css("left", "0");
			}
			if (offLeft >= 0) {
				$("body").css("left", "300px");
			} 
			
		$(".menu_item").mouseover(function () {
			$(this).css("background-color", "rgba(0, 0, 0, 0.15)");
		});
		$(".menu_item").mouseleave(function () {
			$(this).css("background-color", "rgba(0, 0, 0, 0)");
		});
});