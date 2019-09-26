@extends('layouts.main')

@section('sidebar')
	@parent
	@include('quote.quotes.sidebar')
@endsection

@section('content')
	@include('quote.quotes.content')
@endsection