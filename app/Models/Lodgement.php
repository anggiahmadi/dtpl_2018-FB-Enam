<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lodgement extends Model
{
    public function photo(){
        return $this->hasMany('App\Models\Photo');
    }
    
    public function lodgement_type(){
        return $this->hasMany('App\Models\LodgementType');
    }
}
