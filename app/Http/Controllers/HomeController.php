<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\RegisJob;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // ผลการค้นหา
    public function result(Request $request){
        $service_id = $request->get('service_id');
        $province_name = $request->get('province_name');
        $perPage = 10;
        
        $rs = RegisJob::select('*');

        if (!empty($service_id)) {
            $rs = $rs->whereNotNull(serviceID_2_nameServiceField($service_id));
        }

        if (!empty($province_name)) {
            $rs = $rs->where('province',$province_name);
        }

        $rs = $rs->orderBy('idn','desc')->paginate($perPage);

        return view('result', compact('rs'));
    }

    // รายละเอียดชื่อคน
    public function detail(){
        return view('detail');
    }
}
