@extends('layouts.main')

@section('sidebar')
	@parent
	@include('book.index.sidebar')
@endsection

@section('content')
	@include('book.index.content')
@endsection