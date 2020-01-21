<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FloorManager extends Model
{
    
    protected $fillable = ['name','email','password'];

 
    public function floor()
    {
        return $this->hasOne(Floor::class);
    }
}
