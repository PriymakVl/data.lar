<?php
	// $controller = request()->segment(1);
	// if ($controller == 'quote' || $controller == 'quotes') {
	// 	$placeholder = 'Поиск цитаты';
	// 	$controller = 'quote';
	// }
	// else if ($controller == 'author' || $controller == 'authors') {
	// 		$placeholder = 'Поиск автора';
	// 		$controller = 'author';
	// }
	// else if ($controller == 'book' || $controller == 'books') {
	// 	$placeholder = 'Поиск автора';
	// 	$controller = 'book';
	// }
	$controller = 'quote';
	$placeholder = 'Поиск цитаты';
?>

<form action="/{{ $controller }}/search" method="get" class="form-inline w-400">
	<input class="form-control form-control-dark mx-2" type="text" name="search" placeholder="{{ $placeholder }}" aria-label="Search">
	<button type="submit" class="btn btn-outline-success">Submit</button>
</form>