<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function plan()
    {
        return $this->hasOne('App\Models\SubscriptionPlan','id','plan_id');
    }

    public function account()
    {
        return $this->hasOne('App\Models\Account','id','account_id');
    }

    public function payment()
    {
        return $this->hasOne('App\Models\Payment','id','payment_id');
    }
}
