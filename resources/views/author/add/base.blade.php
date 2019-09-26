@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('author.add.content')
@endsection