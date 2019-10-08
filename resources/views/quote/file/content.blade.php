<?php
	$authors = DB::table('authors')->orderBy('last_name')->get();
	$books = DB::table('books')->orderBy('title')->get();
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для добавления файла с цитатами</h1>
  	</div>
    
    <form action="/quote/file" method="post" enctype="multipart/form-data">
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

		<!-- file book -->
        <div class="form-group">
			<label>Выберите файл:</label>
			<input type="file" name="quotes" required>
        </div>

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>

    </form>
</main>