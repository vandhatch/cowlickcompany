<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $Post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
      return $post->owner_id === $user->id;
    }
}
