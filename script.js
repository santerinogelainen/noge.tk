$(document).ready(function(){
	$(".link").mouseenter(function(){
		$(this).css("background-color", "#0d0d0d");
	});
	$(".link").mouseleave(function(){
		$(this).css("background-color", "inherit");
	});
});