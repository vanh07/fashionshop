<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function transaction()
    {
        return $this->belongsTo(Transaction::class );
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
