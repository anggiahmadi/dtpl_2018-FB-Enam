<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\ServiceProviderType;

class VehicleController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        
        $location = \Request::get('location');

        if(!empty($location)){
            $data['vehicles'] = Vehicle::where('location', 'like', '%'.$location.'%')->get(); // mengambil semua data vehicle
        }else{
            $data['vehicles'] = Vehicle::get(); // mengambil semua data vehicle
        }

        return view('pages.vehicle.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        $data['vehicle'] = Vehicle::findOrFail($id);

        return view('pages.vehicle.detail', $data); // melempar data ke view
    }
}
