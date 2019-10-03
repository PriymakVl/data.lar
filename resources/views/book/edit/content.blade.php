<?php
	use App\Author;
	use App\Book;

	$authors = Author::orderBy('last_name')->get();
	$statuses = [Book::STATUS_NOT_READ, Book::STATUS_SPEED_READ, Book::STATUS_READ, Book::STATUS_AUDIO, Book::STATUS_OUTLINED];
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для редактирования книги</h1>
  	</div>
    
    <form action="/book/edit" method="post">

		<!-- authors -->
        <div class="form-group">
			<label>Авторы:</label>
			<select class="form-control" name="id_author">
				<option value="0">не выбран</option>
				@foreach ($authors as $author)
					<option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>
						{{ $author->last_name }}
					</option>
				@endforeach
			</select>
        </div>

		<!-- title book -->
        <div class="form-group">
			<label>Название:</label>
			<input class="form-control" type="text" name="title" value="{{ $book->title }}" required>
        </div>

		<!-- description book -->
		<div class="form-group">
			<label>Описание книги:</label>
			<textarea class="form-control" rows="3" name="description">{{ $book->description }}</textarea>
		</div>

		<!-- status book -->
		<div class="form-group">
			<label>Состояние:</label>
			<select class="form-control" name="status">
				@foreach ($statuses as $status)
					<option value="{{ $status }}" {{ $status == $book->status ? 'selected' : '' }}>
						{{ Book::convertStatus($status) }}
					</option>
				@endforeach
			</select>
		</div>

		<!-- rating book -->
		<div class="form-group">
			<label>Рейтинг книги:</label>
			<input class="form-control" type="text" name="rating">
		</div>

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>

    </form>
</main>