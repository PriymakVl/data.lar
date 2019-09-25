<?php
	
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
					<option value="{{ $author->id? }}">{{ $author->shortName }}></option>
				@endforeach
			</select>
        </div>

        <!-- books -->
        <div class="form-group">
			<label>Книги:</label>
			<select class="form-control" name="id_author">
				<option value="0">Не выбрана</option>
				<? foreach ($books as $author): ?>
					<option value="{{ $author->id? }}">{{ $author->shortName }}></option>
				<? endforeach; ?>
			</select>
        </div>

		<!-- description book -->
		<div class="form-group">
			<label>Описание книги:</label>
			<textarea class="form-control" rows="3" name="description"></textarea>
		</div>
		<!-- state book -->
		<div class="form-group">
			<label>Состояние:</label>
			<select class="form-control" name="state">
				<? foreach ($states as $state): ?>
					<option value="<?=$state?>">
						<?=(new Book)->convertState($state)?>
					</option>
				<? endforeach; ?>
			</select>
		</div>
		<!-- rating book -->
		<div class="form-group">
			<label>Рейтинг книги:</label>
			<input class="form-control" type="text" name="rating">
		</div>
		<!-- category -->
        <div class="form-group">
			<label>Категория:</label>
			<select name="id_cat" class="form-control">
				<option value="">Не выбрана</option>
				<? foreach ($cats as $cat): ?>
					<option value="<?=$cat->id?>"><?=$cat->name?></option>
				<? endforeach; ?>
			</select>
        </div>

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>

    </form>
</main>