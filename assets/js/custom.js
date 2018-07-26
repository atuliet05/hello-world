jQuery(document).ready(function(){
	jQuery('#side-menu li').click(function(e){
		// $('#side-menu li').removeClass('active');
		$('#side-menu li').addClass('active');
		$(this).children('ul').toggle(1000);
	});
});