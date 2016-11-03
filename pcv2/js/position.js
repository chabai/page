$(function() {
	$(window).load(function() {
		var imglen = $(".box img").height();
		$('#main .box').height(imglen);

		var Y = $('.sns').offset().left;
		$('.WeChat').css('left', Y);

		var popupLeft = ($('.header').width() - 936) / (2 * $('.header').width()) * 100 + "%";

		$("#popup").css("left", popupLeft);
	});
});
$(window).resize(function(event) {
	/* Act on the event */
	var imglen = $(".box img").height();
	$('#main .box').height(imglen);

	var Y = $('.sns').offset().left;
	$('.WeChat').css('left', Y);

	var popupLeft = ($('.header').width() - 936) / (2 * $('.header').width()) * 100 + "%";

	$("#popup").css("left", popupLeft);
});