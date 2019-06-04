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
                            <h4>{{ $rs->tnames }}</h4>
                            <p>({{ $rs->typeofregis }})</p>
                            <p>สาขาช่างหลัก</p>
                            <ul>
                            @for ($i = 1; $i <= 18; $i++)
                                @if( !empty($rs->{'name_service'.$i}) )
                                <li class="mb-2">- {{ $rs->{'name_service'.$i} }}</li>
                                @endif
                            @endfor
                            </ul>
                        </div>
                        <div class="single-content3 py-4">
                            <h4>ช่องทางการติดต่อ</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fas fa-map-marker-alt"></i> ที่อยู่: {{ !empty($rs->home_address)? $rs->home_address : '-' }}</h5></li>
                                <li class="mb-3"><h5><i class="fas fa-phone"></i> โทรศัพท์: {{ !empty($rs->tel1)? $rs->tel1 : '-' }}</h5></li>
                                <li class="mb-3"><h5><i class="fas fa-envelope-open-text"></i> อีเมล์: {{ !empty($rs->email1)? $rs->email1 : '-' }}</h5>
                                <li class="mb-3"><h5><i class="fab fa-line"></i> ไลน์ไอดี: {{ !empty($rs->line_id)? $rs->line_id : '-' }}</h5>
                                <li class="mb-3"><h5><i class="fab fa-facebook-square"></i> เฟสบุค: {{ !empty($rs->facebook)? $rs->facebook : '-' }}</h5>
                            </ul>
                        </div>
                        <div class="single-content4 py-4">
                            <h4>ความสามารถอื่นด้านช่าง</h4>
                            <p>{{ !empty($rs->name_service_etc)? $rs->name_service_etc : '-' }}</p>
                        </div>
                        <div class="single-content5 py-4">
                            <h4>สอบถามรายละเอียดเพิ่มเติม</h4>
                            <p>{{ !empty($rs->site)? $rs->site : '-' }}</p>
                            <ul class="mt-4">
                                <li class="mb-3 list-unstyled"><h5><i class="fas fa-phone"></i> โทรศัพท์: {{ !empty($rs->dept->phone)? $rs->dept->phone : '-' }}</h5></li>
                                <li class="mb-3 list-unstyled"><h5><i class="fas fa-fax"></i> โทรสาร: {{ !empty($rs->dept->fax)? $rs->dept->fax : '-' }}</h5></li>
                                <li class="mb-3 list-unstyled"><h5><i class="fab fa-chrome"></i> เว็บไซต์: {{ !empty($rs->dept->website)? $rs->dept->website : '-' }}</h5></li>
                            </ul>
                        </div>
                        <div class="single-content6 py-4">
                            <form method="POST" action="{{ url('addscore') }}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <h4>ประเมินความพึงพอใจ</h4>
                                <div id="rateYo"></div>
                                <div class="counter"></div>
                                <div style="margin-top:15px;">ข้อเสนอแนะ :</div>
                                <textarea name="commentt" rows="7" placeholder="โปรดเสนอแนะข้อคิดเห็นเพื่อนำไปปรับปรุงการให้บริการ" style="width:100%;"></textarea>
                                <input type="hidden" name="score" value="4">
                                <input type="hidden" name="idn" value="{{ $rs->idn }}">
                                <button type="submit" class="genric-btn primary">ส่งแบบประเมิน</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Single Content End -->


@endsection
