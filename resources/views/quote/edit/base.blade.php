@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('quote.edit.content')
@endsection