@extends('layout')

@section('content')
	<h2> {{ $card->title }} </h2>
	@foreach ($card->notes as $note)
		<p>{{ $note->body }}</p>
	@endforeach
	<br>
	<br>
	<div class="row">
		<h3>Add a New Note</h3>
		<form method="POST" action="{{ $card->path() }}/notes">
			<div class="input-group form-group">
				<textarea class="col-md-12 form-control" name="body"></textarea>
			</div>
			<div class="form-group">
				<input type="submit"  class="col-md-12 form-control btn btn-primary" value="Add Note" />
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			</div>
		</form>
	</div>
@stop
