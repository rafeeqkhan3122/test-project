<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    // public function sellersData()
    // {
    //     return $this->belongsTo('App\Models\Seller');
    // }
    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }
}
