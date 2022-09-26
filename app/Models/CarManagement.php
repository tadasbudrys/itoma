<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarManagement extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'car_management';
    protected $fillable = ['cars_id', 'department_id', 'user_id', 'date_from', 'date_to'];

    public function department():Object
    {
        return parent::belongsTo(Departments::class, 'id', 'car_id');
    }

    public function user():Object
    {
        return $this->belongsTo(Users::class, 'id', 'user_id');
    }

    public function car():Object
    {
        return $this->belongsTo(Cars::class, 'car_id', 'id');
    }

    public function haveCar():Object
    {
        return $this->hasOne(Cars::class, 'id', 'cars_id');
    }

    public function haveUser():Object
    {
        return $this->hasOne(Users::class, 'id', 'user_id');
    }

    public function haveDepartment():Object
    {
        return $this->hasOne(Departments::class, 'id', 'department_id');
    }
}
