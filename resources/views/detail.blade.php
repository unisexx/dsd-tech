@extends('layouts.front')

@section('content')

    <!-- Banner Area Starts -->
    <section class="header-area single-page">
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>รายละเอียดช่าง</h2>
                        <p>ร้านช่างประชารัฐ ศูนย์ช่าง กพร. บริการประชาชน</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->


    <!-- Job Single Content Starts -->
    <section class="job-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="single-content2 py-4">
                            <h4>กิจจา ศรีตระกูล</h4>
                            <p>(ผู้ผ่านการรับรองความรู้ความสามารถ)</p>
                            <p>สาขาช่างหลัก</p>
                            <ul>
                                <li class="mb-2">- ช่างเดินสายไฟฟ้าภายในอาคาร</li>
                                <li class="mb-2">- ช่างซ่อมเครื่องใช้ไฟฟ้าในบ้าน</li>
                                <li class="mb-2">- ช่างประปา/สุขภัณฑ์</li>
                            </ul>
                        </div>
                        <div class="single-content3 py-4">
                            <h4>ช่องทางการติดต่อ</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fas fa-map-marker-alt"></i> ที่อยู่: 57/1 หมู่1 ต.โพสังโฆ อ.ค่ายบางระจัน จ.สิงห์บุรี 16130</h5></li>
                                <li class="mb-3"><h5><i class="fas fa-phone"></i> โทรศัพท์: 0899002965</h5></li>
                                <li class="mb-3"><h5><i class="fas fa-envelope-open-text"></i> -</h5>
                                <li class="mb-3"><h5><i class="fab fa-line"></i> -</h5>
                                <li class="mb-3"><h5><i class="fab fa-facebook-square"></i> -</h5>
                            </ul>
                        </div>
                        <div class="single-content4 py-4">
                            <h4>ความสามารถอื่นด้านช่าง</h4>
                            <p>-</p>
                        </div>
                        <div class="single-content5 py-4">
                            <h4>สอบถามรายละเอียดเพิ่มเติม</h4>
                            <p>สถาบันพัฒนาฝีมือแรงงาน 3 ชลบุรี</p>
                            <ul class="mt-4">
                                <li class="mb-3 list-unstyled"><h5><i class="fas fa-phone"></i> โทรศัพท์: 0899002965</h5></li>
                                <li class="mb-3 list-unstyled"><h5><i class="fas fa-fax"></i> โทรสาร: 0899002965</h5></li>
                                <li class="mb-3 list-unstyled"><h5><i class="fab fa-chrome"></i> เว็บไซต์: 0899002965</h5></li>
                            </ul>
                        </div>
                        <div class="single-content6 py-4">
                            <h4>ประเมินความพึงพอใจ</h4>
                            <div id="rateYo"></div>
                            <div class="counter"></div>
                            <div style="margin-top:15px;">ข้อเสนอแนะ :</div>
                            <textarea name="message" rows="7" placeholder="โปรดเสนอแนะข้อคิดเห็นเพื่อนำไปปรับปรุงการให้บริการ" style="width:100%;"></textarea>
                            <button type="submit" class="genric-btn primary">ส่งข้อเสนอแนะ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Single Content End -->


@endsection
