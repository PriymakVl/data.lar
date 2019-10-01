<?
  $path = request()->path();
  if (strrpos($path, 'book') !== false) $path = 'book';
  else if (strrpos($path, 'author') !== false) $path = 'author';
  else if (strrpos($path, 'quote') !== false) $path = 'quote';
?>

<div class="modal fade" id="rating-edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    
   <form action="/{{ $path }}/edit_rating?>">
      {{ csrf_field() }} 
      <!-- Modal body -->
      <div class="modal-body">
         <div class="form-group">
            <label for="rating">Рейтинг:</label>
            <!-- rating -->
            <input type="text" class="form-control input-sm" id="rating" name="rating" value="">
            <!-- id item -->
            <input type="hidden" name="id_item" id="id_item" value="">
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

@push('custom-scripts')
  <script type="text/javascript" src="/js/fill_form_rating.js"></script>
@endpush