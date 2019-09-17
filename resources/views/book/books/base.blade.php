@extends('layouts.main')

@section('sidebar')
	@include('layouts.sidebar')
	@include('book.books.sidebar')
@endsection

@section('content')
	@include('book.books.content')
@endsection