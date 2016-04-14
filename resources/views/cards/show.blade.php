@extends('layout')

@section('content')
	<h2> {{ $card->title }} </h2>
	@foreach ($card->notes as $note)
		<p>{{ $note->body }}</p>
	@endforeach
@stop
