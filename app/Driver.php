<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'driver_name','driver_contact','driver_email','birth_date','driver_permanent_address',
      'driver_present_address','driver_licence_no','experience',
    ];
}
