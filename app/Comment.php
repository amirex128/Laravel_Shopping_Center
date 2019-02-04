<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
protected $table="comments";

    public function article()
    {
        return $this->belongsTo(Article::class,"article_id","id");
}
}
