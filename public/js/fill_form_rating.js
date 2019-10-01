$(document).ready(function() {
	$('a[href="#rating-edit"]').click(function(){
		let id_item = $(this).attr('id_item');
		let rating = $(this).text();
		$('#id_item').val(id_item);
		$('#rating').val(rating);
	});
});