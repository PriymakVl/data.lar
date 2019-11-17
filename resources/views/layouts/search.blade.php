<?php
	$controller = request()->route()->getAction()['as'];
	
	if ($controller == 'author' || $controller == 'authors' || $controller == 'author_edit' || $controller == 'athor_search') {
			$placeholder = 'Поиск автора';
			$controller = 'author';
	}
	else if ($controller == 'book' || $controller == 'books'|| $controller == 'book_edit' || $controller == 'book_search') {
		$placeholder = 'Поиск книги';
		$controller = 'book';
	}
	else {
		$controller = 'quote';
		$placeholder = 'Поиск цитаты';
	}

?>

<form action="/{{ $controller }}/search" method="get" class="form-inline">
	<input width="300" class="form-control form-control-dark mx-2" type="text" name="search" placeholder="{{ $placeholder }}" aria-label="Search">
	<button type="submit" class="btn btn-outline-success">Поиск</button>
</form>