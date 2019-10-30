<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LodgementController extends Controller
{
    public function index()
    {
        return view('pages.info.lodgement');
    }

    public function show($id)
    {
        // disini controller untuk detail page dari hotel
    }
}
