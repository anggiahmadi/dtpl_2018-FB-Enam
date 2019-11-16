<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourismSite;
use App\Models\Category;
use App\Models\ServiceProviderType;

class TourismSiteController extends Controller
{
    public function index(Request $request)
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();

        $location = \Request::get('location');
        $category_id = \Request::get('category_id');

        $data['tourism_sites'] = TourismSite::paginate(6); // mengambil semua data package

        return view('pages.tourism_site.index', $data); // melempar data ke view
    }

    public function show($id)
    {
        $data['tourism_site'] = TourismSite::findOrFail($id);

        return view('pages.tourism_site.detail', $data); // melempar data ke view
    }

    public function get_by_id($id){
        return TourismSite::findOrFail($id);
    }
}
