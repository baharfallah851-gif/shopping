<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function addresses(){
        return $this->hasMany(Address::class, 'customer_id', 'id');   //برقراری ارتباط(کلید خارجی)
    }

    public function city(){
        return $this->belongsTo(City::class);      //belongsto همون ارتباط یک به چند
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }
}
