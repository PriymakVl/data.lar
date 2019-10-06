<ul class="nav flex-column mt-2 mb-2 border-top">
  <li class="nav-item">
    <a class="nav-link" href="/quote/add">
      <span data-feather="plus-square"></span>
      Добавить цитату 
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/quote/edit/{{ $quote->id }}">
      <span data-feather="edit"></span>
      Редактировать цитату
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/quote/delete/{{ $quote->id }}">
      <span data-feather="trash"></span>
      Удалить цитату
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/quote/file">
      <span data-feather="download"></span>
      Загрузить файл с цитатами
    </a>
  </li>
</ul>