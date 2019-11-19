@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('quote.file.content')
@endsection

@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('js/select_books_author.js') }}"></script>
@endpush