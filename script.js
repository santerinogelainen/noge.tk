
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
		
			
			var offLeft = $("#menu").offset().left;
			var swipeState = true;
			
				$("body").on('swiperight', function() {
					if (swipeState) {
						$("body").animate({
							left: "300px"
						}, 350);
						$("#expand").css("width", "100%");
						$("#expand").css("height", "100%");
						$("#expand").animate({
							opacity: "1"
						}, 350);
						setTimeout(function() {
							return swipeState = false;
						}, 355);
					}
				});
				
				$("body").on('swipeleft', function() {
					if (!swipeState) {
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
						setTimeout(function() {
							return swipeState = true;
						}, 355);
					}
				
			});
			
			
			if (offLeft < -300) {
				$("body").css("left", "0");
			}
			if (offLeft >= 0) {
				$("body").css("left", "300px");
			} 
			
		$(".menu_item").mouseover(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0.15)");
		});
		$(".menu_item").mouseleave(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0)");
		});
});