<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    public function photo(){
        return $this->hasMany('App\Models\Photo');
    }

    public function service_provider_types()
    {
        return $this->belongsToMany('App\Models\ServiceProviderType', 's_p_and_s_p_t', 'service_provider_id', 'service_provider_type_id')->withTimestamps();
    }
}
