<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{

    protected $table ="attributevalues";


    public function attributeItem()
    {
        return $this->belongsTo(AttributeItem::class,"attributeitem_id","id");
    }
}
