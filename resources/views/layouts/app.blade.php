<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIP Design Construction Company @yield('title')</title>
    <link href="{{ asset('assets/css/default.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('data/logo.jpg') }}" type="image/x-icon">
    <meta content="" name="VIP Design Construction Company">
    <meta name="keywords" content="VIP Design Construction Company" />
    <meta property="og:title" content="VIP Design Construction Company" />
    <meta property="og:image" content="{{ asset('data/logo.jpg') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="VIP Design Construction Company" />
</head>

<body class="loading">
    <div id="preloader" hidden></div>

    @include('layouts.menu')
    @if (URL::current() == route('welcome'))
        @include('layouts.slider')
    @endif
    @yield('content')
    @include('layouts.footer')

    <!-- Form Script -->
    <script src="{{ asset('assets/js/ajax.js') }}"></script>
    <script src="{{ asset('assets/js/formValidation.js') }}"></script>
    <!-- JavaScript Library-->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <!-- Bootstrap v5.0.2 JavaScript -->
    <script src="{{ asset('assets/home/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.staff.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-index.js') }}"></script>
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/cbpAnimatedHeader.js') }}"></script>

    <script src="assets/js/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/part-int.js"></script>


    <!-- Amazing Slider -->
    <script src="{{ asset('assets/js/amazing-slider-plugin/thumb-slider/thumb-slider-jquery.js') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/js/amazing-slider-plugin/thumb-slider/thumb-slider.css') }}">
    <script src="{{ asset('assets/js/amazing-slider-plugin/thumb-slider/thumb-slider.js') }}"></script>

    <!-- Number Counter -->
    <script src="{{ asset('assets/js/numscroller-1.0.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    <script type="text/javascript">
        $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
            var src = $(this).attr('src');
            var modal;

            function removeModal() {
                modal.remove();
                $('body').off('keyup.modal-close');
            }
            modal = $('<div>').css({
                background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
                backgroundSize: 'contain',
                width: '100%',
                height: '100%',
                position: 'fixed',
                zIndex: '10000',
                top: '0',
                left: '0',
                cursor: 'zoom-out'
            }).click(function() {
                removeModal();
            }).appendTo('body');
            //handling ESC
            $('body').on('keyup.modal-close', function(e) {
                if (e.key === 'Escape') {
                    removeModal();
                }
            });
        });
    </script>

    @yield('script')
</body>

</html>
