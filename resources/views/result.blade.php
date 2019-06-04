@extends('layouts.front')

@section('content')
    <?php
        // สาขาช่าง
        $services = App\Model\RegisJobService::orderBy('service_id', 'asc')->get();

        // จังหวัด
        $provinces = App\Model\RegisJobPrv::where('province_code','<>','00')->orderBy('province_code', 'asc')->get();

        // สี badge
        $badgeColor = array(
            'ผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงาน'=>'badge-secondary',
            'ผู้ผ่านการฝึกอบรม'=>'badge-warning',
            'ผู้ผ่านการรับรองความรู้ความสามารถ'=>'badge-success'
        );
    ?>

    <!-- Banner Area Starts -->
    <section class="header-area single-page">
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>ค้นหาช่าง</h2>
                        <p>ตามสาขาและพื้นที่ที่ท่านต้องการ</p>
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
                                <input class="form-control form-control-lg" type="text" name="tnames" value="{{ request('tnames') }}" placeholder="ชื่อ - สกุล" style="width:100%;">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                <select name="service_id" class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    @foreach($services as $row)
                                        <option value="{{ $row->service_id }}" @if(request('service_id') == $row->service_id) selected @endif>{{ $row->service_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                <select name="province_name" class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    <option value="">เลือกจังหวัดในพื้นที่ของท่าน</option>
                                    @foreach($provinces as $row)
                                        <option value="{{ $row->prv1 }}" @if(request('province_name') == $row->prv1) selected @endif>{{ $row->prv1 }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                <select name="typeofregis" class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    <option value="">การรับรอง</option>
                                    <option value="ผู้ผ่านการฝึกอบรม" @if(request('typeofregis') == 'ผู้ผ่านการฝึกอบรม') selected @endif>ผู้ผ่านการฝึกอบรม</option>
                                    <option value="ผู้ผ่านการรับรองความรู้ความสามารถ" @if(request('typeofregis') == 'ผู้ผ่านการรับรองความรู้ความสามารถ') selected @endif>ผู้ผ่านการรับรองความรู้ความสามารถ</option>
                                    <option value="ผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงาน" @if(request('typeofregis') == 'ผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงาน') selected @endif>ผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงาน</option>
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


    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @if($rs->count() == 0)
                        <div class="text-center">ไม่พบข้อมูล</div>
                    @endif

                    <!-- วนลูปผลการค้นหาตรงนี้ -->
                    @foreach($rs as $row)
                    <a href="{{ url('detail/'.$row->idn) }}">
                        <div class="single-job mb-4 d-lg-flex justify-content-between">
                            <div class="job-text">
                                <h4>{{ !empty($row->tnames)? $row->tnames : '-' }}</h4>
                                <ul class="mt-4">
                                    <li class="mb-3"><h5><i class="fas fa-map-marker-alt"></i> {{ !empty($row->home_address)? $row->home_address : '-' }}</h5></li>
                                    <li class="mb-3"><h5><i class="fas fa-phone"></i> โทรศัพท์: {{ !empty($row->tel1)? $row->tel1 : '-' }}</h5></li>
                                    <li class="mb-3"><h5><span class="badge badge-pill {{$badgeColor[$row->typeofregis]}}">{{ !empty($row->typeofregis)? $row->typeofregis : '-' }}</span></h5></li>
                                </ul>
                            </div>
                            <div class="job-img align-self-center">
                                <img src="{{ url('comport_theme/assets/images/icon/'.serviceID_2_icon(@$_GET['service_id'])) }}" alt="{{ serviceID_2_name(@$_GET['service_id']) }}" width="48">
                            </div>
                        </div>
                    </a>
                    @endforeach
                    <!-- วนลูปผลการค้นหาตรงนี้ -->

                </div>
            </div>
            <div class="more-job-btn mt-5 text-center">
                {{ $rs->appends(@$_GET)->render() }}
            </div>
        </div>
    </section>
    <!-- Jobs Area End -->


@endsection
