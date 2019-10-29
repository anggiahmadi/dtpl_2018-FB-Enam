<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('pages.info.package');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari paket wisata
    }
}
