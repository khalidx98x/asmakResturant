<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableTransaction extends Model
{
    protected $fillable = ['floor_manager_id','table_id','floor_id'];


}
