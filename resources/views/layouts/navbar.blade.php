 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Приймак Владимир</a>

  @section('search')
  	@include('layouts.search')
  @show

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Выйти</a>
    </li>
  </ul>
</nav>

<!-- <form action="/author/search" methof="post">
  		<input class="form-control form-control-dark w-100" type="text" placeholder="Поиск автора" aria-label="Search">
	</form> -->