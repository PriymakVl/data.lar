@extends('layouts.main')

@section('sidebar')
	@parent
	@include('book.books.sidebar')
@endsection

@section('content')
	@include('book.books.content')
@endsection