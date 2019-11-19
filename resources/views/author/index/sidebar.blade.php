<ul class="nav flex-column mb-2 mt-2 border-top">
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
  <li class="nav-item">
    <a class="nav-link" href="/book/add/{{ $author->id }}">
      <span data-feather="plus-square"></span>
      Добавить книгу
    </a>
  </li>
</ul>