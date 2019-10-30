<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourismSite;

class TourismSiteController extends Controller
{
    public function index()
    {
        $tourismsite = TourismSite::all(); // mengambil semua data package
        return view('pages.home.tourism_sites', compact('tourismsite')); // melempar data ke view
        //return view('pages.info.tourism_site');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari lokasi wisata
    }
}
