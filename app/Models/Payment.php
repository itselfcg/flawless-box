<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function paymentMethod()
    {
        return $this->hasOne('App\Models\PaymentMethods','id','payment_method_id');
    }
}
