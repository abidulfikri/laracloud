<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iot extends Model
{
    protected $fillable = [
        'sensor','channel','value'
    ];
}
