<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
    protected $table="attributegroups";

    protected $fillable=['title','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class,"category_id","id");
    }

    public function attribute()
    {
        return $this->hasMany(Attribute::class,"attributegroup_id","id");
    }
}
