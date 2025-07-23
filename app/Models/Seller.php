<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seller extends Model
{
    //
    function productData()
    {
        return $this->hasOne('App\Models\Product');
    }

    // function productManyData()
    // {
    //     return $this->hasMany('App\Models\Product');
    // }



    public function productManyData(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
