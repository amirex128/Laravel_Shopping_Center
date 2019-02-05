<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function path()
    {
        return "/profile/$this->id";
    }

    public function articles()
    {
        return $this->hasMany(Article::class,"user_id","id");
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class,"user_id","id");
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,"role_user","user_id","role_id");
    }

    public function products()
    {
        return $this->hasMany(Product::class,"user_id","id");
    }

    public function orders()
    {
        return $this->hasMany(Order::class,"user_id","id");
    }

}
