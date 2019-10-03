@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('book.edit.content')
@endsection