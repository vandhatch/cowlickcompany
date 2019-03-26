<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'body',
		'owner_id'
	];

	public function tasks()
	{
		return $this->hasMany(Task::class);
	}

	public function addTask($task)
	{
		$this->tasks()->create($task);
	}

	public function owner()
	{
		return $this->belongsTo(User::class);
	}
}
