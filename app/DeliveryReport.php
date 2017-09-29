<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transport;
use App\DeliveryReport;

class DeliveryReport extends Model
{
    protected $table ='delivery_reports';
    protected $fillable = ['departure_date','delivery_date','destination_state','destination_city','destination_address','load_type','condition', 'incident', 'transport_id', 'driver_id', 'client_id'];


    public function transport()
    {
        return $this->hasOne(Transport::class, 'id', 'transport_id');
    }

    public function driver()
    {
        return $this->hasOne(Driver::class, 'id', 'driver_id');
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }
    public function scopeSearch($query, $dato = "")
    {

        $result = $query->where('id', 'like', '%'.$dato.'%')
            ->orWhere('departure_date', 'like', '%'.$dato.'%')
            ->orWhere('delivery_date', 'like', '%'.$dato.'%');

        return $result;
    }
}
