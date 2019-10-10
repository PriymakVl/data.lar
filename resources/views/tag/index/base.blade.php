@extends('layouts.main')

@section('sidebar')
	@parent
	@include('tag.index.sidebar')
@endsection

@section('content')
	@include('tag.index.content')
@endsection