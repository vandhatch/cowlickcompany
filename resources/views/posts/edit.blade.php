@extends('layout')

@section('content')
	<h1 class="title">Edit Project</h1>
	
	<form method="post" action="/posts/{{ $post->id }}" style="margin-bottom: 1rem;">
		@csrf
    	@method('PATCH')
		<div class="field">
			<label for="body" class="label">Body</label>
			<input type="text" name="body" class="input" value="{{ $post->body }}">
		</div>
		<button type="submit" class="button">Update Project</button>
	</form>

	<form action="/posts/{{ $post->id }}" method="post">
		@csrf
		@method('DElETE')
		<button type="submit" class="button">Delete Post</button>
	</form>
@endsection