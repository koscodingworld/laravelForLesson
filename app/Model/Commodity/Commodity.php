<?php

namespace App\Model\Commodity;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $table = 'commodities';
    protected $fillable = ['name', 'price'];
}
