@extends('layouts.app')
@section('content')
    <br><br>
    <div class="container">
        <h2 class="text-center text-uppercase">WHAT We <span class="orange-txt">DO</span></h2>
        <div class="border-creative text-center"><img src="{{ asset('assets/imgs/borders/border.png') }}" alt="" />
        </div>
        <div class="col-xs-8">
            <div class="col-xs-5 text-uppercase fancy-txt montserrat wow fadeInLeft" data-wow-duration="900ms"
                data-wow-delay="200ms">We like build things with fun.
            </div>
            <div class="col-xs-7 top-txt wow fadeIn" data-wow-duration="900ms" data-wow-delay="400ms">
                <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der
                    Industrie bereits der Standard Demo-Text seit.</p>
                <p>Glauben oder nicht glauben, Lorem Ipsum ist nicht nur ein zufälliger Text. Er hat Wurzeln aus der
                    Lateinischen Literatur von 45 v. Chr, was ihn über 2000 Jahre alt macht. Richar McClintock, ein
                    Lateinprofessor des Hampden-Sydney College in Virgnia untersuche einige undeutliche Worte.</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-xs-4 no-padding wow fadeInRight" data-wow-duration="900ms" data-wow-delay="600ms"><img
                src="{{ asset('assets/imgs/about/abt.png') }}" alt="" class="img-responsive home-abt" /></div>
        <div class="clearfix"></div>
    </div>

    <!-- About Us -->
    <div class="content-section light-bg top-tabs">
        <div class="container">
            <h2 class="text-center text-uppercase">About <span class="orange-txt">Us</span></h2>
            <div class="border-creative text-center"><img src="{{ asset('assets/imgs/borders/border.png') }}"
                    alt="" /></div>
            <div class="tabs-left">
                <div class="col-xs-3 no-padding wow fadeInLeft" data-wow-duration="900ms" data-wow-delay="200ms">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#a" data-toggle="tab"
                                style="background-color:#ffb800;"><span class="number-div"><i
                                        class="flaticon-engineer"></i></span><span class="tab-txt">General
                                    Contracting</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#b" data-toggle="tab"><span
                                    class="number-div"><i class="flaticon-caution"></i></span> <span
                                    class="tab-txt">Construction
                                    Services</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#c" data-toggle="tab"><span
                                    class="number-div"><i class="flaticon-paint"></i></span> <span class="tab-txt">Building
                                    Modeling</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#d" data-toggle="tab"><span
                                    class="number-div"><i class="flaticon-settings"></i></span> <span
                                    class="tab-txt">Pre-construction</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="#e" data-toggle="tab"><span
                                    class="number-div"><i class="flaticon-transport"></i></span> <span
                                    class="tab-txt">Management</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-9 wow fadeInRight" data-wow-duration="900ms" data-wow-delay="400ms">
                    <div class="tab-content">
                        <div class="tab-pane active" id="a">
                            <div class="col-xs-6 no-padding"><img src="{{ asset('assets/imgs/tab/tab.jpg') }}"
                                    alt="" class="img-fluid" />
                            </div>
                            <div class="col-xs-6">
                                <h3>Our Company</h3>
                                <p>We have rich experience in executing civil, electrical, mechanical, and waterworks for
                                    multiple industries like steel, power, metals, etc. We have in-house design and
                                    engineering teams that employ advanced construction methods to execute complex projects
                                    in diverse terrains.</p>
                                <div class="icon-listing">
                                    <ul class="no-margin no-padding">
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">BUILDING MODELING</p>
                                                <p>End to End Building Constructions Contractorship - New Buildings, High
                                                    Rise Buildings Construction , Renovation of Buildings.
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-building" aria-hidden="true"></i> </div>
                                            <div class="icon-txt">
                                                <p class="lead">Industrial Construction</p>
                                                <p>End to End Industrial Constructions Contractorship - New Industrial
                                                    Construction , Renovation of Industries , Factories , Warehouses.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Home / Villa Construction</p>
                                                <p>Home and Villa Contractorship to build your dream house

                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="tab-pane" id="b">
                            <div class="col-xs-6 no-padding"><img src="{{ asset('assets/imgs/tab/tab-2.jpg') }}"
                                    alt="" class="img-fluid" /></div>
                            <div class="col-xs-6">
                                <h3>Construction Services</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since.</p>
                                <div class="icon-listing">
                                    <ul class="no-margin no-padding">
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Building Modeling</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                                            <div class="icon-txt">
                                                <p class="lead">Who we are</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Our Achievements</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="c">
                            <div class="col-xs-6 no-padding"><img src="{{ asset('assets/imgs/tab/tab-3.jpg') }}"
                                    alt="" class="img-fluid" /></div>
                            <div class="col-xs-6">
                                <h3>Building Modeling</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since.</p>
                                <div class="icon-listing">
                                    <ul class="no-margin no-padding">
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Building Modeling</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                                            <div class="icon-txt">
                                                <p class="lead">Who we are</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Our Achievements</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="d">
                            <div class="col-xs-6 no-padding"><img src="{{ asset('assets/imgs/tab/tab-4.jpg') }}"
                                    alt="" class="img-fluid" /></div>
                            <div class="col-xs-6">
                                <h3>Pre-construction</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since.</p>
                                <div class="icon-listing">
                                    <ul class="no-margin no-padding">
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Building Modeling</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                                            <div class="icon-txt">
                                                <p class="lead">Who we are</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Our Achievements</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="e">
                            <div class="col-xs-6 no-padding"><img src="{{ asset('assets/imgs/tab/tab-5.jpg') }}"
                                    alt="" class="img-fluid" />
                            </div>
                            <div class="col-xs-6">
                                <h3>Management</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since.</p>
                                <div class="icon-listing">
                                    <ul class="no-margin no-padding">
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Building Modeling</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                                            <div class="icon-txt">
                                                <p class="lead">Who we are</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li>
                                            <div class="icon-cont"> <i class="fa fa-line-chart" aria-hidden="true"></i>
                                            </div>
                                            <div class="icon-txt">
                                                <p class="lead">Our Achievements</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /col -->
        </div>
    </div>


    <div class="work-with-us">
        <div class="container">
            <h2 class="text-white text-center">Are you looking to work with us?</h2>
            <div class="text-center"><a href="#" class="btn btn-dark"><i class="fa fa-mobile-alt"></i>
                    +959 767670487</a></div>
        </div>
    </div>
    <div class="content-section company-certification" id="set-7"> <img
            src="{{ asset('assets/imgs/services-right.jpg') }}" class="img-responsive right-services" alt="" />
        <div class="container">
            <div class="heading text-center"><img src="{{ asset('assets/imgs/home/helmet.svg') }}" alt=""
                    title="" width="35" height="35" class="mb-2">
            </div>
            <h2 class="text-center text-uppercase">Our <span class="orange-txt">Services</span></h2>
            <div class="border-creative text-center"><img src="{{ asset('assets/imgs/borders/border.png') }}"
                    alt="" /></div>
            <div class="row">
                <div class="col-xs-3 col-lg-3 col-lg-3text-center">
                    <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp" data-wow-duration="900ms"
                        data-wow-delay="100ms">
                        <div class="hi-icon"><img src="{{ asset('assets/imgs/circle-icons/contracting.png') }}"
                                class="img-1" alt="" /><img
                                src="{{ asset('assets/imgs/circle-icons/contracting-hover.png') }}" class="img-2"
                                alt="" /></div>
                    </div>
                    <div class="wow fadeInDown" data-wow-duration="900ms" data-wow-delay="150ms">
                        <h3 class="open-sans">General Contracting</h3>

                    </div>
                </div>
                <div class="col-xs-3 col-lg-3 text-center">
                    <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp" data-wow-duration="900ms"
                        data-wow-delay="200ms">
                        <div class="hi-icon"><img src="{{ asset('assets/imgs/circle-icons/building.png') }}"
                                class="img-1" alt="" /><img
                                src="{{ asset('assets/imgs/circle-icons/building-hover.png') }}" class="img-2"
                                alt="" /></div>
                    </div>
                    <div class="wow fadeInDown" data-wow-duration="900ms" data-wow-delay="250ms">
                        <h3 class="open-sans">Building Modeling</h3>

                    </div>
                </div>
                <div class="col-xs-3 col-lg-3 text-center">
                    <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp" data-wow-duration="900ms"
                        data-wow-delay="300ms">
                        <div class="hi-icon"><img src="{{ asset('assets/imgs/circle-icons/design.png') }}"
                                class="img-1" alt="" /><img
                                src="{{ asset('assets/imgs/circle-icons/design-hover.png') }}" class="img-2"
                                alt="" />
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-duration="900ms" data-wow-delay="350ms">
                        <h3 class="open-sans">Building Design</h3>

                    </div>
                </div>
                <div class="col-xs-3 col-lg-3 text-center">
                    <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7a wow fadeInUp" data-wow-duration="900ms"
                        data-wow-delay="400ms">
                        <div class="hi-icon"><img src="{{ asset('assets/imgs/circle-icons/services.png') }}"
                                class="img-1" alt="" /><img
                                src="{{ asset('assets/imgs/circle-icons/services-hover.png') }}" class="img-2"
                                alt="" /></div>
                    </div>
                    <div class="wow fadeInDown" data-wow-duration="900ms" data-wow-delay="450ms">
                        <h3 class="open-sans">Construction Services</h3>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="content-section counter-section text-center">
        <div class="pattern-2"></div>
        <div class="container">
            <div class="col-xs-3">
                <div class="counter-div">
                    <div class="stats-2-img"> <i class="fa fa-suitcase" aria-hidden="true"></i> </div>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='120'
                        data-delay='.5' data-increment="1">324</div>
                    <p class="montserrat">project completed</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="counter-div">
                    <div class="stats-2-img"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='324'
                        data-delay='.5' data-increment="1">324</div>
                    <p class="montserrat">workers & stuffs</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="counter-div">
                    <div class="stats-2-img"> <i class="fa fa-trophy" aria-hidden="true"></i> </div>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='70'
                        data-delay='.5' data-increment="1">324</div>
                    <p class="montserrat">awards won</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="counter-div">
                    <div class="stats-2-img"> <i class="fa fa-bar-chart" aria-hidden="true"></i> </div>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='350'
                        data-delay='.5' data-increment="1">324</div>
                    <p class="montserrat">Features</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="content-section news-section">
        <div class="container">
            <h2 class="text-center text-uppercase">Our Latest <span class="orange-txt">News</span></h2>
            <div class="border-creative text-center"><img src="{{ asset('assets/imgs/borders/border.png') }}"
                    alt="" /></div>
            <div id="owl-demo" class="owl-carousel owl-carousel-3 owl-theme wow fadeIn owl-loaded owl-drag"
                data-wow-duration="900ms" data-wow-delay="250ms">
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-1.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-2.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-3.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-4.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-1.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-2.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-3.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <div class="grid cs-style-3">
                            <div class="figure">
                                <div class="overlay-div montserrat">
                                    <div class="linkss"><a href="blog-details.html"><span><i class="fa fa-search"
                                                    aria-hidden="true"></i></span></a> </div>
                                </div>
                                <img src="{{ asset('assets/imgs/news/news-4.jpg') }}" class="img-fluid" alt="img04">
                                <div class="figcaption">
                                    <div class="heading montserrat">
                                        <h3>Neque porro quisquam </h3>
                                    </div>
                                    <div class="news-detls">
                                        <ul class="no-margin no-padding montserrat">
                                            <li><i class="fa fa-user" aria-hidden="true"></i> ADMIN</li>
                                            <li><i class="fa fa-heart" aria-hidden="true"></i> 126</li>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 12 May, 2021</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
