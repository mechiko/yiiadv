
$(function() {
	$('#nav-wrapper').height($("#nav").height());

	$('#nav').affix({
		offset: $('#nav').position()
	});
	$('#sidebar-wrapper').height($("#sidebar").height());

	$('#sidebar').affix({
		offset: { top: $('#sidebar').offset().top }
	});


	$('.dropdown-toggle').dropdown();
});
