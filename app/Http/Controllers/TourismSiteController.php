<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourismSite;

class TourismSiteController extends Controller
{
    public function index()
    {
        $location = \Request::get('location');
        $category_id = \Request::get('category_id');

        $data['tourism_sites'] = TourismSite::get(); // mengambil semua data package

        return view('pages.tourism_site.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        // disini controller untuk detail page dari lokasi wisata
    }
}
