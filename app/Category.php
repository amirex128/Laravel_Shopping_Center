<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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

    public function attributeGroup()
    {
        return $this->hasMany(AttributeGroup::class,"category_id","id");
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,"category_product","category_id","product_id");
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class,"article_category","category_id","article_id");
    }
}
