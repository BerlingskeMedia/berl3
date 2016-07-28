(function($) {
	// MISC VARS - STICKY HEADER
	var bodyClass = $('body');
	var sticky_navigation_offset_top = 0;

	function menuHeight() {
		var showMenu = $('.show-offcanvas');
		var menuHeight = $('.offcanvas-menu').height();
		var winHeight = $(window).height();

		console.log((menuHeight + $('.sticky-inner > .container').height() > winHeight) && showMenu.length);

		if (menuHeight + $('.sticky-inner > .container').height() > winHeight && showMenu.length) {
			$('.offcanvas-menu').css('height', winHeight + 40);
		} else {
		 	$('.offcanvas-menu').css('height', 'auto');
		}
	}

	// $( window ).resize(function() {
	// 	menuHeight();
	// });

	$('.toggle-offcanvas').click(function(e){
			e.preventDefault();
			//$('.offcanvas-menu').toggle();
			// $('.canvas-main').toggle();
			$(bodyClass).toggleClass('show-offcanvas');
			menuHeight();
	});
		
	// Newsletter fold out breaking option
	$('.newsletter-email').focus(function(){
		$(this).closest('form').find('.form-options').slideDown('fast');
	});
	
	
	// Expand embedded elements in articles
	$('.toggle-embed').click(function(){
		$(this).closest('aside').removeClass('embed-collapsed-sm');
		$(this).closest('aside').removeClass('embed-collapsed');
	});

	// Toggle additional related articles
	$('#toggle-xtra-related').click(function(){
		$('#xtra-related').slideDown('fast');
		$(this).closest('.toggle-loadmore-fade').fadeOut('fast');
	});
	
	
	// Sticky example 2
	// $('.stickem-container-ex2').stickem({
	// 	offset: '60',
	// 	item: '.sticky-ex2',
	// 	stickClass: 'stickit-ex2',
	// 	container: '.stickem-container-ex2'
	// });


	
	// Load disquss comments
	
	var ds_loaded = false;
	
	if($('#disqus_thread').length) {
		var top = $("#disqus_thread").offset().top;		
	}
	
	window.disqus_shortname = 'btdkbond';

	// function check(){
	//     if ( !ds_loaded && $(window).scrollTop() + $(window).height() > top ) {
	//         $.ajax({
	//             type: "GET",
	//             url: "http://" + disqus_shortname + ".disqus.com/embed.js",
	//             dataType: "script",
	//             cache: true
	//         });
	//         ds_loaded = true;
	//     }
	// }
	// $(window).scroll(check);
	// check();

	$('.list-tabs').on('click', 'a:not(.active)', function(e){
		var activeTab = $(this).data('menuid');
		$('.list-tabs li').removeClass('active');
		$(this).closest('li').addClass('active');
		$('.tab').removeClass('active');
		$('#'+activeTab).addClass('active');
	});
	
	$('.toggle-oneliner').click(function(){
		$(this).closest('div').toggleClass('remove-oneliner');
	});


	$('#embedded-marketing').iframeAutoHeight({debug: true});
	// $('iframe.auto-height').iframeAutoHeight({minHeight: 240});

	// $("#embedded-marketing").height($("#embedded-marketing").contents().find("html").height());

	// $('[data-toggle="popover"]').popover();

	// Toggle submenu on mobile 
	$('.toggle-submenu').click(function(e){
		e.preventDefault();
		$(this).closest('ul').toggleClass('show-submenu');
	});

	// Toggle user menu when user is logged in
	$('.toggle-user-menu').click(function(e){
		e.preventDefault();
		$(this).closest('li').toggleClass('show-usermenu');
	});

	
	

	

	// Slide in the password-reminder form in the login form
	$('.toggle-forgot-password').click(function(e){
		e.preventDefault();
		$(this).closest('.overlay-inner').toggleClass('switch-overlay');
	});	


	// Remove the follow author overlay
	$('.overlay-author-signup .close-overlay, .overlay-author-signup > a').click(function(e){
		e.preventDefault();
		$('body').removeClass('show-author-overlay');
	});

	$('.toggle-search, .close-search').click(function(e){
		// make sure to unfocus the form - otherwise it looks weird on mobile
		if($('body').hasClass('show-search')) {
			$('#site-search').blur();	
		} else {
			$('#site-search').focus();
		}
		e.preventDefault();
		$('body').toggleClass('show-search');
	});

	// Show author signup overlay

	$('.btn-follow-author').click(function(){
		var overlay = $('.overlay-author-signup');
		var overlayForm = $(overlay).find('.input-follow-author');

		// Focus the input field. Only works with setTimeout when transition is used 
		var focusAuthor = function(){
			$(overlayForm).focus();
		};
		
		$(overlay).toggleClass('show-me');
		setTimeout(focusAuthor, 500);
		
	});


	

	// Show login overlay

	$('.toggle-login').click(function(){
		$('#site-login').toggleClass('show-me');
		setTimeout(function() {
       		$('#site-login .overlay-inner').removeClass("switch-overlay");
		}, 800);
		
	});

	// Show send to a friend overlay

	$('.toggle-sendtoafriend').click(function(e){
		e.preventDefault();
		$('#overlay-sendtoafriend').toggleClass('show-me');
		$('body').toggleClass('show-overlay');
		if($('#overlay-sendtoafriend').hasClass('show-me')) {
			$('#email-sendtoafriend').blur();	
		} else {
			$('#email-sendtoafriend').focus();
		}

		
	});

	// Global overlay remover

	$('.close-overlay, .remove-overlay').click(function(e){
		e.preventDefault();
		$(this).closest('.overlay').removeClass('show-me');
	});

	// scroll to top - used in footer

	$('.top-link').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
	});


	

})(jQuery); 



