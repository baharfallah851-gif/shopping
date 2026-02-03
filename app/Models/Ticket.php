<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = ['created_at','updated_at'];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function messages()
    {
        return $this->hasmany(Message::class, 'ticket_id', 'id');
    }
}
