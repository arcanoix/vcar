<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transport;

class DeliveryReport extends Model
{
  protected $table ='delivery_reports';

  protected $fillable = ['departure_date','delivery_date','destination_state','destination_city','destination_address','load_type','condition','transport_id'];


    public function transport()
    {
        return $this->hasOne(Transport::class,'id','transport_id');
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
