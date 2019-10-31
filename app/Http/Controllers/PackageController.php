<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class PackageController extends Controller
{
    public function index()
    {
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
        echo "controller untuk detail page dari paket wisata";
        // disini controller untuk detail page dari paket wisata
    }
}
