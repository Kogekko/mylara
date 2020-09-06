<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function category(){
    	return $this->belongsTo('App\Category','category_id','id');
    }

    public function variation(){
    	return $this->hasMany('App\Variation','product_id','id');
    }

    public function billdetail(){
    	return $this->hasManyThrough('App\Billdetail', 'App\Variation');
        // return $this->hasManyThrough(
        //     'App\Product', 'App\Variation',
        //     'product_id', 'variation_id', 'id'
        // );
    }
}
