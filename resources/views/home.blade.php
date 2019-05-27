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
                            <select class="selectpicker">
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
                            <select>
                                <option value="1">เลือกจังหวัดในพื้นที่ของท่าน</option>
                                <option value="2">Dhaka</option>
                                <option value="3">Rajshahi</option>
                                <option value="4">Barishal</option>
                                <option value="5">Noakhali</option>
                            </select>
                            <button type="submit" class="template-btn">ค้นหา</button>
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
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat1.png" alt="category">
                        <h4>accounting & Finance</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat2.png" alt="category">
                        <h4>production & operation</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat3.png" alt="category">
                        <h4>telecommunication</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat4.png" alt="category">
                        <h4>garments & textile</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-lg-0">
                        <img src="assets/images/cat5.png" alt="category">
                        <h4>marketing and sales</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-lg-0">
                        <img src="assets/images/cat6.png" alt="category">
                        <h4>engineer & architech</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-md-0">
                        <img src="assets/images/cat7.png" alt="category">
                        <h4>design & crative</h4>
                        <h5>250 open job</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center">
                        <img src="assets/images/cat8.png" alt="category">
                        <h4>customer support</h4>
                        <h5>250 open job</h5>
                    </div>
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
                            สงวนลิขสิทธิ์ 2561 ร้านช่างประชารัฐ <a href="http://www.dsd.go.th/" target="_blank"><u>กรมพัฒนาฝีมือแรงงาน กระทรวงแรงงาน</u></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


@endsection
