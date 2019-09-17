<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    <h1 class="h2">Информация о книге</h1>
  </div>

	<div class="table-responsive">
		<table class="table table-bordered text-center">
		    <!-- thead -->
		    <thead class="bg-light">
		        <tr>
		            <th width="50">№</th>
					<th width="200">Наименование</th>
					<th>Значение</th>
		        </tr>
		    </thead>
		    <!-- tbody -->
		    <tbody class="table-striped">
		        <tr>
					<td>1</td>
					<td>Наименование</td>
					<td class="text-left">{{ $book->title }}</td>
				</tr>
				<!-- category -->
				<tr>
					<td>2</td>
					<td>Категория</td>
					<td class="left"><?//=$book->category ? $book->category->name : '<span class="red">нет</span>'?></td>
				</tr>
				<!-- rating -->
				<tr>
					<td>3</td>
					<td>Рейтинг</td>
					<td class="left">{{ $book->rating ? $book->rating : '<span class="red">нет</span>' }}</td>
				</tr>
				<!-- author -->
				<tr>
					<td>4</td>
					<td>Автор</td>
					<td class="text-left"><?//=$book->author ? $book->author->surname : '<span class="text-danger">нет</span>'?></td>
				</tr>
				<!-- state book -->
				<tr>
					<td>5</td>
					<td>Состояние</td>
					<td class="left"><?//=$book->convertState()?></td>
				</tr>
				<!-- book file -->
				<tr>
					<td>6</td>
					<td>Файл</td>
					<td> 
						@if ($book->filename)
							<a href="/web/books/{{ $book->filename }}">Скачать</a>
						@else
							<span class="text-danger" >нет</span>
						@endif
					</td>
				</tr>
				<!-- book description -->
				<tr>
					<td>7</td>
					<td>Описание книги</td>
					<td class="text-left">{{ $book->description ? $book->description : '' }}</td>
				</tr>
		    </tbody>
		</table>
	</div>
</main>