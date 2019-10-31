<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\TourismSite;
=======
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8

class TourismSiteController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $tourismsite = TourismSite::all(); // mengambil semua data package
        return view('pages.home.tourism_sites', compact('tourismsite')); // melempar data ke view
        //return view('pages.info.tourism_site');
=======
        return view('pages.info.tourism_site');
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
    }

    public function show($id)
    {
        // disini controller untuk detail page dari lokasi wisata
    }
}
