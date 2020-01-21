<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FloorsTables extends Model
{
    protected $fillable = ['floor_id','table_id'];


    public function floor()
    {
        return $this->hasMany(Floor::class);
    }

    public function table()
    {
        return $this->hasMany(Floor::class);
    }


}
