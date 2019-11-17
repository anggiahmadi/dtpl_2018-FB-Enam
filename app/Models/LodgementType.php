<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LodgementType extends Model
{
    public function lodgement(){
        return $this->belongsTo('App\Models\Lodgement');
    }
}
