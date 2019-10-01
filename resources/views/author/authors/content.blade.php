<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  
  @include('layouts.messages')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2">
    <h1 class="h2">Авторы</h1>
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

  <!-- table authors -->
  <div class="table-responsive">
    <table class="table table-bordered text-center">
      <thead class="bg-light">
        <tr>
          <th width="40">#</th>
          <th>Автор</th>
          <th width="30">Книги</th>
          <th width="30">Рейтинг</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($authors as $author)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td class="text-left">
                <? printf('<a href="/author/%s">%s</a>', $author->id, $author->full_name); ?>
              </td>
              <td>{!! $author->books ? count($author->books) : '<span class="text-danger">нет</span>' !!}</td>
              <td>нет</td>
            </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center text-danger">Авторов еще нет</td>
          </tr>
        @endforelse
      </tbody>
    </table>
    <br>
    {{ $authors->links('vendor/pagination/bootstrap-4') }}
  </div>
</main>