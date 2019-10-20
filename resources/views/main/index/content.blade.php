<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    <h1 class="h2">Статистика</h1>
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

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Наименование</th>
          <th>Количество</th>
        </tr>
      </thead>
      <tbody>
        <!-- quotes -->
        <tr>
          <td>1</td>
          <td>Количество цитат</td>
          <td>{{ $qty['quotes'] }}</td>
        </tr>
        <!-- books -->
        <tr>
          <td>2</td>
          <td>Количество книг</td>
          <td>{{ $qty['books'] }}</td>
        </tr>
        <!-- authors -->
        <tr>
          <td>3</td>
          <td>Количество авторов</td>
          <td>{{ $qty['authors'] }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</main>