@extends('layout')

@section('title', "Post: {$post->body}")

@section('content')

<h1 class="title">{{ $post->body }}</h1>
<div class="field">
    <div class="control">
        <a href="{{ url("/posts/{$post->id}/edit") }}" class="button">edit</a>
    </div>
</div>

<div class="box">
    <h2 class="title is-4">Tasks</h2>
    @if ($post->tasks->count())
        @foreach ($post->tasks as $task)
        <form action="{{ url("/tasks/{$task->id}") }}" method="POST">
            @csrf
            @method('PATCH')
            <label for="completed" class="checkbox">
                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                {{ $task->description }}
            </label>
        </form>
        @endforeach
    @else
        <div class="content">
            <p>There are no tasks</p>
        </div>
    @endif
</div>

<div class="box">
    <h2 class="title is-5">Add A Task</h2>
    <form method="POST" action="{{ url("/posts/{$post->id}/tasks") }}">
        @csrf
        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <input type="text" class="input{{ $errors->has('description') ? ' is-danger' :  ''}}" name="description">
            </div>
        </div>
        <div class="field">
            <div class="control"><button class="button" type="submit">Submit</button></div>
        </div>
    </form>

    @include('errors')
</div>

@endsection
