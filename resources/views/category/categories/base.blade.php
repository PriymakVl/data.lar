@extends('layouts.main')

@section('sidebar')
	@parent
	@include('category.categories.sidebar')
@endsection

@section('content')
	@include('category.categories.content')
@endsection