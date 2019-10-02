<ul class="nav flex-column mb-2 mt-2 border-top">
  <li class="nav-item">
    <a class="nav-link" href="/book/add">
      <span data-feather="plus-square"></span>
      Добавить книгу
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/book/edit/{{ $book->id }}">
      <span data-feather="edit"></span>
      Редактировать книгу
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/book/delete/{{ $book->id }}">
      <span data-feather="trash"></span>
      Удалить книгу
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/book/upload-file/{{ $book->id }}">
      <span data-feather="download"></span>
      Загрузить файл
    </a>
  </li>
</ul>