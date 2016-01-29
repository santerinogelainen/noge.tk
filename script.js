$(document).ready(function(){
	$(".link").mouseenter(function(){
		$(this).css("background-color", "black");
	});
	$(".link").mouseleave(function(){
		$(this).css("background-color", "inherit");
	});
});