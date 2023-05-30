<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $fillable = [
        'sender',
        'reciever',
        'description',
        'location',
        'from_address',
        'to_address'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function reciever()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
