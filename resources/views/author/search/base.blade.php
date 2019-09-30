@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('author.search.content')
@endsection