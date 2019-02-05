<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class,"order_id","id");
    }

    public function product()
    {
        return $this->belongsTo(Product::class,"product_id","id");
    }
}
