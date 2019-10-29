<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        // Disini kodingan untuk landing page dari paket wisata
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        return view('pages.wisata.packages', $data);
    }

    public function show($id)
    {
        // disini controller untuk detail page dari paket wisata
    }
}
