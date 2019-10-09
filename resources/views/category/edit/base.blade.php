@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('category.edit.content')
@endsection