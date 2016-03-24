(function($) {
	// MISC VARS - STICKY HEADER ON SCROLL
	var bodyClass = $('body');
	var sticky_navigation_offset_top = 0;

	$('.toggle-offcanvas').click(function(e){
		e.preventDefault();
		$(bodyClass).toggleClass('show-offcanvas');
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


	

})(jQuery); 



