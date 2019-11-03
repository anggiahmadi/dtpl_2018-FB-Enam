<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Category;
use App\Models\ServiceProviderType;

class ServiceProviderController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        
        $location = \Request::get('location');
        $service_provider_type_id = \Request::get('service_provider_type_id');

        if(!empty($location) && empty($service_provider_type_id)){
            $data['service_providers'] = ServiceProvider::where('location', 'like', '%'.$location.'%')->get(); // mengambil semua data service_provider
        }else if(empty($location) && !empty($service_provider_type_id)){
            $data['service_providers'] = ServiceProvider::join('s_p_and_s_p_t', 's_p_and_s_p_t.service_provider_id', 'service_providers.id')
                ->where('location', 'like', '%'.$location.'%')
                ->where('s_p_and_s_p_t.service_provider_type_id', $service_provider_type_id)
                ->get(); // mengambil semua data service_provider
        }else if(empty($location) && !empty($service_provider_type_id)){
            $data['service_providers'] = ServiceProvider::join('s_p_and_s_p_t', 's_p_and_s_p_t.service_provider_id', 'service_providers.id')
                ->where('s_p_and_s_p_t.service_provider_type_id', $service_provider_type_id)
                ->get(); // mengambil semua data service_provider
        }else{
            $data['service_providers'] = ServiceProvider::get(); // mengambil semua data service_provider
        }

        return view('pages.service_provider.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        $data['service_provider'] = ServiceProvider::findOrFail($id);

        return view('pages.service_provider.detail', $data); // melempar data ke view
    }
}
