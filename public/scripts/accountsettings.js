$(function(){
	var list = $("#info ul li");

	list.on('click', function() {
		list.removeClass('active-li');
		$(this).addClass('active-li');
	})
});