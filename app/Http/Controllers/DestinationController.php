<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function index()
    {
        return view('pages.wisata.index');
    }

    public function wisatapantai()
    {
        return view('pages.wisata.wisatapantai');
    }

    public function jakarta()
    {
        return view('pages.wisata.jakarta');
    }
}
