<?php
	$authors = DB::table('authors')->orderBy('last_name')->get();
	$books = DB::table('books')->orderBy('title')->get();
	$tags = DB::table('tags')->orderBy('name')->get();
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для добавления цитаты</h1>
  	</div>
    
    <form action="/quote/add" method="post">
    	{{ csrf_field() }}
		<!-- authors -->
        <div class="form-group">
			<label>Авторы:</label>
			<select class="form-control" name="author_id">
				<option value="0">Не выбран</option>
				@foreach ($authors as $author)
					<option value="{{ $author->id }}">{{ $author->last_name }}</option>
				@endforeach
			</select>
        </div>

        <!-- books -->
        <div class="form-group">
			<label>Книги:</label>
			<select class="form-control" name="book_id">
				<option value="0">Не выбрана</option>
				@foreach ($books as $book)
					<option value="{{ $book->id }}">{{ $book->title }}</option>
				@endforeach
			</select>
        </div>

        <!-- tags -->
        <div class="form-group">
			<label>Теги:</label>
			<select class="form-control" name="tag_id">
				<option value="0">Не выбран</option>
				@foreach ($tags as $tag)
					<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				@endforeach
			</select>
        </div>

		<!-- text quote -->
		<div class="form-group">
			<label>Текст цитаты:</label>
			<textarea class="form-control" rows="3" name="text"></textarea>
		</div>

		<!-- rating quote -->
		<div class="form-group">
			<label>Рейтинг цитаты:</label>
			<input class="form-control" type="text" name="rating">
		</div>

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>

    </form>
</main>