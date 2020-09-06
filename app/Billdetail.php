<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billdetail extends Model
{
    protected $table = "billdetail";

    public function variation(){
    	return $this->hasOne('App\Variation','id','variation_id');
    }

    public function bill(){
    	return $this->belongsTo('App\Bill','bill_id','id');
    }


}
