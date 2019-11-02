<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index()
    {
        return view('pages.info.service_provider');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari penyedia jasa
    }
}
