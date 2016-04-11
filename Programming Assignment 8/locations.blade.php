@extends('layouts.page')

@section('title', 'Locations')

@section('content')
	@foreach ($locations as	$location)
	<p>Location: {{ $location->value }}</p>
	<ol>Stories:
		@foreach($location->stories as $story) 
		<li>{{ $story->title }}</li>
		@endforeach 
	</ol>
	@endforeach
@stop