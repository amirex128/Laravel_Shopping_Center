<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use Sluggable;

    protected $table = "articles";

    // set type for filed database because i want to save array in database by laravel
    protected $casts=[
        "imageUrl"=>"array"
    ];


    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }


    public function path()
    {
        return "/article/$this->slug";
    }


    // dariaft meghdar moshakhas ke darhal set shodan dar database mibashad
    public function setBodyAttribute($key, $value)
    {
        // $value dar in ja meghdar send shode braie database mibashad
        $this->attributes['description']=str_limit($value,200);

        // baiad $value ra bad az injam kar khodemon be jaye aslish brizim
        $this->attributes["body"]=$value;
    }


    // braye route model binding astfade mishavad default id mibashad v braye astfade as slug bayad be slug change shavad
    public function getRouteKeyName()
    {
        return "id";
    }
    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "title"
            ]
        ];
    }
}
