<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';
    protected $fillable = ['name', 'last_check', 'last_km', 'next_check', 'next_km', 'observation', 'transport_id'];

    public function transport()
    {
        return $this->hasOne(Transport::class, 'id', 'transport_id');
    }
}
