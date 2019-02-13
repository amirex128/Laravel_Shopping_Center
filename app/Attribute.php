<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable=['title','attributeGroup','description'];
    public function attributeGroup()
    {
        return $this->belongsTo(AttributeGroup::class,"attributegroup_id",'id');
    }

    public function attributeItem()
    {
        return $this->hasMany(AttributeItem::class,"attribute_id","id");
    }
}
