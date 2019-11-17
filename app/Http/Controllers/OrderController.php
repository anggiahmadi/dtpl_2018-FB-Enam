<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\TourismSite;
use App\Models\Lodgement;
use App\Models\Vehicle;
use App\Models\Package;
use App\Models\PackageDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use Redirect;
use Auth;
use DB;

class OrderController extends Controller
{
    private $url = 'order';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['orders'] = Order::where('user_id', Auth::user()->id)->get();

        return view('pages.order.index', $data); // melempar data ke view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = \Request::get('location');
        $vehicles = null;
        $service_providers = null;
        $tourism_sites = null;
        $lodgements = null;

        if(!empty($location)){
            $vehicles = Vehicle::where('location', 'like', '%'.$location.'%')->get();
            $service_providers = ServiceProvider::where('location', 'like', '%'.$location.'%')->get();
            $tourism_sites = TourismSite::where('location', 'like', '%'.$location.'%')->get();
            $lodgements = Lodgement::where('location', 'like', '%'.$location.'%')->get();
        }

        $data['vehicles'] = $vehicles;
        $data['service_providers'] = $service_providers;
        $data['tourism_sites'] = $tourism_sites;
        $data['lodgements'] = $lodgements;

        return view('pages.order.create', $data); // melempar data ke view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        if(!empty($request['is_custom'])){
            $package = new Package;
            $package->code = HomeController::getCode('packages', 'C-PACK-');
            $package->name = 'Custom Package No '.$package->code.' by '.Auth::user()->name;
            $package->length_of_term = $request['cp_length_of_term'];
            $package->location = $request['cp_location'];
            $package->price = $request['total_price'];
            $package->is_custom = "Y";
            if($package->save()){
                $order = new Order;
                $order->user_id = Auth::user()->id;
                $order->package_id = $package->id;
                $order->code = HomeController::getCode('orders', 'PO-');
                $order->length_of_term = $request['cp_length_of_term'];
                $order->start_date = date('Y-m-d', strtotime($request['cp_start_date']));
                $order->end_date = date('Y-m-d', strtotime($request['cp_end_date']));
                if($order->save()){
                    for($i=0; $i < sizeof($request['item_id']); $i++){
                        $package_detail = new PackageDetail;

                        switch($request['source_from'][$i]){
                            case "tourism_site" :
                                $package_detail->tourism_site_id = $request['item_id'][$i];
                            break;

                            case "lodgement_type" :
                                $package_detail->lodgement_type_id = $request['item_id'][$i];
                            break;

                            case "vehicle" :
                                $package_detail->vehicle_id = $request['item_id'][$i];
                            break;

                            case "service_provider" :
                                $package_detail->service_provider_id = $request['item_id'][$i];
                            break;
                        }

                        $package_detail->package_id = $package->id;
                        $package_detail->qty = $request['length_of_term_detail'][$i];
                        $package_detail->save();

                        $order_detail = new OrderDetail;
                        $order_detail->order_id = $order->id;
                        $order_detail->package_detail_id = $package_detail->id;
                        $order_detail->length_of_term = $request['cp_length_of_term'];
                        $order_detail->start_date = date('Y-m-d', strtotime($request['cp_start_date']));
                        $order_detail->end_date = date('Y-m-d', strtotime($request['cp_end_date']));
                        $order_detail->save();
                    }

                    \Session::flash('success', 'You are success in inputing your data');
                    DB::commit();

                    return Redirect::to($this->url);
                }else{
                    \Session::flash('error', 'Maaf order anda gagal dibuat !!!');
                    DB::rollBack();
                }
            }else{
                \Session::flash('error', 'Maaf order anda gagal dibuat !!!');
                DB::rollBack();
            }
        }else{

        }
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
