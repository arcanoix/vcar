<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryReport extends Model
{
    protected $guarded = [];

    public function transport()
    {
        return $this->hasOne('App\Transport');
    }

    public function driver()
    {
        return $this->hasOne('App\Driver');
    }

    public function Client()
    {
        return $this->hasOne('App\Client');
    }
}
