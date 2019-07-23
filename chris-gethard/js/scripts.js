jQuery( document ).ready(function($) {
	
!function(f){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=f();else if("function"==typeof define&&define.amd)define([],f);else{("undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this).iosInnerHeight=f()}}(function(){return function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){return o(e[i][1][r]||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}({1:[function(require,module,exports){"use strict";module.exports=function(){if(!navigator.userAgent.match(/iphone|ipod|ipad/i))return function(){return window.innerHeight};var ruler,axis=Math.abs(window.orientation),dims={w:0,h:0};return(ruler=document.createElement("div")).style.position="fixed",ruler.style.height="100vh",ruler.style.width=0,ruler.style.top=0,document.documentElement.appendChild(ruler),dims.w=90===axis?ruler.offsetHeight:window.innerWidth,dims.h=90===axis?window.innerWidth:ruler.offsetHeight,document.documentElement.removeChild(ruler),ruler=null,function(){return 90!==Math.abs(window.orientation)?dims.h:dims.w}}()},{}]},{},[1])(1)});
	
$(document).ready(function() {
  function setHeight() {
    windowHeight = iosInnerHeight();
    $('.main-navigation, .menu-main-navigation-container').css('min-height', windowHeight);
  };
  setHeight();
  
  $(window).resize(function() {
    setHeight();
  });
});
	
// Loading Masks and content fadeIn
	$('#back-page-load-mask').delay(800).fadeOut(300);
	
	$('#page').fadeIn();
	
// Navigation Menu
	$('#open-button').on('click', function() {		
		$( 'body' ).css( 'overflow', 'hidden');
		$( 'body' ).css( 'position', 'fixed');

		$('#hamburger-menu-wrapper').addClass('animate');
		$('.main-navigation').addClass('animate');
		$('#open-sweep-wrap').addClass('animate');
		$('ul#primary-menu').fadeIn(1);
		
		setTimeout(function () { window.scrollTo(0, 1); }, 1000);

		
   		setTimeout(function(){
			$('ul#primary-menu').addClass('animate');
   		}, 800);
   		
   	})
   	
   	$('ul.sub-menu a, .live-shows-links').on('click', function() {
	   $( 'body' ).css( 'overflow', 'auto');
	   $( 'body' ).css( 'position', 'static');
	   $('.main-navigation').removeClass('animate');
	   $('#open-sweep-wrap').fadeOut(300);
	   	
	   $('ul#primary-menu').fadeOut(200);
	   
	   	$('#hamburger-menu-wrapper').removeClass('animate');
		$('ul#primary-menu').fadeOut(200);
	   
	   
	   	
	   	setTimeout(function(){
   			$('#open-sweep-wrap').removeClass('animate');
   		}, 400);
	   	setTimeout(function(){
	   		$('#open-sweep-wrap').fadeIn(1);
   		}, 710);
   		
   		setTimeout(function(){
			$('ul#primary-menu').removeClass('animate');;
// 	   		$('ul#primary-menu').fadeIn(1);
   		}, 410);
	})
	
	$('#close-button').on('click', function() {
		$('#hamburger-menu-wrapper').removeClass('animate');
		$('#close-sweep-wrap').addClass('animate');
		
		
	    setTimeout(function(){
		    $('#open-sweep-wrap').removeClass('animate');
		    $('.main-navigation').removeClass('animate');
	   		$('ul#primary-menu').removeClass('animate');
   		}, 400);
   				
   		setTimeout(function(){
			$('#close-sweep-wrap').addClass('fadeout');
   		}, 1000);
   		
/*
      	setTimeout(function(){
	   		$('.main-navigation').removeClass('animate');
	   		$('ul#primary-menu').removeClass('animate');
   		}, 810);
*/
   		
   		setTimeout(function(){
			$('#close-sweep-wrap').removeClass('animate');
			$( 'body' ).css( 'overflow', 'auto');
			$( 'body' ).css( 'position', 'static');
	   		$('.main-navigation').removeClass('animate');
	   		$('ul#primary-menu').removeClass('animate');
   		}, 1200);
   		

   		
   		setTimeout(function(){
	   		$('#close-sweep-wrap').removeClass('fadeout');
   		}, 1500);
		
	})	

$( "li.menu-item-has-children a" ).hover(
	function() {
		$(this).siblings().children().find('a').addClass('show-sub')},
	function() {
		$(this).siblings().children().find('a').removeClass('show-sub')}
)
	
// Submenu Sibling Hover
$( "ul.sub-menu li a" ).hover(
	function() {
	    $(this).addClass('show-sub');
    	$(this).parent().siblings().children().addClass('show-sub')}, 	function(){
	    $(this).removeClass('show-sub');
    	$(this).parent().siblings().children().removeClass('show-sub')} 
)	

	
// Back To Top
// Back to top fade on scroll	
  	$(window).scroll(function(){                          
        if ($(this).scrollTop() > 1000) {
            $('#btt-button-wrap').fadeIn(300);
        } else {
            $('#btt-button-wrap').fadeOut(300);
        }
    });
    
    var $all_oembed_videos = $(".video-wrap > iframe[src*='youtube'], .video-wrap > iframe[src*='vimeo']");
	$all_oembed_videos.each(function() {
		$(this).removeAttr('height').removeAttr('width');
 	});
	
	
    console.log( "scripts ready!" );
});