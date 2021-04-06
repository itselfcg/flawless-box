<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'last_name',
        'street',
        'city',
        'state',
        'zip_code',
        'phone_number'
    ];
}
