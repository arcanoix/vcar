<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $guarded = [];

    public function DeliveryReport()
    {
        return $this->belongsTo('App\DeliveryReport');
    }
}
