<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

	<!-- messages -->
  	@include('layouts.messages')
  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
	    <h1 class="h2">Информация о теге</h1>
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
					<td>Название</td>
					<td class="text-left">{{ $tag->name }}</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Категория</td>
					<td class="text-left">
						@if ($tag->cat_id)
							<a href="/category/{{ $tag->category->id }}">{{ $tag->category->name }}</a>
						@else
							<span class="text-danger">не определена</span>
						@endif
					</td>
				</tr>
		    </tbody>
		</table>
	</div>
</main>