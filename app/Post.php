<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function like($user = null)
    {
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
