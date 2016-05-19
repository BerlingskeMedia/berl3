(function($) {
	// MISC VARS - STICKY HEADER ON SCROLL
	var bodyClass = $('body');
	var sticky_navigation_offset_top = 0;

	$('.toggle-offcanvas').click(function(e){
		e.preventDefault();
		$(bodyClass).toggleClass('show-offcanvas');
	});
		
	// Newsletter fold out breaking option
	$('.newsletter-email').focus(function(){
		$(this).closest('form').find('.hidden').slideDown('fast');
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
	$('.stickem-container-ex2').stickem({
		offset: '60',
		item: '.sticky-ex2',
		stickClass: 'stickit-ex2',
		container: '.stickem-container-ex2'
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

	
	

	// Show the author signup overlay

	$('.btn-follow-author').click(function(){
		// Focus the input field. Only wotks with setTimeout when transition is used aparently
		var focusAuthor = function(){
			$('.input-follow-author').focus();
		};
		
		$('body').toggleClass('show-author-overlay');
		setTimeout(focusAuthor, 500);
	});

		


	// Remove the follow author overlay
	$('.overlay-author-signup .close-overlay, .overlay-author-signup > a').click(function(e){
		e.preventDefault();
		$('body').removeClass('show-author-overlay');
	});


})(jQuery); 



