<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  
  @include('layouts.messages')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2">
    <h1 class="h2">Теги</h1>
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
  </divtags

  <!-- table authors -->
  <div class="table-responsive">
    <table class="table table-bordered text-center">
      <thead class="bg-light">
        <tr>
          <th width="40">#</th>
          <th>Название</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($tags as $tag)
            <tr>
              <td>{{ $loop->index + 1 }}</td>
              <td class="text-left">
                <? printf('<a href="/category/%s">%s</a>', $tag->id, $tag->name); ?>
              </td>
            </tr>
        @empty
          <tr>
            <td colspan="2" class="text-center text-danger">Категорий еще нет</td>
          </tr>
        @endforelse
      </tbody>
    </table>
    <br>
    {{ $tags->links('vendor/pagination/bootstrap-4') }}
  </div>
</main>