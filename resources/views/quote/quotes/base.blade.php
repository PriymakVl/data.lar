@extends('layouts.main')

@section('sidebar')
	@include('layouts.sidebar')
	@include('quote.quotes.sidebar')
@endsection

@section('content')
	@include('quote.quotes.content')
@endsection