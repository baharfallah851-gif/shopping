<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $guarded = ['created_at', 'updated_at'];

    public function addresses()
    {
        return $this->hasMany(Address::class, 'customer_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    // لاراول پیش‌فرض دنبال email است، با این می‌گوییم username را بررسی کند
    public function username()
    {
        return 'username';
    }
}

