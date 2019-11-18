<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LodgementController;
use App\Models\Category;
use App\Models\ServiceProviderType;
use App\Models\Package;
use App\Models\Lodgement;
use App\Models\LodgementType;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $date_format = "Y-m-d";

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
    public function index(Request $request)
    {
        $nama = $request->get('profil');

        $data['categories'] = Category::get();
        $data['service_provider_types'] = ServiceProviderType::get();

        // $data['categories'] = Category::get();
        // $data['service_provider_types'] = ServiceProviderType::get();
        
        $location = \Request::get('location');

        if(!empty($location)){
            $data['lodgements'] = Lodgement::where('lodgements.location', 'like', '%'.$location.'%')
                                            ->orWhere('lodgements.name', 'like', '%'.$location.'%')
                                            ->get(); // mengambil semua data package
            //$data['lodgements'] = Lodgement::join('lodgement_types', 'lodgements.id', '=', 'lodgement_types.lodgement_id')->where('lodgements.location', 'like', '%'.$location.'%')->get(); // mengambil semua data package
        }else{
            $data['lodgements'] = Lodgement::get(); // mengambil semua data package
            //$data['lodgements'] = Lodgement::join('lodgement_types', 'lodgements.id', '=', 'lodgement_types.lodgement_id')->get(); // mengambil semua data package
        }
        
        return view('pages.home.index', $data);
    }

    public function setup_periode(Request $request){
        $start_date_counted = "Y";
        $message = 'not_complete';

        $driven_by = $request['driven_by'];
        $start_date = date('Y-m-d', strtotime($request['start_date']));
        $length_of_term = $request['length_of_term'];
        $end_date = date('Y-m-d', strtotime($request['end_date']));

        switch ($driven_by) {
            case "start_date":
                $end_date = date($this->date_format, strtotime("+" . $length_of_term . " days", strtotime($start_date)));
                if ($start_date_counted == "Y") {
                    $end_date = date($this->date_format, strtotime("-1 days", strtotime($end_date)));
                }
                $message = 'complete';
            break;

            case "length_of_term":
                if ($start_date != null || $end_date != null) {
                    if ($start_date != null) {
                        $end_date = date($this->date_format, strtotime("+" . $length_of_term . " days", strtotime($start_date)));
                        if ($start_date_counted == "Y") {
                            $end_date = date($this->date_format, strtotime("-1 days", strtotime($end_date)));
                        }
                    }
                    if ($end_date != null && $start_date == null) {
                        $start_date = date($this->date_format, strtotime("-" . $length_of_term . " days", strtotime($end_date)));
                        if ($start_date_counted == "Y") {
                            $end_date = date($this->date_format, strtotime("+1 days", strtotime($end_date)));
                        }
                    }
                    $message = 'complete';
                }
            break;

            case "end_date":
                if ($length_of_term != null) {
                    $start_date = date($this->date_format, strtotime("-" . $length_of_term . " days", strtotime($end_date)));
                    if ($start_date_counted == "Y") {
                        $start_date = date($this->date_format, strtotime("+1 days", strtotime($start_date)));
                    }
                    $message = 'complete';
                }
            break;
        }

        $start_date = date($this->date_format, strtotime($start_date));
        $end_date = date($this->date_format, strtotime($end_date));

        $return['message'] = $message;
        $return['start_date'] = $start_date;
        $return['length_of_term'] = $length_of_term;
        $return['end_date'] = $end_date;

        return $return;
    }

    public static function getCode($table_name, $prefix_name)
    {
        $sequence = 0;

        $total_data = DB::table($table_name)->count();

        $sequence = $total_data + 1;
        $check_unique_code = false;

        while (!$check_unique_code) {
            $code = $prefix_name . '-' . self::setZero($sequence);

            $get_detail_data = DB::table($table_name)->where('code', $code)->first();

            if ($get_detail_data == null) {
                $check_unique_code = true;
            } else {
                $sequence++;
                $check_unique_code = false;
            }
        }

        return $code;
    }

    public static function setZero($number)
    {
        $number_format = "";

        if ($number < 10) {
            $number_format = "000" . $number;
        } else if ($number >= 10 && $number < 100) {
            $number_format = "00" . $number;
        } else if ($number >= 100 && $number < 1000) {
            $number_format = "0" . $number;
        } else if ($number >= 1000 && $number < 10000) {
            $number_format = $number;
        }

        return $number_format;
    }


}
