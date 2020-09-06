<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $table = "variation";

    public function product(){
    	return $this->belongsTo('App\Product','product_id','id');
    }
}
