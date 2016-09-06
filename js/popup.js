$(document).ready(function(){
	console.log("JQUERY IS READY!");
	setTimeout(closePopup,0);
	$("#modal-open-button").click(function() {
		console.log('$("#modal-open-button").click');
		openPopup();
	});
	$("#modal-close-button").click(function() {
		console.log('$("#modal-close-button").click');
		closePopup();
	});
	$("#overlay-bg").click(function() {
		console.log('$("#overlay-bg").click');
		closePopup();
	});
	$(window).resize(function(){
		updatePopup();
	});
});
function openPopup(){
	$("#modal-open-button").prop("disabled", true);
	$("#popup-content").fadeIn();
	$("#overlay-bg").fadeIn();
	updatePopup();
}
function closePopup(){
	$("#modal-open-button").prop("disabled", false);
	$("#modal-open-button").fadeIn();
	$("#popup-content").fadeOut();
	$("#overlay-bg").fadeOut();
}
function updatePopup(){
	$popupContent = $("#popup-content");
	// http://api.jquery.com/height/
	// http://api.jquery.com/outerheight/
	//var top = $(window).height() / 2 - $popupContent.outerHeight() / 2; // Center vertical
	var top = "50px"; // Fixed offset
	// http://api.jquery.com/width/
	//  http://api.jquery.com/outerWidth/
	var left = ($(window).width() - $popupContent.outerWidth()) / 2; // Center horizontal
	$popupContent.css({
		'top' : top,
		'left' : left
	});
}
