<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function brand()
    {
        return $this->hasOne(Brand::class,"product_id","id");
    }

    public function warranty()
    {
        return $this->hasOne(Warranty::class,"product_id","id");
    }

    public function property()
    {
        return $this->hasOne(Property::class,"product_id","id");
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class,"product_id","id");
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class,"color_product","product_id","color_id");
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,"category_product","product_id","category_id");
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class,"product_id","id");
    }
}
