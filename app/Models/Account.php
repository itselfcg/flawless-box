<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'referral_code'
    ];

    public function address()
    {
        return $this->hasOne('App\Models\Address','id','address_id');
    }


}
