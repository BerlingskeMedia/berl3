(function($) {
	// MISC VARS - STICKY HEADER
	var bodyClass = $('body');

	// if screen width is less that 767px, we need to give the offcanvas menu a specific height in order to be able to scroll in the menu
	function menuHeight() {

		var winHeight = $(window).height();
		var isMobile = $(window).width();
		if(isMobile < 767) {
			$('.offcanvas-menu').scrollTop(0);
			$('.offcanvas-menu').css('height', winHeight );	
		}
	}

	$('.toggle-offcanvas').click(function(e){
			e.preventDefault();
			$(bodyClass).toggleClass('show-offcanvas');
			menuHeight();
	});
		
	// Newsletter fold out breaking option
	$('.newsletter-email').focus(function(){
		$(this).closest('form').find('.form-options').slideDown('fast');
	});
	
	
	// Expand embedded elements in articles
	$('.toggle-embed').click(function(){
		$(this).closest('aside').toggleClass('embed-collapsed');
	});
	$('.toggle-embed-hide').click(function(){
		var factOffsetTop = $(this).closest('aside').offset().top - 60;
		$('html, body').animate({
		    scrollTop: factOffsetTop
		 }, 1000);
	});

	// Toggle additional related articles
	$('#toggle-xtra-related').click(function(){
		$('#xtra-related').slideDown('fast');
		$(this).closest('.toggle-loadmore-fade').fadeOut('fast');
	});
	
	
	// Load disquss comments
	
	var ds_loaded = false;
	
	if($('#disqus_thread').length) {
		var top = $("#disqus_thread").offset().top;		
	}
	
	window.disqus_shortname = 'btdkbond';

	function check(){
	    if ( !ds_loaded && $(window).scrollTop() + $(window).height() > top ) {
	        $.ajax({
	            type: "GET",
	            url: "http://" + disqus_shortname + ".disqus.com/embed.js",
	            dataType: "script",
	            cache: true
	        });
	        ds_loaded = true;
	    }
	}
	$(window).scroll(check);
	check();

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

	$('.toggle-login').click(function(e){
		e.preventDefault();
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


	// soft Paywall - remove overlay ans show article

	$('.close-paywall-overlay').click(function(e){
		e.preventDefault();

		var addOverflow = function(){
			$('.article-body').css('overflow', 'visible');
			$('.article-cutoff').removeClass('article-cutoff');
		};
		$('.paywall').fadeToggle('fast');
		
		setTimeout(addOverflow, 500);
	});

	// Soft paywall on video articles. Removes the paywall in the video container

	$('.close-paywall-video-overlay').click(function(){
		$('.paywall-video').remove();
	});

	$('.toggle-trigger').click(function(e){
		e.preventDefault();
		$(this).closest('div').find('.toggle-content').toggleClass('hidden');
	});


	// Newsletter subscription box

	$('.newsletter-custom input[type="email"]').on('focus', function(){
		
		$(this).closest('.newsletter-custom').addClass('newsletters-open');
	});

	$('.show-hide-toggle').click(function(e){
		$(this).closest('.show-hide-container').toggleClass('collapsed');
	});

	$('.close-warning').click(function() {
		$(this).closest('div').remove();
	});
	

	// SLICK SLIDER

	$('.bshop-wine-slider').slick({
	   dots: false,
	   infinite: false,
	   speed: 300,
	   slidesToShow: 8,
	   slidesToScroll: 8,
	   responsive: [
	     {
	       breakpoint: 1024,
	       settings: {
	         slidesToShow: 6,
	         slidesToScroll: 6,
	         infinite: true,
	         
	       }
	     },
	     {
	       breakpoint: 600,
	       settings: {
	         slidesToShow: 4,
	         slidesToScroll: 4
	       }
	     },
	     {
	       breakpoint: 480,
	       settings: {
	         slidesToShow: 3,
	         slidesToScroll: 3
	       }
	     }
	     // You can unslick at a given breakpoint now by adding:
	     // settings: "unslick"
	     // instead of a settings object
	   ]
	 
	});

})(jQuery); 



