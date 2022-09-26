<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarStatus extends Model
{
    protected $table = 'car_status';
    use HasFactory;
    public $timestamps=false;
    protected $fillable =  ['cars_id', 'status_id', 'date_form', 'date_to'];

    public  function statuses():Object
    {
        return $this->belongsTo(Statuses::class, 'id', 'status_id');
    }

    public function hasCar():object
    {
        return $this->belongsTo(Cars::class,'id','car_id');
    }

    public function haveStatus():object
    {
        return $this->hasOne(Statuses::class,'id','status_id');
    }
}
