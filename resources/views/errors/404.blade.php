@extends('layout.app')

@section('title', 'Page Not Found')

@section('content')
<section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="assets/images/banner/banner-inner-page.jpg">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Page Not Found</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>404</span>
                </div>
            </div>
        </section>
        
        <section class="error-area pt-120 pb-120">
            <div class="container">
                <div class="error__item">
                    <div class="image mb-60">
                        <img src="assets/images/error/404.png" alt="image">
                    </div>
                    <h2>Whoops! This Page got Lost
                        in converstion</h2>
                    <div class="btn-two mt-50">
                        <span class="btn-circle">
                        </span>
                        <a href="index.html" class="btn-inner">
                            <span class="btn-text">
                                GO BACK HOME
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection