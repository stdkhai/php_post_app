<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $fillable = [
        'sender',
        'receiver',
        'description',
        'location',
        'from_address',
        'to_address'
    ];
}
