<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;


class PackageController extends Controller
{
    public function index()
    {
        $data['packages'] = Package::get();

        return view('pages.package.index', $data); 
    }

    public function show($id)
    {
        echo "controller untuk detail page dari paket wisata";
        // disini controller untuk detail page dari paket wisata
    }
}
