<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public $table = "order";
   // protected $fillable = ['data'];


     protected $casts = [
        'items' => 'array',
    ];
}
