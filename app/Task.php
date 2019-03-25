<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'completed',
    	'description'
    ];
    public function post() 
    {
    	return $this->belongsTo(Post::class);
    }

    public function complete($completed = true)
    {
    	$this->update(compact('completed'));
    }

    public function incomplete()
    {
    	$this->complete(false);
    }
}
