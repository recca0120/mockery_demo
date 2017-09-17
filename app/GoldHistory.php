<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoldHistory extends Model
{
    protected $fillable = [
        'date',
        'currency',
        'unit',
        'buy',
        'sell',
    ];
}
