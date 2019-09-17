@extends('layouts.main')

@section('sidebar')
	@include('layouts.sidebar')
	@include('book.index.sidebar')
@endsection

@section('content')
	@include('book.index.content')
@endsection