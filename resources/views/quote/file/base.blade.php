@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('quote.file.content')
@endsection