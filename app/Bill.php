<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['table_id','price_sum','discount','status','coupon_id'];
}
