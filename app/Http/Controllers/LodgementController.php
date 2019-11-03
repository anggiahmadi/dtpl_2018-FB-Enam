<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lodgement;
use App\Models\Category;
use App\Models\ServiceProviderType;

class LodgementController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        
        $location = \Request::get('location');

        if(!empty($location)){
            $data['lodgements'] = Lodgement::where('lodgements.location', 'like', '%'.$location.'%')->get(); // mengambil semua data package
            //$data['lodgements'] = Lodgement::join('lodgement_types', 'lodgements.id', '=', 'lodgement_types.lodgement_id')->where('lodgements.location', 'like', '%'.$location.'%')->get(); // mengambil semua data package
        }else{
            $data['lodgements'] = Lodgement::get(); // mengambil semua data package
            //$data['lodgements'] = Lodgement::join('lodgement_types', 'lodgements.id', '=', 'lodgement_types.lodgement_id')->get(); // mengambil semua data package
        }

        return view('pages.lodgement.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        echo "controller untuk detail page dari paket wisata";
        // disini controller untuk detail page dari paket wisata
    }
}
