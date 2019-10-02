@extends('layouts.main')

@section('title', 'Книги')

@section('sidebar')
	@parent
	@include('book.books.sidebar')
@endsection

@section('content')
	@include('book.books.content')
@endsection

@section('rating-form')
	@include('layouts.rating_form')
@endsection

