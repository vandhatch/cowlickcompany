<?php

namespace App\Http\Controllers;

use App\Task;
use App\Post;

use Illuminate\Http\Request;

class PostTasksController extends Controller
{
    public function update(Task $task, Request $request)
    {
        $method = $request->has('completed') ? 'complete' : 'incomplete';
        $task->$method();
    	return back();
    }

    public function store(Post $post, Request $request)
    {
    	$attributes = $request->validate([
    		'description' => 'required'
    	]);
    	$post->addTask($attributes);
    	return back();
    }
}
