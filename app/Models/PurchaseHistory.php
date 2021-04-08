<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function subscription()
    {
        return $this->hasOne('App\Models\Subscription','id','payment_id');
    }

}
