$(document).ready(function() {
	$('select[name="author_id"]').change(function() {
		let author_id = $(this).val();
		if (!author_id) return alert('нет автора');
		// $.ajax({
  //             type:'GET',
  //             url:'/author/books',
  //             data: {'id': author_id},
  //             success: function(data) {
  //                //$("#msg").html(data.msg);
  //                alert(data);
  //             }
  //       });
  		$.get('/author/books?id=test', function(data) {alert(data);});
	});
});