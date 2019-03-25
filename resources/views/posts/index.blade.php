@extends('layout')

@section('content')
	<h1 class="title">Posts</h1>
	@if(count($posts) > 0)
		<div class="section">
		@foreach($posts as $post)
			<div class="media">
				<div class="media-content">
					<a href="/posts/{{ $post->id }}/edit">{{ $post->body }}</a>	
				</div>
			</div>
		@endforeach
		</div>
		
			<a class="button" href="/posts/create">Create Post</a>
		
	@else
		<div class="content">
			<p>There are no posts.</p>
			<a class="button" href="/posts/create">Create One</a>
		</div>
	@endif
@endsection