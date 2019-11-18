<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Order;
use App\Models\TourismSite;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Memeriksa apakah dalam query request terdapat parameter tourism_sites.
        if ($request->tourism_sites) {
            // Membersihkan input yang diperoleh dari user.
            $input = strip_tags($request->tourism_sites);

            $tourism_site = TourismSite::find($input);

            if (is_null($tourism_site)) {
                echo "Paket wisata tidak ditemukan.";
                return;
            }

            return view('pages.order.index', [ 'tourism_site' => $tourism_site ]);
        }
        else if($request->packages)
        {

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Membersihkan input yang diperoleh dari user.
        $tourism_input = strip_tags($request->tourism_site);
        $jumlah_tiket =  strip_tags($request->jumlah_tiket);
        $metode_pembayaran =  strip_tags($request->metode_pembayaran);

        $tourism_site = TourismSite::find($tourism_input);

        if (is_null($tourism_site)) {
            echo "Paket wisata tidak ditemukan.";
            return;
        }
        
        $total_harga = $jumlah_tiket * $tourism_site->price;
        echo "Anda memesan paket wisata: $tourism_site->name. <br/>Jumlah tiket: $jumlah_tiket. <br/>Total harga: Rp $total_harga<br/> Metode pembayaran: $metode_pembayaran";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
