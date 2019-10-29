<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        // Disini kodingan untuk landing page dari paket wisata
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        return view('pages.wisata.packages', $data);
=======
        return view('pages.info.package');
>>>>>>> ef684c80b0e1dd8e70f36574647924e339428e82
    }

    public function show($id)
    {
        // disini controller untuk detail page dari paket wisata
    }
}
