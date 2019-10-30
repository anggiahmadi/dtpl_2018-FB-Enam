<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return view('pages.info.vehicle');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari sewa kendaraan
    }
}
