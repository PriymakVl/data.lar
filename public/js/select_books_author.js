$(document).ready(function() {
	$('select[name="author_id"]').change(function() {
		let author_id = $(this).val();
		console.log(author_id);
	});
});