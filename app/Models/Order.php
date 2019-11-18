<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function order_detail(){
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function package(){
        return $this->belongsTo('App\Models\Package');
    }

    public function lodgement_type(){
        return $this->belongsTo('App\Models\LodgementType');
    }

    public function vehicle(){
        return $this->belongsTo('App\Models\Cehicle');
    }

    public function service_provider(){
        return $this->belongsTo('App\Models\Package');
    }
}
