@extends('layout')

@section('title', "Edit: {$post->body}")

@section('content')
	<h1 class="title">Edit Project</h1>
	
	<form method="post" action="/posts/{{ $post->id }}" style="margin-bottom: 1rem;">
		@csrf
    	@method('PATCH')
		<div class="field">
			<label for="body" class="label">Body</label>
			<input type="text" name="body" class="input{{ $errors->has('body') ? ' is-danger' : '' }}" value="{{ $post->body }}">
		</div>
		<button type="submit" class="button">Update Project</button>
	</form>

	@include('errors')

	<form action="/posts/{{ $post->id }}" method="post">
		@csrf
		@method('DElETE')
		<button type="submit" class="button is-danger">Delete Post</button>
	</form>
@endsection