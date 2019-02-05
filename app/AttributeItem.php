<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeItem extends Model
{
    protected $table="attributeitems";

    public function attribute()
    {
        return $this->belongsTo(Attribute::clss,"attribute_id","id");
    }

    public function attributeValue()
    {
        return $this->hasMany(AttributeValue::class,"attributeitem_id","id");
    }

}
