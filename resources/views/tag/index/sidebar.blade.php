<ul class="nav flex-column mb-2 mt-2 border-top">
  <li class="nav-item">
    <a class="nav-link" href="/tag/add">
      <span data-feather="plus-square"></span>
      Добавить тег
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/tag/edit/{{ $tag->id }}">
      <span data-feather="edit"></span>
      Редактировать тег
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/tag/delete/{{ $tag->id }}">
      <span data-feather="trash"></span>
      Удалить тег
    </a>
  </li>
</ul>