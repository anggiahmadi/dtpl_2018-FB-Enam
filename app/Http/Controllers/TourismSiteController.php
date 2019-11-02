<?php

namespace App\Http\Controllers;

use App\Models\TourismSite;
use Illuminate\Http\Request;

class TourismSiteController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->query();

        if (!isset($query['location'])) {
            echo 'location is required';
            return;
        }

        if (!isset($query['category_id'])) {
            echo 'category_id is required';
            return;
        }

        $tourism = TourismSite::first();
        return dd($tourism['name']);
        
        return dd($request->query());
        // Disini kodingan untuk landing page dari lokasi wisata
        return view('pages.wisata.jakarta');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari lokasi wisata
    }
}
