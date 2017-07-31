<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $guarded = [];

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function DeliveryReport()
    {
        return $this->belongsTo('App\DeliveryReport');
    }
}
