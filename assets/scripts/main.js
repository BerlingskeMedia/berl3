(function($) {

	

		$('.help-trigger').click(function(e){
		e.preventDefault();
		$(this).closest('.form-help').find('span').toggleClass('hidden');
	});

})(jQuery); 

