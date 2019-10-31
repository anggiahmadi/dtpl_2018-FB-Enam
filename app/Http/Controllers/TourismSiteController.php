<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourismSite;

class TourismSiteController extends Controller
{
    public function index()
    {
        $data['tourism_sites'] = TourismSite::get();

        return view('pages.tourism_site.index', $data); 
    }

    public function show($id)
    {
        // disini controller untuk detail page dari lokasi wisata
    }
}
