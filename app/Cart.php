<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model

{
    public $table = "cart";
    protected $fillable = ['wine_brand', 'year', 'bottle_amount', 'case_amount','image'];

}
