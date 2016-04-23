
$(document).ready(function(){

		$.mobile.loading().hide();

		var offLeft = $("#menu").offset().left;
		var swipeState = true;

		$('#hamburger').attr('draggable', false);

		$("#hamburger").click(function () {
			if (swipeState) {
				$("body").animate({
				left: "300px"
			}, 350);
			$("#expand").css("width", "120%");
			$("#expand").css("height", "120%");
			$("#expand").animate({
				opacity: "1"
			}, 350);
			$("#menu").animate({
				left: "0"
			}, 350);
			setTimeout(function() {
				return swipeState = false;
			}, 355);
			}
		});

		$("#expand").click(function () {
			if (!swipeState) {
				$("body").animate({
				left: "0"
			}, 350);
			$("#expand").animate({
				opacity: "0"
			}, 350);
			$("#menu").animate({
				left: "-300px"
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

		$("body").on('swiperight', function() {
			if (swipeState) {
				$("body").animate({
					left: "300px"
				}, 350);
				$("#expand").css("width", "120%");
				$("#expand").css("height", "120%");
				$("#expand").animate({
					opacity: "1"
				}, 350);
				$("#menu").animate({
					left: "0"
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
				$("#menu").animate({
					left: "-300px"
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
