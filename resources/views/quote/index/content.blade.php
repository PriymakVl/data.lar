<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <!-- messages -->
  @include('layouts.messages')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    <h1 class="h2">Информация о цитате</h1>
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
					<td>Текст</td>
					<td class="text-left">{{ $quote->text }}</td>
				</tr>
				<!-- tags -->
				<tr>
					<td>2</td>
					<td>Теги</td>
					<td class="text-left">
						<span>нет</span>
					</td>
				</tr>
				<!-- rating -->
				<tr>
					<td>3</td>
					<td>Рейтинг</td>
					<td class="text-left">{{ $quote->rating ? $quote->rating : 0 }}</td>
				</tr>
				<!-- author -->
				<tr>
					<td>4</td>
					<td>Автор</td>
					<td class="text-left">
						@if($quote->author_id)
							<a href="/author/{{ $quote->author->id }}">{{ $quote->author->full_name }}</a>
						@else
							<span>нет</span>
						@endif	
					</td>
				</tr>
				<!-- book -->
				<tr>
					<td>5</td>
					<td>Источник</td>
					<td class="text-left">
						@if ($quote->book)
							<a href="/book/{{ $quote->book->id }}">{{ $quote->book->title }}</a>
						@else
							<span>нет</span>
						@endif
					</td>
				</tr>
		    </tbody>
		</table>
	</div>
</main>