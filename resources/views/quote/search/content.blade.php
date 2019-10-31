<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  @include('layouts.messages')
  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    <h1 class="h2">Результаты поиска</h1>
  </div>

	<table class="table table-bordered text-center">
      <thead class="bg-light">
        <tr>
          <th width="40">#</th>
          <th>Автор</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($quotes as $quote)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td class="text-left">
                <? printf('<a href="/quote/%s">%s</a>', $quote->id, $quote->text); ?>
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</main>