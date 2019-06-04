<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\RegisJob;
use App\Model\RegisJobScore;

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
        $tnames = $request->get('tnames');
        $service_id = $request->get('service_id');
        $province_name = $request->get('province_name');
        $typeofregis = $request->get('typeofregis');
        $perPage = 10;
        
        $rs = RegisJob::select('*');

        if (!empty($tnames)) {
            $rs = $rs->where('tnames', 'LIKE', "%$tnames%");
        }

        if (!empty($service_id)) {
            $rs = $rs->whereNotNull(serviceID_2_nameServiceField($service_id));
        }

        if (!empty($province_name)) {
            $rs = $rs->where('province',$province_name);
        }

        if (!empty($typeofregis)) {
            $rs = $rs->where('typeofregis',$typeofregis);
        }

        $rs = $rs->orderBy('idn','desc')->paginate($perPage);

        return view('result', compact('rs'));
    }

    // รายละเอียดชื่อคน
    public function detail($id){
        $rs = RegisJob::findOrFail($id);
        return view('detail', compact('rs'));
    }

    // บันทึกคะแนน & ข้อเสนอแนะ
    public function addscore(Request $request){
        $requestData = $request->all();
        RegisJobScore::create($requestData);
        set_notify('success', 'ขอบพระคุณ ที่ประเมินความพึงพอใจและให้ข้อเสนอแนะ');
        return redirect()->back();
    }
}
