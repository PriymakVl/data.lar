@extends('layouts.main')

@section('sidebar')
	@parent
@endsection

@section('content')
	@include('tag.edit.content')
@endsection