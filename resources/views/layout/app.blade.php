<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @hasSection('title')
            @yield('title') :: Charity Call Foundation
        @else
            Charity Call Foundation
        @endif
    </title>
    
    <meta name="description" content="{{ setting('meta_description', 'DDestiny Call Foundation is a nonprofit organization established to nurture leadership excellence, entrepreneurial thinking, and social responsibility among youth and women—particularly in underserved communities across Nigeria and beyond. We believe that sustainable development begins with empowered people. Through carefully designed programs, mentorship networks, and strategic partnerships, we help individuals unlock their potential and translate ideas into meaningful impact.') }}">
    <meta name="keywords" content="{{ setting('meta_keywords', 'nonprofit, leadership development, entrepreneurial thinking, social responsibility, youth empowerment, women empowerment, underserved communities, Nigeria, sustainable development, mentorship, strategic partnerships') }}">
    <meta name="author" content="Destiny Call Foundation">

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="loading-logo" src="{{asset('assets/images/preloader.png')}}" alt="Destiny Call Foundation ogo">
                </div>
            </div>
        </div>
    </div>
    
    @include('layout.topbar')
    
    @include('layout.header')
    
    @include('layout.sidebar')

    <main>

        @if (!Request::is('/')) 
        <section class="banner__inner-page bg-image pt-160 pb-160"
            data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}">
            <div class="container">
                <h1 class="wow fadeInUp text-white" data-wow-delay="00ms" data-wow-duration="1500ms">
                    @yield('title', 'Page Title')
                </h1>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="{{ url('/') }}">Home</a>
                    <span><i class="fa-solid fa-angles-right"></i> @yield('title', 'Page')</span>
                </div>
            </div>
        </section>
    @endif


        @yield('content')
    </main>

    @include('layout.footer')

    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/meanmenu.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>