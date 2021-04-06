<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoxStatus extends Model
{
    public const WAITING = 'Waiting to be shipped';
    public const SENT = 'Sent to:';
    public const PREPARING = 'Preparing box';
}
