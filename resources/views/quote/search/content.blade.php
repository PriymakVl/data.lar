<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  @include('layouts.messages')
  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    <h1 class="h2">По запросу "<span class="text-danger">{{ $search }}</span>" найдено {{ count($quotes) }} цитат</h1>
    <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="add_quotes_to_file(<?= $search; ?>);">Добавить в файл</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Добавить тег</button>
      </div>
  </div>

	<table class="table table-bordered text-center">
      <thead class="bg-light">
        <tr>
          <th width="40">#</th>
          <th>Цитаты</th>
          <th width="70">Рейтинг</th>
          <th width="90">Теги</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($quotes as $quote)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td class="text-left">
                <? printf('<a href="/quote/%s">%s</a>', $quote->id, $quote->text); ?>
              </td>
              <td>
                <a href="#" id="rating">{{ $quote->rating }}</a>
              </td>
              <td>

              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</main>
