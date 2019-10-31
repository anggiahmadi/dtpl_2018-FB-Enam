<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Package;
=======
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8

class PackageController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $package = Package::all(); // mengambil semua data package
        return view('pages.home.packages', compact('package')); // melempar data ke view
        //return view('pages.info.package');
=======
        return view('pages.info.package'); 
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
    }

    public function show($id)
    {
        // disini controller untuk detail page dari paket wisata
    }
}
