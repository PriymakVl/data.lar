<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для добавления книги</h1>
  	</div>
    
    <form action="/book/file" method="post" enctype="multipart/form-data">
    	<!-- verify token -->
		{{ csrf_field() }}

		<!-- file book -->
        <div class="form-group">
			<label>Выберите файл:</label>
			<input type="file" name="book" required>
        </div>

        <!-- id book -->
        <input type="hidden" name="id" value="{{ $id }}">

        <!-- buttons -->
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Загрузить" name="save">
            <input type="button"class="btn btn-primary"onclick="history.back();" value="Отменить">
        </div>

    </form>
</main>
