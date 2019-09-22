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
					<td>ФИО</td>
					<td class="text-left">{{ $author->full_name }}</td>
				</tr>
				<!-- books -->
				<tr>
					<td>2</td>
					<td>Книги</td>
					<td class="text-left">
						<ol>
						@forelse($author->books as $book)
							<li>
								<? printf('<a href="/book/%s">%s</a>', $book->id, $book->title); ?>
							</li>
						@empty
							<span calss="text-danger">нет</span>
						@endforelse
						</ol>
					</td>
				</tr>
		    </tbody>
		</table>
	</div>
</main>