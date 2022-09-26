<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['name'];

    public function carManagement()
    {
        return parent::belongsTo(CarManagement::class,'department_id','id');
    }

}
