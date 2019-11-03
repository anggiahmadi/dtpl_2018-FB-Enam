<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Category;
use App\Models\ServiceProviderType;

class PackageController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        
        $location = \Request::get('location');

        if(!empty($location)){
            $data['packages'] = Package::where('location', 'like', '%'.$location.'%')->get(); // mengambil semua data package
        }else{
            $data['packages'] = Package::get(); // mengambil semua data package
        }

        return view('pages.package.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        $data['package'] = Package::findOrFail($id);

        return view('pages.package.detail', $data); // melempar data ke view
    }
}
