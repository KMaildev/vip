<!-- Header Carousel -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="bottom-twt">
        <div class="container pos-relative">
            <div class="col-xs-12 text-center">
                <div class="news-letter-top text-center" style="position:relative; display: inline-block;"> <a
                        id="subscribe" class="scrollup" href="{{ route('contact.index') }}">
                        Contact Us
                        <div class="clearfix"></div>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url({{ asset('data/slider1.jpg') }})">
        </div>
        <div class="carousel-item" style="background-image: url({{ asset('data/slider2.jpg') }})">
        </div>
        <div class="carousel-item" style="background-image: url({{ asset('data/slider3.jpg') }})">
        </div>
    </div>
</div>
<!--\\ Inner Header -->
