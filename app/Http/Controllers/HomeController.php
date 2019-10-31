<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ServiceProviderType;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        return view('pages.home.index', $data);
    }

<<<<<<< HEAD
    public function paketwisata()
    {
        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();
        return view('pages.wisata.packages', $data);
    }

    // nove
    public function searchPaketWisata(Request $request)
    {
        $package = $request->get('location');
        $result = Package::select('name')
                           ->where('name', 'like', '%'.$package.'%')
                           ->get();
        // var_dump($package);
        // die();
        return view('pages.wisata.packages', compact('result', 'package'));
        //return redirect()->route('packages', ['location' => $result]);

    }

=======
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
    public function searchLokasiWisata(Request $request)
    {
        $lokasiwisata = $request->get('location');
        $tipe = $request->get('category_id');
        $result = DB::table('categories')
            ->join('t_s_and_c', 'categories.id', '=', 't_s_and_c.category_id')
            ->join('tourism_sites', 't_s_and_c.tourism_site_id', '=', 'tourism_sites.id')
            ->select('categories.*', 'tourism_sites.*')
            ->whereColumn(
                ['tourism_sites.location', 'like', '%'.$lokasiwisata.'%'],
                ['t_s_and_c.category_id', '=', $tipe])
            ->get();

<<<<<<< HEAD
        // var_dump($result);
        // die();

        return view('pages.wisata.tourism_sites', compact('result', 'lokasiwisata'));
=======
        var_dump($result);
        die();

        return view('pages.wisata.tourism_sites', compact('result', 'lokasiwisata'));

>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
    }
}
