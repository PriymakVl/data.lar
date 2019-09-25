@extends('layouts.main')

@section('sidebar')
	@include('layouts.sidebar')
	@include('quote.index.sidebar')
@endsection

@section('content')
	@include('quote.index.content')
@endsection