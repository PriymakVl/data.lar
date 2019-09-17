@extends('layouts.main')

@section('sidebar')
	@include('layouts.sidebar')
	@include('author.authors.sidebar')
@endsection

@section('content')
	@include('author.authors.content')
@endsection