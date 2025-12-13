<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function addresses(){
        return $this->hasMany(Address::class, 'customers_id', 'id');
    }
}
