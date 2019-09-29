@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('author.edit.content')
@endsection