<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['name', 'department_id'];

    public function carManagement()
    {
        return parent::belongsTo(CarManagement::class,'user_id','id');
    }
}
