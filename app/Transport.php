<?php

namespace App;

use App\DeliveryReport;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transports';
    protected $fillable = ['name','brand','model'];


    public function DeliveryReport()
    {
        return $this->belongsTo(DeliveryReport::class, 'id');
    }
    public function maintenance()
    {
        return $this->belongsTo(Maintenance::class, 'id');
    }

    public function scopeSearch($query, $dato = "")
    {

        $result = $query->where('name', 'like', '%'.$dato.'%')
            ->orWhere('brand', 'like', '%'.$dato.'%')
            ->orWhere('model', 'like', '%'.$dato.'%');

        return $result;
    }
}
