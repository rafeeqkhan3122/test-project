<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User1::class, 'user1_id'); // Many posts belong to one user
    }
}
