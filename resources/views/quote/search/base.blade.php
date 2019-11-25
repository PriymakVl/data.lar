@extends('layouts.main')

@section('sidebar')
	@parent
	@include('quote.search.sidebar')
@endsection

@section('content')
	@include('quote.search.content')
@endsection