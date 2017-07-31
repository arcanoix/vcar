<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DeliveryReport;

class Transport extends Model
{
  Protected $table = 'transports';
  Protected $fillable = ['name','brand','model'];


    public function DeliveryReport()
    {
        return $this->belongsTo(DeliveryReport::class,'id');
    }
}
