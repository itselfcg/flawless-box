<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionStatus extends Model
{
    public const AUTO_RENEWAL = 'Auto renewal';
    public const VALID = 'Valid';
    public const CANCELED = 'Canceled';
    public const FINISHED = 'Finished';
}
