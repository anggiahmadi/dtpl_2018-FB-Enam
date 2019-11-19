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

        if(!empty($location) && !empty($category_id)){
            $data['tourism_sites'] = TourismSite::join('t_s_and_c', 'tourism_sites.id', '=', 't_s_and_c.tourism_site_id')
                                        ->join('categories', 't_s_and_c.category_id', '=', 'categories.id')
                                        ->select('tourism_sites.*', 'categories.*')
                                        ->where('location', 'like', '%'.$location.'%')
                                        ->where('t_s_and_c.category_id', $category_id)
                                        ->paginate(6); // mengambil semua data tourism site
        }else{
            $data['tourism_sites'] = TourismSite::paginate(6); // mengambil semua data service_provider

        }

        // var_dump($data['tourism_sites']);
        // die();


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
