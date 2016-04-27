// function used to load Disqus comments
function isScrolledIntoView(elem) {
	var docViewTop = $(window).scrollTop();
	var docViewBottom = docViewTop + $(window).height();

	var elemTop = $(elem).offset().top;
	var elemBottom = elemTop + $(elem).height();

	return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

(function($) {
	// MISC VARS - STICKY HEADER ON SCROLL
	var bodyClass = $('body');
	var sticky_navigation_offset_top = 0;

	$('.toggle-offcanvas').click(function(e){
		e.preventDefault();
		$(bodyClass).toggleClass('show-offcanvas');
	});
		
	
	// Expand embedded elements in articles
	$('.toggle-embed').click(function(){
		$(this).closest('aside').removeClass('embed-collapsed-sm');
		$(this).closest('aside').removeClass('embed-collapsed');
	});


	// Expand list of related articles + show number of related articles 
	var relatedCounter = $('.list-show-first-two li').length - 2;
	// Show # of related articles in button
	if (relatedCounter) {
		$('#related-counter span').prepend('Vis alle (+' + relatedCounter + ') ');
		$('#related-counter').click(function(e){
			e.preventDefault();
			$('.list-article-related').removeClass('list-show-first-two');
		});
	}
	
	// Make sticky side cols
	$('.stickem-container').stickem({
		offset: '70',
		item: '.sticky'

	});
	// Sticky example 2
	$('.stickem-container-ex2').stickem({
		offset: '60',
		item: '.sticky-ex2',
		stickClass: 'stickit-ex2',
		container: '.stickem-container-ex2'
	});

	$('#disqus_thread:not(.loaded)').each(function () {
		if (isScrolledIntoView(this) === true) {
			var disqus_shortname = 'btdkbond'; 
			$.ajax({
			type: "GET",
			url: "http://" + disqus_shortname + ".disqus.com/embed.js",
			dataType: "script",
			cache: true
		});
		$(this).addClass('loaded'); // add class to prevent function from running again
		}
	});


	var sticky_navigation = function()  {
		var scroll_top = $(window).scrollTop(); 
		
		// sticky_navigation_offset_top = $('.header-middle').offset().top;	
		sticky_navigation_offset_top = 40;	

		if (scroll_top > sticky_navigation_offset_top &&  $(window).width() > 992) {
			$(bodyClass).addClass('fixed-header');
		} else {
			$(bodyClass).removeClass('fixed-header');
		}
	};

	sticky_navigation();
		
	$(window).on('resize scroll', function() {
		sticky_navigation();
	}).resize();	

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


	$('.social-toggle').click(function(e) {
		e.preventDefault();
		$(this).closest('.share-buttons').toggleClass('collapsed');
	});

	$('.demo-trigger').click(function(e){
		e.preventDefault();
		$('#hidden-menu').toggleClass('show-hidden-menu');
	});

})(jQuery); 



