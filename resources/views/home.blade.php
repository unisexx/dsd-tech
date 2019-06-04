@extends('layouts.front')

@section('content')
    <?php
        // สาขาช่าง
        $services = App\Model\RegisJobService::orderBy('service_id', 'asc')->get();

        // จังหวัด
        $provinces = App\Model\RegisJobPrv::where('province_code','<>','00')->orderBy('province_code', 'asc')->get();
    ?>

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text">
                        <h1>บริการ<span>ค้นหา</span> ติดต่อช่างเพื่อใช้บริการที่บ้านด้วยตัวท่านเอง</h1>
                        <p class="py-3">โดยช่างที่มีฝีมือ มีมาตรฐาน ผ่านการรับรองจากกรมพัฒนาฝีมือแรงงาน กระทรวงแรงงาน</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="result" class="d-md-flex flex-wrap justify-content-start" role="search">
                            <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                <input class="form-control form-control-lg" type="text" name="tnames" value="" placeholder="ชื่อ - สกุล" style="width:100%;">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                <select name="service_id" class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    @foreach($services as $row)
                                        <option value="{{ $row->service_id }}">{{ $row->service_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                <select name="province_name" class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    <option value="">เลือกจังหวัดในพื้นที่ของท่าน</option>
                                    @foreach($provinces as $row)
                                        <option value="{{ $row->prv1 }}">{{ $row->prv1 }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                <select name="typeofregis" class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    <option value="">การรับรอง</option>
                                    <option value="ผู้ผ่านการฝึกอบรม">ผู้ผ่านการฝึกอบรม</option>
                                    <option value="ผู้ผ่านการรับรองความรู้ความสามารถ">ผู้ผ่านการรับรองความรู้ความสามารถ</option>
                                    <option value="ผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงาน">ผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงาน</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <button type="submit" class="template-btn">ค้นหา</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Area End -->


    <!-- Category Area Starts -->
    <section class="category-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>ค้นหาช่างตามสาขา</h2>
                        <p>คลิกที่รูปเพื่อค้นหาช่าง</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $row)
                <div class="col-lg-3 col-md-6">
                    <a href="{{ url('result?service_id='.$row->service_id) }}">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/'.serviceID_2_icon($row->service_id)) }}" alt="{{ $row->service_name }}" width="48">
                            <h4>{{ $row->service_name }}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Category Area End -->


@endsection
