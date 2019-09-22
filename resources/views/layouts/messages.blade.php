<!-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif -->

@section('messages')
<div class="alert alert-dunger">
    Сообщение о ошибке
</div>
@endsection