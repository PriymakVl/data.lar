$(document).ready(function() {
	alert();
	$('a[href="#rating-edit"]').click(function(){
		var id_item = $(this).attr('id_item');
		let rating = $(this).text();
		console.log(id_item, rating);
		$('input[name="id_item"]').val(id_item);
		$('input[name="rating"]').val(rating);
	});
});