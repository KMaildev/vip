@extends('layouts.app')
@section('title', 'Our Services')
@section('content')

    <div>
        <div class="spacing top-spac90 bottom-spac80">
            <div class="fixed-bg" style="background:url({{ asset('assets/imgs/backgrounds/counter-bg-2.jpg') }});"></div>
            <div id="prtcl1" class="particle-bx"></div>
            <div class="container">
                <div class="choose-plan-wrap">
                    <div class="row text-light">
                        <div class="col-md-12 col-sm-12 col-lg-8">
                            {{-- overlap150 overlap-160 owl-carousel owl-carousel-4 nav-vc --}}
                            <div class="choose-car">
                                <div class="plan-bx text-center">
                                    <div class="plan-hdr"> <i class="flaticon-043-medal"></i>
                                        <h6>General Contracting</h6>
                                        <span><sup>10:00am To 06:00:pm</sup></span>
                                    </div>
                                    <div class="plan-bdy">
                                        <ul class="pln-fctr-lst">
                                            <li>Contracting</li>
                                            <li>Construction</li>
                                            <li>Repairement</li>
                                            <li>Home Making</li>
                                            <li>Electric Works</li>
                                            <li>Other Services</li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn hrz brd-rd3" href="#" title="">Read More</a>
                                </div>
                                <div class="plan-bx text-center">
                                    <div class="plan-hdr"> <i class="flaticon-056-trophy"></i>
                                        <h6>Pre-construction</h6>
                                        <span><sup>10:00am To 06:00:pm</sup></span>
                                    </div>
                                    <div class="plan-bdy">
                                        <ul class="pln-fctr-lst">
                                            <li>Contracting</li>
                                            <li>Construction</li>
                                            <li>Repairement</li>
                                            <li>Home Making</li>
                                            <li>Electric Works</li>
                                            <li>Other Services</li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn hrz brd-rd3" href="#" title="">Read More</a>
                                </div>
                                <div class="plan-bx text-center">
                                    <div class="plan-hdr"> <i class="flaticon-075-plug"></i>
                                        <h6>Management</h6>
                                        <span><sup>10:00am To 06:00:pm</sup></span>
                                    </div>
                                    <div class="plan-bdy">
                                        <ul class="pln-fctr-lst">
                                            <li>Lorem Ipsum is simply</li>
                                            <li>text of the printing</li>
                                            <li>when an unknown printer</li>
                                            <li>It was popularised in the</li>
                                            <li>Various versions have evolved</li>
                                            <li>There are many variations</li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn hrz brd-rd3" href="#" title="">Read More</a>
                                </div>
                            </div>
                            <!-- Choose Carousel -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="sec-tile pt-40"> <i class="text-uppercase">Service</i>
                                <h2 class="mb-15 font-30">Choose the Service</h2>
                                <p class="mb-15 font-18">Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet
                                    rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <a class="theme-btn mt-10 text-uppercase" href="service-details.html">View ALL Service</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Plan Wrap -->
            </div>
        </div>
    </div>


    <div class="content-section services-main">
        <h2 class="text-center text-uppercase">Our <span class="orange-txt">Services</span></h2>
        <div class="border-creative text-center"><img src="assets/imgs/borders/border.png" alt=""></div>
        <div class="container">
            <div class="row" id="what-we-do">
                <div class="col-md-4 col-sm-6"> <i class="icon-Notepad"></i>
                    <h3>Contracting</h3>
                    <p>Architevo Builder is a clean, modern, and fully responsive HTML5 Template. It designed for
                        construction company, Electric works, Repairing works, Home meaking.</p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Barricade"></i>
                    <h3>Construction</h3>
                    <p>Architevo Builder is a clean, modern, and fully responsive HTML5 Template. It designed for
                        construction company, Electric works, Repairing works, Home meaking.</p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Plaster"></i>
                    <h3>Repairment</h3>
                    <p>Architevo Builder is a clean, modern, and fully responsive HTML5 Template. It designed for
                        construction company, Electric works, Repairing works, Home meaking.</p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Home-5"></i>
                    <h3>Home Making</h3>
                    <p>Architevo Builder is a clean, modern, and fully responsive HTML5 Template. It designed for
                        construction company, Electric works, Repairing works, Home meaking.</p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Green-Energy"></i>
                    <h3>Electric works</h3>
                    <p>Architevo Builder is a clean, modern, and fully responsive HTML5 Template. It designed for
                        construction company, Electric works, Repairing works, Home meaking.</p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Pantone"></i>
                    <h3>Other services</h3>
                    <p>Architevo Builder is a clean, modern, and fully responsive HTML5 Template. It designed for
                        construction company, Electric works, Repairing works, Home meaking.</p>
                </div>
            </div>
        </div>
    </div>



@endsection
<script src="{{ asset('assets/js/custom-services.js') }}"></script>
@section('script')
@endsection
