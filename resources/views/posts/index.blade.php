@extends('layout')

@section('title', 'Post Index')

@section('content')
	<div class="box">
		
		<h1 class="title">Posts</h1>
		@if(count($posts) > 0)
			@foreach($posts as $post)
				<div class="media">
					<div class="media-content">
						<a href="/posts/{{ $post->id }}">{{ $post->body }}</a>	
					</div>
				</div>
			@endforeach
				
		@else
			<div class="content">
				<p>There are no posts.</p>
			</div>
		@endif
	</div>


	<div class="field">
		<div class="control">
			<a class="button" href="/posts/create">Create Post</a>
		</div>
	</div>
@endsection