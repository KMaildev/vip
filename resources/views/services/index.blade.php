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
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            {{-- overlap150 overlap-160 owl-carousel owl-carousel-4 nav-vc --}}
                            <div class="choose-car">
                                <div class="plan-bx text-center">
                                    <div class="plan-hdr">
                                        <i class="flaticon-043-medal"></i>
                                        <h6>VIP Design & Construction</h6>
                                    </div>

                                    <div class="plan-bdy">
                                        <ul class="pln-fctr-lst" style="text-align: left;">
                                            <li style="font-size: 16px;">
                                                <i class="fa fa-home"></i>
                                                Construction Services
                                            </li>
                                            <li>
                                                <i class="fa fa-home"></i>
                                                Decoration Services
                                            </li>
                                            <li>
                                                <i class="fa fa-home"></i>
                                                Engineering Services
                                            </li>
                                            <li>
                                                <i class="fa fa-home"></i>
                                                Consultation Services
                                            </li>
                                            <li>
                                                <i class="fa fa-home"></i>
                                                Architectual Design
                                            </li>
                                            <li>
                                                <i class="fa fa-home"></i>
                                                General Contracting
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Choose Carousel -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="sec-tile">
                                <h2 class="font-30">
                                    Our Services
                                </h2>
                                <p class="font-18">
                                    VIP Design Construction possesses a great knowledge and can execute some engineering
                                    works with different types of architecture in a good indication of quality construction.
                                    It is undertaking the following services for the satisfaction of the customers.
                                </p>
                            </div>

                            <div class="sec-tile">
                                <h2 class="font-30">
                                    Why Us
                                </h2>
                                <p class="font-18">
                                    As our company focuses on construction, we are building with the aim of systematically
                                    and consistently upgrading the quality of work according to engineering standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Plan Wrap -->
            </div>
        </div>
    </div>


    <div class="content-section services-main">
        <h2 class="text-center text-uppercase">Our <span class="orange-txt"> Culture</span></h2>
        <div class="border-creative text-center"><img src="{{ asset('assets/imgs/borders/border.png') }}" alt=""></div>
        <div class="container">
            <div class="row" id="what-we-do">
                <div class="col-md-4 col-sm-6"> <i class="icon-Notepad"></i>
                    <h3>Accountability</h3>
                    <p>
                        Have responsibility and good conscience with awareness of the organization’s overall results with honesty and ethical standards.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Barricade"></i>
                    <h3>Can-Do Attitude</h3>
                    <p>
                        Using a positive and “Can-Do” attitude to seize the moment and realize the opportunity. Think of obstacles as challenges then strive for success.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Plaster"></i>
                    <h3>Collaborative</h3>
                    <p>
                        To cooperate and support each other by sharing ideas and listening. In order to create and expand success.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Home-5"></i>
                    <h3>Learning and Development</h3>
                    <p>
                        Open mind to learn new things. Continuous self improvement with modern knowledge and skill set.
                    </p>
                </div>
                <div class="col-md-4 col-sm-6"> <i class="icon-Green-Energy"></i>
                    <h3>Customer Centric</h3>
                    <p>Being service minded. Emphasizing and adhering to the customer’s success is the first priority.</p>
                </div>

                <div class="col-md-4 col-sm-6" hidden> 
                    <i class="icon-Pantone"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{ asset('assets/js/custom-services.js') }}"></script>
@section('script')
@endsection
