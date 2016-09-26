$(function() {

//variables =========================================================

	 var dropdown = $('.drop-down');
	 var fb_ic = $('#fb-img');
	 var checkbox = $('#chck');

//===================================================================

	dropdown.hover(function() {
		$('.wtr-hidden').slideDown('400');
	}, function() {
		$('.wtr-hidden').slideUp('400');
	});

//===================================================================

	var i = true;
	$('#fb-img, .#chck').on('click', function(){
		if(i){
			checkbox.attr({
				checked: 'checked'
			});
			console.log(i);
			i=false;
		}else{
			checkbox.removeAttr('checked');
			console.log(i);
			i=true;
		}
	});


})