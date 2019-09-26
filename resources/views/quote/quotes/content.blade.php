<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    <h1 class="h2">Цитаты</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div>
  </div>

 <!-- table quotes -->
  <div class="table-responsive">
    <table class="table table-bordered">
        <!-- thead -->
        <thead class="bg-light text-center">
            <tr>
                <th width="40">#</th>
                <th>Текст</th>
                <th width="30">Рейтинг</th>
            </tr>
        </thead>
        <!-- tbody -->
        <tbody class="table-striped">
        @forelse ($quotes as $quote)
          <tr>
              <td class="text-center">{{ $loop->index + 1 }}</td>
              <td>
                  <? printf('<a href="/quote/%s">%s</a>', $quote->id, $quote->text); ?>
              </td>
              <td class="text-center">
                  <a href="#rating-edit" data-toggle="modal" id_quote="{{ $quote->id }}">{{ $quote->rating ? $quote->rating : 0 }}</a>
              </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center color-danger">Цитат еще нет</td>
          </tr>
        @endforelse
        </tbody>
    </table>
  </div>
  <br>
  {{ $quotes->links() }}
  </div>
</main>