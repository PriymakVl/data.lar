<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для добавления категории</h1>
  	</div>
    
    <form action="/category/edit" method="post">

    	{{ csrf_field() }}

		<!-- name category -->
		<div class="form-group">
			<label>Название категории:</label>
			<input type="text" class="form-control" name="name" value="{{ $cat->name }}">
		</div>

        <!-- id category -->
        <input type="hidden" name="id" value="{{ $cat->id }}">
		
        <!-- buttons -->
        <div class="button-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button" class="btn btn-info" onclick="history.back();" value="Отменить">
        </div>
    </form>
</main>