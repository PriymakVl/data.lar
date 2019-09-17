@extends('layouts.main')

@section('sidebar')
	@include('layouts.sidebar')
	@include('author.index.sidebar')
@endsection

@section('content')
	@include('author.index.content')
@endsection