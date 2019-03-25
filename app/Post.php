<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'body'
	];

	public function tasks()
	{
		return $this->hasMany(Task::class);
	}

	public function addTask($task)
	{
		$this->tasks()->create($task);
	}
}
