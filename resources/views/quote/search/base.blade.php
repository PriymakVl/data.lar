@extends('layouts.main')

@section('sidebar')
	@parent
	@include('quote.search.sidebar')
@endsection

@section('content')
	@include('quote.search.content')
@endsection


@push('custom-scripts')
	<script type="text/javascript" src="{{ URL::asset ('js/custom/set_rating_quote.js') }}"></script>
@endpush
