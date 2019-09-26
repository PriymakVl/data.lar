@extends('layouts.main')

@section('sidebar')
	@parent
	@include('author.index.sidebar')
@endsection

@section('content')
	@include('author.index.content')
@endsection