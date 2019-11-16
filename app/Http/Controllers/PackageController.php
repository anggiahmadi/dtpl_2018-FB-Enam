<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ServiceProviderType;
use App\Models\ServiceProvider;
use App\Models\TourismSite;
use App\Models\Lodgement;
use App\Models\Vehicle;
use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        
        $location = \Request::get('location');

        if(!empty($location)){
            $data['packages'] = Package::where('location', 'like', '%'.$location.'%')->paginate(6); // mengambil semua data package
        }else{
            $data['packages'] = Package::paginate(6); // mengambil semua data package
        }

        return view('pages.package.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        $data['package'] = Package::findOrFail($id);

        return view('pages.package.detail', $data); // melempar data ke view
    }

    public function create()
    {
        $location = \Request::get('location');
        $vehicles = null;
        $service_providers = null;
        $tourism_sites = null;
        $lodgements = null;

        if(!empty($location)){
            $vehicles = Vehicle::where('location', 'like', '%'.$location.'%')->get();
            $service_providers = ServiceProvider::where('location', 'like', '%'.$location.'%')->get();
            $tourism_sites = TourismSite::where('location', 'like', '%'.$location.'%')->get();
            $lodgements = Lodgement::where('location', 'like', '%'.$location.'%')->get();
        }

        $data['vehicles'] = $vehicles;
        $data['service_providers'] = $service_providers;
        $data['tourism_sites'] = $tourism_sites;
        $data['lodgements'] = $lodgements;

        return view('pages.package.create', $data); // melempar data ke view
    }
}
