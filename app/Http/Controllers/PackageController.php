<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        $package = Package::all(); // mengambil semua data package
        return view('pages.home.packages', compact('package')); // melempar data ke view
        //return view('pages.info.package');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari paket wisata
    }
}
