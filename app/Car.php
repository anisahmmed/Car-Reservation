<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'chassis_no','car_name','car_model','car_category','car_speed','per_day_cost','car_scenario','description',
    ];
}
