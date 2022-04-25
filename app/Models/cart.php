<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';
    protected $fillable = ['name_food', 'image_food','price_food', 'count_food','money_food','order_address','id_bill'];
    public $timestamps = false;
}
