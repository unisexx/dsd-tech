@extends('layouts.front')

@section('content')

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
                        <form action="#" class="d-md-flex justify-content-between">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <select class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    <option value="">เลือกสาขาช่าง</option>
                                    <option value="ช่างเดินสายไฟฟ้าภายในอาคาร">ช่างเดินสายไฟฟ้าภายในอาคาร</option>
                                    <option value="ช่างซ่อมเครื่องปรับอากาศ">ช่างซ่อมเครื่องปรับอากาศ</option>
                                    <option value="ช่างซ่อมรถยนต์">ช่างซ่อมรถยนต์</option>
                                    <option value="ช่างเชื่อม">ช่างเชื่อม</option>
                                    <option value="ช่างซ่อมคอมพิวเตอร์">ช่างซ่อมคอมพิวเตอร์</option>
                                    <option value="ช่างซ่อมเครื่องใช้ไฟฟ้าในบ้าน">ช่างซ่อมเครื่องใช้ไฟฟ้าในบ้าน</option>
                                    <option value="ช่างซ่อมรถจักรยานยนต์">ช่างซ่อมรถจักรยานยนต์</option>
                                    <option value="ช่างปูกระเบื้อง">ช่างปูกระเบื้อง</option>
                                    <option value="ช่างสีอาคาร">ช่างสีอาคาร</option>
                                    <option value="ช่างก่อสร้าง / ต่อเติมอาคาร">ช่างก่อสร้าง / ต่อเติมอาคาร</option>
                                    <option value="ช่างก่ออิฐฉาบปูน">ช่างก่ออิฐฉาบปูน</option>
                                    <option value="ช่างทำมุ้งลวด / เหล็กดัด">ช่างทำมุ้งลวด / เหล็กดัด</option>
                                    <option value="ช่างประปา / สุขภัณฑ์">ช่างประปา / สุขภัณฑ์</option>
                                    <option value="ช่างอเนกประสงค์(ช่างชุมชน)">ช่างอเนกประสงค์(ช่างชุมชน)</option>
                                </select>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <select class="selectpicker" data-width="100%" data-live-search="true" data-size="5" data-style="btn-light btn-lg">
                                    <option value="1">เลือกจังหวัดในพื้นที่ของท่าน</option>
                                    <option value="2">Dhaka</option>
                                    <option value="3">Rajshahi</option>
                                    <option value="4">Barishal</option>
                                    <option value="5">Noakhali</option>
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

                    <!-- วนลูปผลการค้นหาตรงนี้ -->
                    <a href="{{ url('detail/1') }}">
                        <div class="single-job mb-4 d-lg-flex justify-content-between">
                            <div class="job-text">
                                <h4>นายอนุกูล นวบุตร</h4>
                                <ul class="mt-4">
                                    <li class="mb-3"><h5><i class="fas fa-map-marker-alt"></i> ที่อยู่: 57/1 หมู่1 ต.โพสังโฆ อ.ค่ายบางระจัน จ.สิงห์บุรี 16130</h5></li>
                                    <li class="mb-3"><h5><i class="fas fa-phone"></i> โทรศัพท์: 0899002965</h5></li>
                                    <li class="mb-3"><h5><span class="badge badge-pill badge-secondary">ผู้ผ่านการทดสอบมาตรฐานฝีมือแรงงาน</span></h5></li>
                                </ul>
                            </div>
                            <div class="job-img align-self-center">
                                <img src="{{ url('comport_theme/assets/images/icon/'.serviceID_2_icon(@$_GET['service_id'])) }}" alt="{{ serviceID_2_name(@$_GET['service_id']) }}" width="48">
                            </div>
                        </div>
                    </a>

                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>นายอนุกูล นวบุตร</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fas fa-map-marker-alt"></i> ที่อยู่: 57/1 หมู่1 ต.โพสังโฆ อ.ค่ายบางระจัน จ.สิงห์บุรี 16130</h5></li>
                                <li class="mb-3"><h5><i class="fas fa-phone"></i> โทรศัพท์: 0899002965</h5></li>
                                <li class="mb-3"><h5><span class="badge badge-pill badge-warning">ผู้ผ่านการฝึกอบรม</span></h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="{{ url('comport_theme/assets/images/icon/'.serviceID_2_icon(@$_GET['service_id'])) }}" alt="{{ serviceID_2_name(@$_GET['service_id']) }}" width="48">
                        </div>
                    </div>

                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>นายอนุกูล นวบุตร</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fas fa-map-marker-alt"></i> ที่อยู่: 57/1 หมู่1 ต.โพสังโฆ อ.ค่ายบางระจัน จ.สิงห์บุรี 16130</h5></li>
                                <li class="mb-3"><h5><i class="fas fa-phone"></i> โทรศัพท์: 0899002965</h5></li>
                                <li class="mb-3"><h5><span class="badge badge-pill badge-success ">ผู้ผ่านการรับรองความรู้ความสามารถ</span></h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="{{ url('comport_theme/assets/images/icon/'.serviceID_2_icon(@$_GET['service_id'])) }}" alt="{{ serviceID_2_name(@$_GET['service_id']) }}" width="48">
                        </div>
                    </div>
                    <!-- วนลูปผลการค้นหาตรงนี้ -->

                </div>
            </div>
            <div class="more-job-btn mt-5 text-center">
                Pagination Here
            </div>
        </div>
    </section>
    <!-- Jobs Area End -->


@endsection
