<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
    protected $table="attributegroups";

    public function category()
    {
        return $this->belongsTo(Category::class,"category_id","id");
    }

    public function attribute()
    {
        return $this->hasMany(Attribute::class,"attributegroup_id","id");
    }
}
