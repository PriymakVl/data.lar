<h6 class="sidebar-heading text-center mt-3 mb-0 text-muted">
    Меню книги
</h6>

<ul class="nav flex-column mb-2">
  <li class="nav-item">
    <a class="nav-link" href="/author/add">
      <span data-feather="plus-square"></span>
      Добавить автора
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/author/edit/{{ $author->id }}">
      <span data-feather="edit"></span>
      Редактировать автора
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/author/delete/{{ $author->id }}">
      <span data-feather="trash"></span>
      Удалить автора
    </a>
  </li>
</ul>