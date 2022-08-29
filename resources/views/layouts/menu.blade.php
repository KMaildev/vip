<!--header -->
<div class="top-header">
    <div class="container">
        <div class="pull-left">
            <a href="{{ route('welcome') }}" title="Home">
                <img src="assets/imgs/logo.png" class="logo1" title="" alt="" />
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
            <div class="top-search-div">
                <div class="top-social">
                    <ul>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://www.facebook.com/srgit/" title=""
                                    target="_blank"><i class="fa fa-facebook"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="https://twitter.com/srgit" title=""
                                    target="_blank"><i class="fa fa-twitter"></i></a></div>
                        </li>
                        <li>
                            <div class="hvr-sweep-to-right"><a href="http://srgit.tumblr.com/" title=""
                                    target="_blank"><i class="fa fa-tumblr"></i></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--\\ header -->

<!-- Navigation -->
<nav class="navbar fixed-top  navbar-default navbar-custom">
    <div class="parallelogram-container">
        <div class="parallelogram"></div>
    </div>
    <div class="container">
        <div class="container-fluid no-padding">
            <div class="navbar-header page-scroll">
                <div class="top-search-div search-div search-div-2">
                    <div class="top-search top-search-2">
                        <input type="text" placeholder="Search" />
                        <input type="submit" class="search" value="" />
                    </div>
                </div>
                <div class="pull-left fixed-menu-logo-2"><a href="index.html" title="Home"><img
                            src="assets/imgs/responsive-logo-2.png" alt="" /></a> </div>
                <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                    data-bs-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="pull-left fixed-menu-logo">
                    <a href="index.html" title="Home">
                        <img src="assets/imgs/responsive-logo.png" alt="" />
                    </a>
                </div>

                <nav class="navbar navbar-expand-sm navbar-left">
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

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Our Projects
                            </a>

                            <div class="dropdown-menu" style="width:200px;">
                                <a class="dropdown-item" href="#"
                                    style="font-size:16px; text-align: left;font-weight:bold;">
                                    Complete Projects
                                </a>
                                <a class="dropdown-item" href="#"
                                    style="font-size:16px; text-align: left;font-weight:bold;">
                                    Current Projects
                                </a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('activities.index') }}">
                                Activities
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

                <div class="pull-right quote-now">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal3">
                        Quote Now
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
<!--\\ Navigation -->
