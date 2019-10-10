<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

	<!-- messages -->
  	@include('layouts.messages')
  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
	    <h1 class="h2">Информация о категории</h1>
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
					<td class="text-left">{{ $cat->name }}</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Родитель</td>
					<td class="text-left">{{ $cat->parent_id ? $author->parent->name : 'нет' }}</td>
				</tr>

				<!-- category tags -->
				<tr>
					<td>3</td>
					<td>Теги</td>
					<td class="text-left">
						@if ($cat->tags)
							@foreach($cat->tags as $tag)
								<? printf('<a href="/tag/%s">%s</a>, ', $tag->id, $tag->name); ?>
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