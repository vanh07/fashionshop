<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;

    public function rate()
    {
        return $this->hasMany(Rate::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class );
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function catalog()
    {
        return $this->belongsTo(Catalog::class);
    }
}
