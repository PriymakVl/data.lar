<?php
	$controller = request()->route()->getAction()['as'];
	$placeholder = '';
	
	if ($controller == 'quote' || $controller == 'quotes'|| $controller == 'quote_edit') {
		$placeholder = 'Поиск цитаты';
		$controller = 'quote';
	}
	else if ($controller == 'author' || $controller == 'authors' || $controller == 'author_edit') {
			$placeholder = 'Поиск автора';
			$controller = 'author';
	}
	else if ($controller == 'book' || $controller == 'books'|| $controller == 'book_edit') {
		$placeholder = 'Поиск книги';
		$controller = 'book';
	}
?>

<form action="/{{ $controller }}/search" method="get" class="form-inline">
	<input width="300" class="form-control form-control-dark mx-2" type="text" name="search" placeholder="{{ $placeholder }}" aria-label="Search">
	<button type="submit" class="btn btn-outline-success">Поиск</button>
</form>