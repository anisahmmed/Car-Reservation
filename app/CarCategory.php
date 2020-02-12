<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarCategory extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'category_name',
    ];
}
