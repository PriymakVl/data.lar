@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('quote.search.content')
@endsection