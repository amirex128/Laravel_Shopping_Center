<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeItem extends Model
{
    protected $table="attributeitems";
    protected $fillable=['title','label','attribute_id','value'];
    protected $casts=[
        'value'=>'array'
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::clss,"attribute_id","id");
    }



}
