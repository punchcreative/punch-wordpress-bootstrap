// JavaScript Document

jQuery( document ).ready( function( $ ) {
	var body = document.body,
	doc = document.documentElement;
	$(window).scroll(function () {
		body.style.backgroundPosition = "center " + ( 0 -(Math.max(doc.scrollTop, body.scrollTop) / 2) ) + "px";
	});
});
