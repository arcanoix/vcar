<?php

namespace App;

use App\Transport;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';
    protected $fillable = ['name', 'last_check', 'last_km', 'next_check', 'next_km', 'observation', 'transport_id'];

    public function transport()
    {
        return $this->hasOne(Transport::class, 'id', 'transport_id');
    }

    public function scopeSearch($query, $dato = "")
    {

        $result = $query->where('name', 'like', '%'.$dato.'%')
            ->orWhere('last_check', 'like', '%'.$dato.'%')
            ->orWhere('next_check', 'like', '%'.$dato.'%');
        return $result;
    }
}
