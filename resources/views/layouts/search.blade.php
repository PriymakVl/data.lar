<?php
	// $controller = 
?>

<form action="/author/search" methof="post" class="form-inline w-100">
	{{ csrf_field() }}
	<input class="form-control form-control-dark mx-2" type="text" name="name" placeholder="Поиск автора" aria-label="Search">
	<button type="submit" class="btn btn-outline-success">Submit</button>
</form>