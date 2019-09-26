@extends('layouts.main')

@section('sidebar')
	@parent
	@include('author.authors.sidebar')
@endsection

@section('content')
	@include('author.authors.content')
@endsection