<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['price', 'quantity','tour_id','order_id'];
    public $timestamps = false;
}
