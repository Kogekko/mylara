<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
	use Notifiable;
    protected $table = "customers";

    public function bill(){
    	return $this->hasMany('App\Bill','customer_id','id');
    }
}
