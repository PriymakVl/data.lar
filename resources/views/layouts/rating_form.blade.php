<?
  $path = request()->path();
  if (strrpos($path, 'book') !== false) $path = 'book';
  else if (strrpos($path, 'author') !== false) $path = 'author';
  else if (strrpos($path, 'quote') !== false) $path = 'quote';
  $class_name = ucfirst($path);
?>

<div class="modal fade" id="rating-edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    
   <form action="/{{ $path }}/edit_rating?>">
      <!-- Modal body -->
      <div class="modal-body">
         <div class="form-group">
            <label for="rating">Рейтинг:</label>
            <!-- rating -->
            <input type="number" class="form-control input-sm" id="rating" name="rating" value="">
            <!-- id item -->
            <input type="hidden" name="id_item" value="">
            <!-- class item -->
            <input type="hidden" name="class_item" value="{{ $class_name }}">
         </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Изменить">
      </div>
   </form>
      

    </div>
  </div>
</div>

<!-- js file -->
<script type="text/javascript" src="/js/fill_form_rating.js"></script>