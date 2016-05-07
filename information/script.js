
$(document).ready(function(){
		var mHeight = $("#me_c").height();
		var wHeight = $("#website_c").height();
		var mState = false;
		var wState = false;
		$(".menu_item").mouseover(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0.15)");
		});
		$(".menu_item").mouseleave(function () {
			$(this).css("background-color", "rgba(255, 255, 255, 0)");
		});

		$(".click_expand").mouseover(function () {
			$(this).css("background-color", "rgba(0, 0, 0, 0.2)");
		});
		$(".click_expand").mouseleave(function () {
			$(this).css("background-color", "rgba(0, 0, 0, 0)");
		});

		$("#me_c").css("height", "0");
		$("#me_c").css("font-size", "0");
		$("#website_c").css("height", "0");
		$("#website_c").css("font-size", "0");
		$("#website_table").css("margin", "0");
		$("#me_table").css("margin", "0");
		$(".me_question").css("padding", "0");
		$(".me_answer").css("padding", "0");
		$(".website_question").css("padding", "0");
		$(".website_answer").css("padding", "0");

		$("#me").click(function() {
			if (!mState) {
				$("#me_c").animate({
					height: (mHeight + 60) + "px",
					fontSize: "1em"
				}, 350);
				$("#me_table").animate({
					margin: "20px 0 20px 5%"
				}, 350);
				$(".me_question").animate({
					padding: "5px 0 5px 0"
				}, 350);
				$(".me_answer").animate({
					padding: "5px 0 5px 0"
				}, 350);
				return mState = true;
			} if (mState) {
				$("#me_c").animate({
					height: "0",
					fontSize: "0"
				}, 350);
				$("#me_table").animate({
					margin: "0"
				}, 350);
				$(".me_question").animate({
					padding: "0"
				}, 350);
				$(".me_answer").animate({
					padding: "0"
				}, 350);
				return mState = false;
			}
		});

		$("#website").click(function() {
			if (!wState) {
				$("#website_c").animate({
					height: (wHeight + 60) + "px",
					fontSize: "1em"
				}, 350);
				$("#website_table").animate({
					margin: "20px 0 20px 5%"
				}, 350);
				$(".website_question").animate({
					padding: "5px 0 5px 0"
				}, 350);
				$(".website_answer").animate({
					padding: "5px 0 5px 0"
				}, 350);
				return wState = true;
			} if (wState) {
				$("#website_c").animate({
					height: "0",
					fontSize: "0"
				}, 350);
				$("#website_table").animate({
					margin: "0"
				}, 350);
				$(".website_question").animate({
					padding: "0"
				}, 350);
				$(".website_answer").animate({
					padding: "0"
				}, 350);
				return wState = false;
			}
		});
});
