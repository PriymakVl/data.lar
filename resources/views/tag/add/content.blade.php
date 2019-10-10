<?php
    use App\Category;

    $cats = Category::orderBy('name')->get();
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    	<h1 class="h2">Форма для добавления тега</h1>
  	</div>
    
    <form action="/tag/add" method="post">

    	{{ csrf_field() }}

        <!-- categories -->
        <div class="form-group">
            <label>Категории:</label>
            <select class="form-control" name="cat_id">
                <option value="0">не выбрана</option>
                @foreach ($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

		<!-- name tag -->
		<div class="form-group">
			<label>Название тега:</label>
			<input type="text" class="form-control" name="name">
		</div>
		
        <!-- buttons -->
        <div class="button-group">
            <input type="submit" class="btn btn-success" value="Сохранить" name="save">
            <input type="button" class="btn btn-info" onclick="history.back();" value="Отменить">
        </div>
    </form>
</main>