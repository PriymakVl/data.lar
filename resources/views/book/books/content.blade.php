<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    <h1 class="h2">Книги</h1>
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

  <!-- table books -->
  <div class="table-responsive">
    <table class="table table-bordered text-center">
      <thead class="bg-light">
        <tr>
          <th width="40">#</th>
          <th>Название</th>
          <th width="250">Автор</th>
          <th width="120">Состояние</th>
          <th width="30">Рейтинг</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($books as $book)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td class="text-left">
                <? printf('<a href="/book/%s">%s</a>', $book->id, $book->title); ?>
              </td>
              <td>{{ $book->id_author }}</td>
              <td>{{ $book->status }}</td>
              <td>
                <a href="#rating-edit" data-toggle="modal" id_quote=" {{ $book->id }}"> {{ $book->rating }}</a>
              </td>
            </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center color-danger">Книг еще нет</td>
          </tr>
        @endforelse
      </tbody>
    </table>
    <br>
    {{ $books->links() }}
  </div>
</main>