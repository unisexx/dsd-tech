@extends('layouts.front')

@section('content')

<!-- Preloader Starts -->
<div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
	<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{ url('comport_theme/assets/images/logo2.png') }}" alt="logo" width="200"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.html">หน้าแรก</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Blog Home</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">contact</a></li>
                            <li><a href="#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="job-search.html">Job Search</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="menu-btn">
                                <a href="#" class="login">log in</a>
                                <a href="#" class="template-btn">sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

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
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/cable.png') }}" alt="category" width="48">
                            <h4>ช่างเดินสายไฟฟ้าภายในอาคาร</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/air.png') }}" alt="category" width="48">
                            <h4>ช่างซ่อมเครื่องปรับอากาศ</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/car.png') }}" alt="category" width="48">
                            <h4>ช่างซ่อมรถยนต์</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/welder.png') }}" alt="category" width="48">
                            <h4>ช่างเชื่อม</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/pc.png') }}" alt="category" width="48">
                            <h4>ช่างซ่อมคอมพิวเตอร์</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/oven.png') }}" alt="category" width="48">
                            <h4>ช่างซ่อมเครื่องใช้ไฟฟ้าในบ้าน</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/bike.png') }}" alt="category" width="48">
                            <h4>ช่างซ่อมรถจักรยานยนต์</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/tile.png') }}" alt="category" width="48">
                            <h4>ช่างปูกระเบื้อง</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/painter.png') }}" alt="category" width="48">
                            <h4>ช่างสีอาคาร</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/construct.png') }}" alt="category" width="48">
                            <h4>ช่างก่อสร้าง / ต่อเติมอาคาร</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/brick.png') }}" alt="category" width="48">
                            <h4>ช่างก่ออิฐฉาบปูน</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/window.png') }}" alt="category" width="48">
                            <h4>ช่างทำมุ้งลวด / เหล็กดัด</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/shower.png') }}" alt="category" width="48">
                            <h4>ช่างประปา / สุขภัณฑ์</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="single-category text-center mb-4">
                            <img src="{{ url('comport_theme/assets/images/icon/technician.png') }}" alt="category" width="48">
                            <h4>ช่างอเนกประสงค์(ช่างชุมชน)</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Area End -->

    <!-- Footer Area Starts -->
    <footer class="footer-area" style="padding:1px 0 20px;">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <span>
                            สงวนลิขสิทธิ์ 2562 ร้านช่างประชารัฐ <a href="http://www.dsd.go.th/" target="_blank"><u>กรมพัฒนาฝีมือแรงงาน กระทรวงแรงงาน</u></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


@endsection
