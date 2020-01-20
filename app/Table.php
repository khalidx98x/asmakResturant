<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['name','status','floor_id'];


    public function floor()
    {
        return $this->belongsTo('App\Floor');
    }

    

}
