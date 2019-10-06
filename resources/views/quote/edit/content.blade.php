<?php
	$authors = DB::table('authors')->orderBy('last_name')->get();
	$books = DB::table('books')->orderBy('title')->get();
	$author_id = $quote->author ? $quote->author->id : null;
	$book_id = $quote->book ? $quote->book->id : null;
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для редактирования цитаты</h1>
  	</div>
    
    <form action="/quote/edit" method="post">
    	{{ csrf_field() }}

		<!-- authors -->
        <div class="form-group">
			<label>Авторы:</label>
			<select class="form-control" name="author_id">
				<option value="0">Не выбран</option>
				@foreach ($authors as $author)
					<option value="{{ $author->id }}" <?= ($author->id == $author_id) ? 'selected' : '' ?>>{{ $author->last_name }}</option>
				@endforeach
			</select>
        </div>

        <!-- books -->
        <div class="form-group">
			<label>Книги:</label>
			<select class="form-control" name="book_id">
				<option value="0">Не выбрана</option>
				@foreach ($books as $book)
					<option value="{{ $book->id }}"  <?= ($book->id == $book_id) ? 'selected' : '' ?>>{{ $book->title }}</option>
				@endforeach
			</select>
        </div>

		<!-- text quote -->
		<div class="form-group">
			<label>Текст цитаты:</label>
			<textarea class="form-control" rows="3" name="text">{{ $quote->text }}</textarea>
		</div>

		<!-- rating quote -->
		<div class="form-group">
			<label>Рейтинг цитаты:</label>
			<input class="form-control" type="text" name="rating" value="{{ $quote->rating }}">
		</div>

		<!-- id quote -->
		<input type="hidden" name="id" value="{{ $quote->id }}">

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>

    </form>
</main>