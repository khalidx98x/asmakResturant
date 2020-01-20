<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

// use \Illuminate\Database\Eloquent\SoftDeletes;
// use \Askedio\SoftCascade\Traits\SoftCascadeTrait;

class Floor extends Model
{
    protected $fillable = ['name','status','floor_manager_id'];

    // protected $softCascade = ['tables'];
    // protected $dates = ['deleted_at'];



 
    public function table()
    {
        return $this->hasMany('App\Table');
    }

    public function floorManager()
    {
        return $this->belongsTo('App\FloorManager');
    }


    // public static function boot()
    // {
    //     parent::boot();    
    //     // cause a delete of a product to cascade to children so they are also deleted
    //     static::deleted(function($product)
    //     {
    //         $product->images()->delete();
    //         $product->descriptions()->delete();
    //     });
    // }
}
