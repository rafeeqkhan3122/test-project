<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    //
    public function posts()
    {
        return $this->hasMany(Post::class); // One user has many posts
    }
}
