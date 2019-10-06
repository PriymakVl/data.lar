@extends('layouts.main')

@section('sidebar')
	@parent
	@include('quote.quotes.sidebar')
@endsection

@section('content')
	@include('quote.quotes.content')
@endsection

<!-- include js file -->
@section('rating-form')
	@include('layouts.rating_form')
@endsection