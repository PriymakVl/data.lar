@extends('layouts.main')

@section('sidebar')
	@parent
	@include('category.index.sidebar')
@endsection

@section('content')
	@include('category.index.content')
@endsection