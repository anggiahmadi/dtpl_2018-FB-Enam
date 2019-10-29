<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourismSiteController extends Controller
{
    public function index()
    {
        return view('pages.info.tourism_site');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari lokasi wisata
    }
}
