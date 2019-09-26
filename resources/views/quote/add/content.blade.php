<?php
	use DB;
	$authors = DB::table('authors')->orderBy('last_name', 'DESK')->get();
	$books = DB::table('books')->orderBy('title', 'DESK')->get();
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">>Форма для добавления цитаты</h1>
  	</div>
    
    <form action="/quote/add" method="post">
		<!-- authors -->
        <div class="form-group">
			<label>Авторы:</label>
			<select class="form-control" name="id_author">
				<option value="0">Не выбран</option>
				@foreach ($authors as $author)
					<option value="{{ $author->id? }}">{{ $author->shortName }}</option>
				@endforeach
			</select>
        </div>

        <!-- books -->
        <div class="form-group">
			<label>Книги:</label>
			<select class="form-control" name="id_author">
				<option value="0">Не выбрана</option>
				@foreach ($books as $book)
					<option value="{{ $book->id? }}">{{ $book->title }}></option>
				@endforeach
			</select>
        </div>

		<!-- text quote -->
		<div class="form-group">
			<label>Текст цитаты:</label>
			<textarea class="form-control" rows="3" name="description"></textarea>
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