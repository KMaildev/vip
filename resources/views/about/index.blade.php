@extends('layouts.app')
@section('title', 'About Us')
@section('content')
    <div class="content-section about-page-section">
        <div class="spacing pt-40 pb-40">
            <div class="container">
                <div class="about-wrp">
                    <div class="abt-bx">
                        <div class="abt-thumb">
                            <img src="{{ asset('data/about.jpg') }}" alt="srv-img6-1.jpg" class="img-fluid">
                        </div>
                        <div class="abt-us-2"> <span>About Us</span>
                            <h2>Our Company</h2>
                            <p>
                                We have rich experience in executing civil, electrical, mechanical, and waterworks for
                                multiple industries like steel, power, metals, etc. We have in-house design and engineering
                                teams that employ advanced construction methods to execute complex projects in diverse
                                terrains.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="spacing">
                <div class="container">
                    <div class="pt-20 pb-20">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fea-bx"> <i class="icon-Twister"></i>
                                    <div class="fea-bx-inf">
                                        <h4>Creative Design</h4>
                                        <p>We are confident in our creative designs and know you will love our work!</p>
                                        <br>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fea-bx"> <i class="icon-Support"></i>
                                    <div class="fea-bx-inf">
                                        <h4>Innovation</h4>
                                        <p>Our experts are dedicated to excellence in every project, big or small.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="fea-bx"> <i class="icon-Speach-BubbleDialog"></i>
                                    <div class="fea-bx-inf">
                                        <h4>Safety</h4>
                                        <p>Construction safety is a principle adhered to and enforced by construction safety managers. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="top-spac90 ">
            <div class="spacing black-layer opc7 top-spac90 bottom-spac190">
                <div class="fixed-bg" style="background-image: url(assets/imgs/backgrounds/inner-header-bg.jpg);"></div>
                <div id="prtcl2" class="particle-bx"></div>
                <div class="container text-light">
                    <div class="prchs-wrp">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-lg-6">
                                <div class="pur-mckp">
                                    <img src="{{ asset('data/2.jpg') }}" alt="img-1.jpg" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-lg-6">
                                <div class="pur-sec">
                                    <div class="pur-sec-inr">
                                        <span class="theme-clr">
                                            What are you waiting for?

                                        </span>
                                        <h2 class="text-light">
                                            OUR PROMISE
                                        </h2>
                                        <p>
                                            Your Project is our responsibility. Right from plan approval to handover,we will
                                            manage and execute your entire project.
                                        </p>
                                        <a class="btn btn-outline-warning" href="{{ route('contact.index') }}"
                                            title="">
                                            CONTACT TODAY
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
@endsection
