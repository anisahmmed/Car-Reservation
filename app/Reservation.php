<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'pickup_date','drop_off_date','customer_name','customer_email','customer_phone','city',
      'full_address','car_model','driver','total_cost','payment_status',
    ];
}
