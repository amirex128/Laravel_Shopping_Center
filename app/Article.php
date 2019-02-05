<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Sluggable;

     public function path()
    {
        return "/article/{$this->slug}";
}
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return "slug";
    }
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class,"article_category","article_id","category_id");

    }



}
