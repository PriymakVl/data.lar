<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для добавления автора</h1>
  	</div>
    
    <form action="/author/add" method="post">
    	{{ csrf_field() }}
        <!-- author --> 
        <div class="form-group">
			<label>Имя:</label>
			<input type="text" class="form-control" name="first_name">
			<label>Фамилия:</label>
			<input type="text" class="form-control" name="last_name">
			<label>Отчество:</label>
			<input type="text" class="form-control" name="middle_name">
		</div>
		<!-- date -->
		<div class="form-group">
			<label>Дата рождения:</label>
			<input type="text" class="datepicker form-control" name="date_birth">
		</div>
        <!-- buttons -->
        <div class="button-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button" class="btn btn-info" onclick="history.back();" value="Отменить">
        </div>
    </form>
</main>