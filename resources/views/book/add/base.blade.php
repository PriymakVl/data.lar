@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('book.add.content')
@endsection