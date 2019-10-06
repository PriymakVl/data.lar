@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('book.file.content')
@endsection