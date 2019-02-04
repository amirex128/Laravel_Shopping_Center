<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
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

    public function courses()
    {
        return $this->hasMany(Course::class,"course_id","id");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,"user_id","id");
    }
}
