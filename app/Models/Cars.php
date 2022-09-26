<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $hidden = ['price'];
    protected $fillable = ['number', 'year_made', 'model', 'price'];

    public function carManagement()
    {
        return $this->hasMany(CarManagement::class,  'cars_id', 'id');
    }

    public function carStatus()
    {
        return $this->hasMany(CarStatus::class, 'cars_id', 'id');
    }

}
