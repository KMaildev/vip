<!--header -->
<div class="top-header" style="background-image: url({{ asset('data/bg.jpg') }})">
    <div class="container" >
        <div class="pull-left" >
            <a href="{{ route('welcome') }}" title="Home">
                <img src="{{ asset('data/logo.jpg') }}" class="logo1" title="" alt="" style="width: 90px;" />
            </a>
        </div>
        <div class="pull-right">
            <div class="top-menu">
                <ul>
                    <li>
                        <a href="tel:09123123123">
                            <i class="fa fa-mobile-alt"></i>
                            09123123123
                        </a>
                    </li>
                    <li class="saperator">|</li>
                    <li>
                        <a href="tel:09123123123">
                            <i class="fa fa-mobile-alt"></i>
                            09123123123
                        </a>
                    </li>
                    <li class="saperator">|</li>
                    <li>
                        <a href="mailto:info@vipdesignconstruction.com">
                            <i class="fa fa-mobile-alt"></i>
                            info@vipdesignconstruction.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            {{-- <div class="top-search-div">
                <div class="top-social">
                    <ul>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://www.facebook.com/" title=""
                                    target="_blank"><i class="fa fa-facebook"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://twitter.com" title=""
                                    target="_blank"><i class="fa fa-twitter"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="http://srgit.tumblr.com/" title=""
                                    target="_blank"><i class="fa fa-tumblr"></i></a></div>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--\\ header -->

<!-- Navigation -->
<nav class="navbar fixed-top  navbar-default navbar-custom" style="background-color:#06378b;">
    {{-- <div class="parallelogram-container">
        <div class="parallelogram"></div>
    </div> --}}
    <div class="container">
        <div class="container-fluid no-padding">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                    data-bs-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                {{-- navbar-left --}}
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.index') }}">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services.index') }}">
                                Our Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.index') }}">
                                Our Projects
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('activities.index') }}">
                                Project Galleries
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog.index') }}">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>

                {{-- <div class="pull-right quote-now">
                    <a href="mailto:info@vipdesignconstruction.com">
                        Mail
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="clearfix"></div> --}}
            </div>
        </div>
    </div>
</nav>
<!--\\ Navigation -->
