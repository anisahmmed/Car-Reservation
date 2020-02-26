<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterDriver extends Model
{
  use SoftDeletes;
    protected $fillable = [
      'car_model_id','driver_name_id',
    ];

    //Relation between Car
    function relationBetweenCar()
    {
      return $this->hasOne('App\Car','id','car_model_id');
    }

}
