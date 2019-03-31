@extends('layout')

@section('content')
	<h1 class="title">Create Post</h1>
	<form method="post" action="{{ url("/posts") }}">
		@csrf
		<div class="field">
			<label for="body" class="label">Body</label>
			<div class="control">
				<input type="text" name="body" class="input{{ $errors->has('body') ? ' is-danger' : '' }}" value="{{ old('body') }}">
			</div>
		</div>

		<button type="submit" class="button">Create</button>
	</form>

	@include('errors')
@endsection