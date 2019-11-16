<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\ServiceProviderType;

class VehicleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        
        $location = \Request::get('location');

        if(!empty($location)){
            $data['vehicles'] = Vehicle::where('location', 'like', '%'.$location.'%')->paginate(6); // mengambil semua data vehicle
        }else{
            $data['vehicles'] = Vehicle::paginate(6); // mengambil semua data vehicle
        }

        return view('pages.vehicle.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        $data['vehicle'] = Vehicle::findOrFail($id);

        return view('pages.vehicle.detail', $data); // melempar data ke view
    }

    public function get_by_id($id){
        return Vehicle::findOrFail($id);
    }
}
