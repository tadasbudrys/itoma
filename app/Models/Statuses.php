<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{

    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['name', 'parent_id'];

    public function carSatus()
    {
        return $this->hasMany(CarManagement::class, 'status_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Statuses::class,'parent_id','id');
    }

    public function parent()
    {
        return $this->belongsTo(Statuses::class,'id','parent_id');
    }
}
