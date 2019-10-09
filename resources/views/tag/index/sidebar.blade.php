<ul class="nav flex-column mb-2 mt-2 border-top">
  <li class="nav-item">
    <a class="nav-link" href="/category/add">
      <span data-feather="plus-square"></span>
      Добавить категорию
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/category/edit/{{ $cat->id }}">
      <span data-feather="edit"></span>
      Редактировать категорию
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/category/delete/{{ $cat->id }}">
      <span data-feather="trash"></span>
      Удалить категорию
    </a>
  </li>
</ul>