(function($) {
	$('.demo-trigger').click(function(e){
		e.preventDefault();
		$('#hidden-menu').toggleClass('show-hidden-menu');
	});

	$('.btn-demo-bshop').click(function(){
		var designClass = $(this).data('class');
		var designElement = $(this).data('element');
		console.log(designClass, designElement);
		$('#' + designElement).removeClass();
		$('#' + designElement).addClass(designClass);
	});
	

})(jQuery); 



