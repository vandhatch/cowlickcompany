@extends('layout')

@section('content')
	<h1 class="title">Create Post</h1>
	<form method="post" action="/posts">
		@csrf
		<div class="field">
			<label for="body" class="label">Body</label>
			<input type="text" name="body" class="input">
		</div>

		<button type="submit" class="button">Create</button>
	</form>
@endsection