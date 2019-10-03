<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

	<!-- messages -->
  	@include('layouts.messages')
  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
	    <h1 class="h2">Информация о авторе</h1>
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
					<td>ФИО</td>
					<td class="text-left">{{ $author->full_name }}</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Дата рождения</td>
					<td class="text-left">{{ $author->date_birth ? $author->date_birth : 'не указана' }}</td>
				</tr>
				<!-- books -->
				<tr>
					<td>3</td>
					<td>Книги</td>
					<td class="text-left">
						@if ($author->books)
							<ol>
								@foreach($author->books as $book)
									<li>
										<? printf('<a href="/book/%s">%s</a>', $book->id, $book->title); ?>
									</li>
								@endforeach
							</ol>
						@else
							<span calss="text-danger">нет</span>
						@endif
					</td>
				</tr>
		    </tbody>
		</table>
	</div>
</main>