@extends('layouts.main')

@section('sidebar')
	@parent
	@include('tag.tags.sidebar')
@endsection

@section('content')
	@include('tag.tags.content')
@endsection