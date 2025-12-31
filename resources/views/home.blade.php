@extends('layout.app')

@section('content')
        <section class="banner-two-area">
            <div class="swiper banner-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-image1.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay=".3s">Destiny Call Foundation is a nonprofit organization dedicated to raising a new generation of visionary leaders, entrepreneurs, and changemakers—especially youth and women in underserved communities.</h4>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Reigniting Purpose. Empowering Leaders. Creating Impact.</h1>
                                <div class="btn-one mt-50" data-animation="fadeInUp" data-delay="1s">
                                    <span class="btn-circle">
                                    </span>
                                    <a href="/" class="btn-inner">
                                        <span class="btn-text">
                                            DONATE NOW
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-image2.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay=".3s">Raising a Rare Breed of Purpose-Driven Leaders</h4>
                                <h1 data-animation="fadeInUp" data-delay=".5s">We believe Africa’s future depends on empowered leaders with strong values, global competence, and a passion for social impact. At Destiny Call Foundation, leadership is built with intention.</h1>
                                <div class="btn-one mt-50" data-animation="fadeInUp" data-delay="1s">
                                    <span class="btn-circle">
                                    </span>
                                    <a href="/" class="btn-inner">
                                        <span class="btn-text">
                                            DONATE NOW
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-two__arry-btn">
                <button class="arry-prev mb-15 banner-two__arry-prev active"><i
                        class="fa-light fa-chevron-left"></i></button>
                <button class="arry-next banner-two__arry-next"><i class="fa-light fa-chevron-right"></i></button>
            </div>
            <ul class="banner-two__social">
                <li>
                    <a href="{{setting('company_facebook') ?? '#'}}"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="{{setting('company_twitter') ?? '#'}}" class="active"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href="{{setting('company_instagram') ?? '#'}}"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
            <div class="banner-two__shape wow slideInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <img class="banner__line__animation" src="assets/images/shape/banner-line.png" alt="shape">
            </div>
        </section>

        <!-- About area start here -->
        <section class="about-area pt-120 pb-120">
            <div class="container">
                <div class="row g-2 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about__image">
                            <div class="dots about-dot__animation">
                                <img src="assets/images/shape/about-dot.png" alt="dots">
                            </div>
                            <div class="sm-image">
                                <img src="assets/images/about/about-image2.png" alt="child 1">
                            </div>
                            <div class="image">
                                <img src="assets/images/about/about-image1.jpg" alt="child 2">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header mb-20">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-solid fa-angles-left pe-1"></i> ABOUT US 
                                <i class="fa-solid fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Destiny Call Foundation</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Destiny Call Foundation is a nonprofit organization committed to empowering a new generation
                                of leaders, entrepreneurs, and changemakers. We create platforms for knowledge-sharing,
                                mentorship, and high-level networking—especially for youth and women in underserved
                                communities.</p>
                        </div>
                        <div class="about__content">
                            <div class="progress-area wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="progress__title mb-10">
                                    <h5 class="fs-16">Charity</h5>
                                    <span><span class="progress-count">80</span>%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar wow slideInLeft" data-wow-duration=".8s" role="progressbar"
                                        style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 mt-10 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="col-6">
                                    <h6 class="fs-14">
                                        <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_20_5)">
                                                <path
                                                    d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                    fill="#F74F22" />
                                                <path
                                                    d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                    fill="#F74F22" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Immediate Assistance
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="fs-14">
                                        <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_20_5)">
                                                <path
                                                    d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                    fill="#F74F22" />
                                                <path
                                                    d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                    fill="#F74F22" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Quick Fundraise
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="fs-14">
                                        <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_20_5)">
                                                <path
                                                    d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                    fill="#F74F22" />
                                                <path
                                                    d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                    fill="#F74F22" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Long-Time Support
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="fs-14">
                                        <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_20_5)">
                                                <path
                                                    d="M17.4853 2.46073C17.2205 2.19547 16.7909 2.19502 16.5261 2.4596L8.38765 10.5765L5.45133 7.38742C5.1976 7.112 4.76863 7.09415 4.49276 7.34783C4.2171 7.60156 4.19945 8.03074 4.45317 8.3064L7.86776 12.0147C7.92961 12.082 8.00443 12.136 8.08771 12.1736C8.17099 12.2111 8.26101 12.2315 8.35235 12.2334C8.35731 12.2336 8.36209 12.2336 8.36683 12.2336C8.54636 12.2335 8.71855 12.1624 8.84577 12.0357L17.484 3.42018C17.7494 3.15563 17.7499 2.72598 17.4853 2.46073Z"
                                                    fill="#F74F22" />
                                                <path
                                                    d="M17.3216 8.32159C16.9469 8.32159 16.6432 8.62527 16.6432 9C16.6432 13.2146 13.2146 16.6432 9 16.6432C4.78561 16.6432 1.35679 13.2146 1.35679 9C1.35679 4.78561 4.78561 1.35679 9 1.35679C9.3747 1.35679 9.67841 1.05311 9.67841 0.67841C9.67841 0.30368 9.3747 0 9 0C4.03734 0 0 4.03734 0 9C0 13.9624 4.03734 18 9 18C13.9624 18 18 13.9624 18 9C18 8.6253 17.6963 8.32159 17.3216 8.32159Z"
                                                    fill="#F74F22" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Handle With Care
                                    </h6>
                                </div>
                            </div>
                            <div class="d-flex align-content-center flex-wrap gap-4 mt-40 wow fadeInDown"
                                data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="btn-two">
                                    <span class="btn-circle">
                                    </span>
                                    <a href="/about" class="btn-inner">
                                        <span class="btn-text">
                                            KNOW MORE
                                        </span>
                                    </a>
                                </div>
                                <div class="about-info">
                                    {{-- <img src="assets/images/about/founder.jpg" width="50" alt="Founder"> --}}
                                    <div class="con">
                                        <h5 class="fs-16">Ayuba Garba</h5>
                                        <span class="sm-font">Founder, Destiny Call Foundation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Service area start here -->
        <section class="service-area pt-100 pb-100 sub-bg">
            <div class="container">
                <div class="row g-8">
                    <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="service__item">
                            <div class="service__icon"><img src="assets/images/icon/vision.png" width="150" alt="vision"></div>
                            <div class="service__content">
                                <h3 class="text-white">Vision</h3>
                                <p class="text-white">To raise a rare breed of young entrepreneurs with a global culture of excellence, strong leadership values, and a passion for social impact.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="service__item active">
                            <div class="service__icon"><img src="assets/images/icon/mission.png" width="150" alt="mission"></div>
                            <div class="service__content">
                                <h3 class="text-white">Mission</h3>
                                <p class="text-white">To provide a dynamic platform for knowledge-sharing, strategic networking, and empowerment for leaders, entrepreneurs, and trendsetters in business and community development.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->


        <!-- Video area start here -->
        <section class="video-area">
            <div class="row g-0">
                <div class="col-md-5">
                    <div class="video__left-item bg-image h-100"
                        data-background="assets/images/video/video-left-image.jpg">
                        <div class="video__btn-wrp">
                            <div class="video-btn video-pulse">
                                <a class="video-popup" href="#"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="video__right-item bg-image pt-120 pb-120 pl-80"
                        data-background="assets/images/video/video-right-image.jpg">
                        <div class="video__content">
                            <div class="section-header mb-40">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <i class="fa-solid fa-angles-left pe-1"></i> Watch Videos <i
                                        class="fa-solid fa-angles-right ps-1"></i>
                                </h5>
                                <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Building Sustainable Impact Through Strategic Partnerships</h2>
                                <p class="text-white wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">We collaborate with organizations, institutions, and individuals who share our commitment to human development, entrepreneurship, and community transformation.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-4 flex-wrap">
                                <div class="info wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2 class="text-white"><span class="count text-white">50</span>%</h2>
                                    <p class="mt-10 text-white">kids Need Help</p>
                                </div>
                                <div class="info wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <h2 class="text-white">$<span class="count text-white">500</span>k</h2>
                                    <p class="mt-10 text-white">Our Goal</p>
                                </div>
                                <div class="info wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <h2 class="text-white">$<span class="count text-white">125</span>k</h2>
                                    <p class="mt-10 text-white">Raised Now</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video area end here -->

        <!-- Cause area start here -->
        {{-- <section class="cause-area pt-120 pb-100">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-4 mb-40">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <i class="fa-regular fa-angles-left pe-1"></i> RECENT CAUSES <i
                                class="fa-regular fa-angles-right ps-1"></i>
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Introducing Our
                            Campaigns</h2>
                    </div>
                    <div class="arry-btn wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <button class="arry-prev cause__arry-prev"><i class="fa-regular fa-chevron-left"></i></button>
                        <button class="arry-next cause__arry-next active ml-10"><i
                                class="fa-regular fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="cause__slider-wrp">
                <div class="swiper cause__slider">
                    <div class="swiper-wrapper py-4">
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image1.jpg" alt="image">
                                    <span class="cause-tag">Education</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Rebecca's
                                            New Album
                                            Aid
                                            for
                                            the
                                            Needy</a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 50%;"><span>50%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$20.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image2.jpg" alt="image">
                                    <span class="cause-tag">Foods</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Charity
                                            Showcases a
                                            Nation's Kindness</a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 70%;"><span>70%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$30.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image3.jpg" alt="image">
                                    <span class="cause-tag">Medical</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Construct
                                            Dwellings
                                            African Impoverished Women
                                        </a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 90%;"><span>90%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$35.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image4.jpg" alt="image">
                                    <span class="cause-tag">Water</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Provide
                                            Healthy
                                            Meals to
                                            an Impoverished Rural Child</a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 65%;"><span>65%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$25.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image1.jpg" alt="image">
                                    <span class="cause-tag">Education</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Rebecca's
                                            New Album
                                            Aid
                                            for
                                            the
                                            Needy</a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 50%;"><span>50%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$20.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image2.jpg" alt="image">
                                    <span class="cause-tag">Foods</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Charity
                                            Showcases a
                                            Nation's Kindness</a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 70%;"><span>70%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$30.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image3.jpg" alt="image">
                                    <span class="cause-tag">Medical</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Construct
                                            Dwellings
                                            African Impoverished Women
                                        </a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 90%;"><span>90%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$35.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cause__item">
                                <div class="cause__image image">
                                    <img src="assets/images/cause/cause-image4.jpg" alt="image">
                                    <span class="cause-tag">Water</span>
                                </div>
                                <div class="cause__content">
                                    <h4 class="mb-4 mt-20"><a href="cause-single.html" class="primary-hover">Provide
                                            Healthy
                                            Meals to
                                            an Impoverished Rural Child</a></h4>
                                    <div class="progress-area">
                                        <div class="progress__item">
                                            <div class="progress__content" style="width: 65%;"><span>65%</span></div>
                                        </div>
                                        <div class="progress__goal mt-15">
                                            <h6>Goal : <span>$40.000</span></h6>
                                            <h6>Raised : <span>$25.000</span></h6>
                                        </div>
                                        <div class="btn-three mt-30">
                                            <span class="btn-circle">
                                            </span>
                                            <a href="cause-single.html" class="btn-inner">
                                                <span class="btn-text">
                                                    DONATE NOW
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Cause area end here -->

        <!-- Team area start here -->
        {{-- <section class="team-area pt-120 pb-120 sub-bg">
            <div class="container">
                <div class="section-header mb-60 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i> Our Volunteers <i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Volunteers Our Precious
                        Assets</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="team__item image">
                            <img src="assets/images/team/team-image1.jpg" alt="image">
                            <div class="team__content">
                                <div class="social-icon mb-30">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="active" href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                                <div class="content">
                                    <h4><a href="team-single.html" class="primary-hover">Kristin Watson</a></h4>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="team__item image">
                            <img src="assets/images/team/team-image2.jpg" alt="image">
                            <div class="team__content">
                                <div class="social-icon mb-30">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="active" href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                                <div class="content">
                                    <h4><a href="team-single.html" class="primary-hover">Ralph Edwards</a></h4>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="team__item image">
                            <img src="assets/images/team/team-image3.jpg" alt="image">
                            <div class="team__content">
                                <div class="social-icon mb-30">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="active" href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a>
                                </div>
                                <div class="content">
                                    <h4><a href="team-single.html" class="primary-hover">Leslie Alexander</a></h4>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Team area end here -->

        <!-- Event area start here -->
        {{-- <section class="event-area pt-120 pb-120 bg-image" data-background="assets/images/bg/event-bg-image.jpg">
            <div class="container-fluid">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i> Our EVENT <i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Numerous
                        Events Gathering</h2>
                </div>
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="event__item h-100">
                            <div class="image h-100">
                                <img class="h-100" src="assets/images/event/event-image1.jpg" alt="image">
                            </div>
                            <div class="event__content">
                                <ul class="mb-4">
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_66_78)">
                                                <path
                                                    d="M8.25 10.0835C8.25 10.8128 8.53973 11.5123 9.05546 12.028C9.57118 12.5438 10.2707 12.8335 11 12.8335C11.7293 12.8335 12.4288 12.5438 12.9445 12.028C13.4603 11.5123 13.75 10.8128 13.75 10.0835C13.75 9.35415 13.4603 8.65468 12.9445 8.13895C12.4288 7.62323 11.7293 7.3335 11 7.3335C10.2707 7.3335 9.57118 7.62323 9.05546 8.13895C8.53973 8.65468 8.25 9.35415 8.25 10.0835Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.1856 15.2691L12.2962 19.1586C11.9524 19.502 11.4864 19.6949 11.0005 19.6949C10.5145 19.6949 10.0485 19.502 9.70474 19.1586L5.81441 15.2691C4.78886 14.2435 4.09047 12.9369 3.80754 11.5143C3.52461 10.0918 3.66986 8.61736 4.22491 7.27739C4.77997 5.93742 5.7199 4.79213 6.92585 3.98635C8.1318 3.18057 9.54961 2.75049 11 2.75049C12.4504 2.75049 13.8682 3.18057 15.0741 3.98635C16.2801 4.79213 17.22 5.93742 17.7751 7.27739C18.3301 8.61736 18.4754 10.0918 18.1924 11.5143C17.9095 12.9369 17.2111 14.2435 16.1856 15.2691Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="22" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>New york, USA</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.33333 5.271C6.9575 5.271 6.64583 4.95933 6.64583 4.5835V1.8335C6.64583 1.45766 6.9575 1.146 7.33333 1.146C7.70917 1.146 8.02083 1.45766 8.02083 1.8335V4.5835C8.02083 4.95933 7.70917 5.271 7.33333 5.271ZM14.6667 5.271C14.2908 5.271 13.9792 4.95933 13.9792 4.5835V1.8335C13.9792 1.45766 14.2908 1.146 14.6667 1.146C15.0425 1.146 15.3542 1.45766 15.3542 1.8335V4.5835C15.3542 4.95933 15.0425 5.271 14.6667 5.271ZM7.79167 13.2918C7.6725 13.2918 7.55333 13.2643 7.44333 13.2185C7.32417 13.1727 7.2325 13.1085 7.14083 13.026C6.97583 12.8518 6.875 12.6227 6.875 12.3752C6.875 12.256 6.9025 12.1368 6.94833 12.0268C6.99417 11.9168 7.05833 11.816 7.14083 11.7243C7.2325 11.6418 7.32417 11.5777 7.44333 11.5318C7.77333 11.3943 8.18583 11.4677 8.4425 11.7243C8.6075 11.8985 8.70833 12.1368 8.70833 12.3752C8.70833 12.4302 8.69917 12.4943 8.69 12.5585C8.68083 12.6135 8.6625 12.6685 8.635 12.7235C8.61667 12.7785 8.58917 12.8335 8.5525 12.8885C8.525 12.9343 8.47917 12.9802 8.4425 13.026C8.26833 13.191 8.03 13.2918 7.79167 13.2918ZM11 13.2918C10.8808 13.2918 10.7617 13.2643 10.6517 13.2185C10.5325 13.1727 10.4408 13.1085 10.3492 13.026C10.1842 12.8518 10.0833 12.6227 10.0833 12.3752C10.0833 12.256 10.1108 12.1368 10.1567 12.0268C10.2025 11.9168 10.2667 11.816 10.3492 11.7243C10.4408 11.6418 10.5325 11.5777 10.6517 11.5318C10.9817 11.3852 11.3942 11.4677 11.6508 11.7243C11.8158 11.8985 11.9167 12.1368 11.9167 12.3752C11.9167 12.4302 11.9075 12.4943 11.8983 12.5585C11.8892 12.6135 11.8708 12.6685 11.8433 12.7235C11.825 12.7785 11.7975 12.8335 11.7608 12.8885C11.7333 12.9343 11.6875 12.9802 11.6508 13.026C11.4767 13.191 11.2383 13.2918 11 13.2918ZM14.2083 13.2918C14.0892 13.2918 13.97 13.2643 13.86 13.2185C13.7408 13.1727 13.6492 13.1085 13.5575 13.026L13.4475 12.8885C13.4128 12.8374 13.385 12.7819 13.365 12.7235C13.3385 12.6716 13.32 12.6159 13.31 12.5585C13.3008 12.4943 13.2917 12.4302 13.2917 12.3752C13.2917 12.1368 13.3925 11.8985 13.5575 11.7243C13.6492 11.6418 13.7408 11.5777 13.86 11.5318C14.1992 11.3852 14.6025 11.4677 14.8592 11.7243C15.0242 11.8985 15.125 12.1368 15.125 12.3752C15.125 12.4302 15.1158 12.4943 15.1067 12.5585C15.0975 12.6135 15.0792 12.6685 15.0517 12.7235C15.0333 12.7785 15.0058 12.8335 14.9692 12.8885C14.9417 12.9343 14.8958 12.9802 14.8592 13.026C14.685 13.191 14.4467 13.2918 14.2083 13.2918ZM7.79167 16.5002C7.6725 16.5002 7.55333 16.4727 7.44333 16.4268C7.33333 16.381 7.2325 16.3168 7.14083 16.2343C6.97583 16.0602 6.875 15.8218 6.875 15.5835C6.875 15.4643 6.9025 15.3452 6.94833 15.2352C6.99417 15.116 7.05833 15.0152 7.14083 14.9327C7.48 14.5935 8.10333 14.5935 8.4425 14.9327C8.6075 15.1068 8.70833 15.3452 8.70833 15.5835C8.70833 15.8218 8.6075 16.0602 8.4425 16.2343C8.26833 16.3993 8.03 16.5002 7.79167 16.5002ZM11 16.5002C10.7617 16.5002 10.5233 16.3993 10.3492 16.2343C10.1842 16.0602 10.0833 15.8218 10.0833 15.5835C10.0833 15.4643 10.1108 15.3452 10.1567 15.2352C10.2025 15.116 10.2667 15.0152 10.3492 14.9327C10.6883 14.5935 11.3117 14.5935 11.6508 14.9327C11.7333 15.0152 11.7975 15.116 11.8433 15.2352C11.8892 15.3452 11.9167 15.4643 11.9167 15.5835C11.9167 15.8218 11.8158 16.0602 11.6508 16.2343C11.4767 16.3993 11.2383 16.5002 11 16.5002ZM14.2083 16.5002C13.97 16.5002 13.7317 16.3993 13.5575 16.2343C13.4727 16.1482 13.4071 16.0451 13.365 15.9318C13.3192 15.8218 13.2917 15.7027 13.2917 15.5835C13.2917 15.4643 13.3192 15.3452 13.365 15.2352C13.4108 15.116 13.475 15.0152 13.5575 14.9327C13.7683 14.7218 14.0892 14.621 14.3825 14.6852C14.4467 14.6943 14.5017 14.7127 14.5567 14.7402C14.6117 14.7585 14.6667 14.786 14.7217 14.8227C14.7675 14.8502 14.8133 14.896 14.8592 14.9327C15.0242 15.1068 15.125 15.3452 15.125 15.5835C15.125 15.8218 15.0242 16.0602 14.8592 16.2343C14.685 16.3993 14.4467 16.5002 14.2083 16.5002ZM18.7917 9.02016H3.20833C2.8325 9.02016 2.52083 8.7085 2.52083 8.33266C2.52083 7.95683 2.8325 7.64516 3.20833 7.64516H18.7917C19.1675 7.64516 19.4792 7.95683 19.4792 8.33266C19.4792 8.7085 19.1675 9.02016 18.7917 9.02016Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M14.6667 20.8543H7.33333C3.9875 20.8543 2.0625 18.9293 2.0625 15.5835V7.79183C2.0625 4.446 3.9875 2.521 7.33333 2.521H14.6667C18.0125 2.521 19.9375 4.446 19.9375 7.79183V15.5835C19.9375 18.9293 18.0125 20.8543 14.6667 20.8543ZM7.33333 3.896C4.71167 3.896 3.4375 5.17016 3.4375 7.79183V15.5835C3.4375 18.2052 4.71167 19.4793 7.33333 19.4793H14.6667C17.2883 19.4793 18.5625 18.2052 18.5625 15.5835V7.79183C18.5625 5.17016 17.2883 3.896 14.6667 3.896H7.33333Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>22, Nov 2023</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9195 12.9429L11.852 10.6423V5.95607C11.852 5.48488 11.4712 5.104 11 5.104C10.5288 5.104 10.1479 5.48488 10.1479 5.95607V11.0684C10.1479 11.3368 10.274 11.5899 10.4887 11.7501L13.8969 14.3062C14.044 14.417 14.2232 14.4768 14.4073 14.4766C14.6672 14.4766 14.9228 14.3599 15.0898 14.135C15.3728 13.7592 15.2961 13.2249 14.9195 12.9429Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M11 0C4.93423 0 0 4.93423 0 11C0 17.0658 4.93423 22 11 22C17.0658 22 22 17.0658 22 11C22 4.93423 17.0658 0 11 0ZM11 20.2959C5.8749 20.2959 1.7041 16.1251 1.7041 11C1.7041 5.8749 5.8749 1.7041 11 1.7041C16.126 1.7041 20.2959 5.8749 20.2959 11C20.2959 16.1251 16.1251 20.2959 11 20.2959Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>09:00 PM</span>
                                    </li>
                                </ul>
                                <h3 class="mb-4"><a href="event-single.html" class="primary-hover">Rebecca's Album
                                        Supports
                                        Needy</a>
                                </h3>
                                <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the Internet
                                    to
                                    repeat predefined chunks
                                    necessary, making this</p>
                                <a href="event-single.html" class="primary-hover fw-bold mt-4">EXPLORE MORE <i
                                        class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="event__item h-100">
                            <div class="image h-100">
                                <img class="h-100" src="assets/images/event/event-image2.jpg" alt="image">
                            </div>
                            <div class="event__content">
                                <ul class="mb-4">
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_66_78)">
                                                <path
                                                    d="M8.25 10.0835C8.25 10.8128 8.53973 11.5123 9.05546 12.028C9.57118 12.5438 10.2707 12.8335 11 12.8335C11.7293 12.8335 12.4288 12.5438 12.9445 12.028C13.4603 11.5123 13.75 10.8128 13.75 10.0835C13.75 9.35415 13.4603 8.65468 12.9445 8.13895C12.4288 7.62323 11.7293 7.3335 11 7.3335C10.2707 7.3335 9.57118 7.62323 9.05546 8.13895C8.53973 8.65468 8.25 9.35415 8.25 10.0835Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.1856 15.2691L12.2962 19.1586C11.9524 19.502 11.4864 19.6949 11.0005 19.6949C10.5145 19.6949 10.0485 19.502 9.70474 19.1586L5.81441 15.2691C4.78886 14.2435 4.09047 12.9369 3.80754 11.5143C3.52461 10.0918 3.66986 8.61736 4.22491 7.27739C4.77997 5.93742 5.7199 4.79213 6.92585 3.98635C8.1318 3.18057 9.54961 2.75049 11 2.75049C12.4504 2.75049 13.8682 3.18057 15.0741 3.98635C16.2801 4.79213 17.22 5.93742 17.7751 7.27739C18.3301 8.61736 18.4754 10.0918 18.1924 11.5143C17.9095 12.9369 17.2111 14.2435 16.1856 15.2691Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="22" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>New york, USA</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.33333 5.271C6.9575 5.271 6.64583 4.95933 6.64583 4.5835V1.8335C6.64583 1.45766 6.9575 1.146 7.33333 1.146C7.70917 1.146 8.02083 1.45766 8.02083 1.8335V4.5835C8.02083 4.95933 7.70917 5.271 7.33333 5.271ZM14.6667 5.271C14.2908 5.271 13.9792 4.95933 13.9792 4.5835V1.8335C13.9792 1.45766 14.2908 1.146 14.6667 1.146C15.0425 1.146 15.3542 1.45766 15.3542 1.8335V4.5835C15.3542 4.95933 15.0425 5.271 14.6667 5.271ZM7.79167 13.2918C7.6725 13.2918 7.55333 13.2643 7.44333 13.2185C7.32417 13.1727 7.2325 13.1085 7.14083 13.026C6.97583 12.8518 6.875 12.6227 6.875 12.3752C6.875 12.256 6.9025 12.1368 6.94833 12.0268C6.99417 11.9168 7.05833 11.816 7.14083 11.7243C7.2325 11.6418 7.32417 11.5777 7.44333 11.5318C7.77333 11.3943 8.18583 11.4677 8.4425 11.7243C8.6075 11.8985 8.70833 12.1368 8.70833 12.3752C8.70833 12.4302 8.69917 12.4943 8.69 12.5585C8.68083 12.6135 8.6625 12.6685 8.635 12.7235C8.61667 12.7785 8.58917 12.8335 8.5525 12.8885C8.525 12.9343 8.47917 12.9802 8.4425 13.026C8.26833 13.191 8.03 13.2918 7.79167 13.2918ZM11 13.2918C10.8808 13.2918 10.7617 13.2643 10.6517 13.2185C10.5325 13.1727 10.4408 13.1085 10.3492 13.026C10.1842 12.8518 10.0833 12.6227 10.0833 12.3752C10.0833 12.256 10.1108 12.1368 10.1567 12.0268C10.2025 11.9168 10.2667 11.816 10.3492 11.7243C10.4408 11.6418 10.5325 11.5777 10.6517 11.5318C10.9817 11.3852 11.3942 11.4677 11.6508 11.7243C11.8158 11.8985 11.9167 12.1368 11.9167 12.3752C11.9167 12.4302 11.9075 12.4943 11.8983 12.5585C11.8892 12.6135 11.8708 12.6685 11.8433 12.7235C11.825 12.7785 11.7975 12.8335 11.7608 12.8885C11.7333 12.9343 11.6875 12.9802 11.6508 13.026C11.4767 13.191 11.2383 13.2918 11 13.2918ZM14.2083 13.2918C14.0892 13.2918 13.97 13.2643 13.86 13.2185C13.7408 13.1727 13.6492 13.1085 13.5575 13.026L13.4475 12.8885C13.4128 12.8374 13.385 12.7819 13.365 12.7235C13.3385 12.6716 13.32 12.6159 13.31 12.5585C13.3008 12.4943 13.2917 12.4302 13.2917 12.3752C13.2917 12.1368 13.3925 11.8985 13.5575 11.7243C13.6492 11.6418 13.7408 11.5777 13.86 11.5318C14.1992 11.3852 14.6025 11.4677 14.8592 11.7243C15.0242 11.8985 15.125 12.1368 15.125 12.3752C15.125 12.4302 15.1158 12.4943 15.1067 12.5585C15.0975 12.6135 15.0792 12.6685 15.0517 12.7235C15.0333 12.7785 15.0058 12.8335 14.9692 12.8885C14.9417 12.9343 14.8958 12.9802 14.8592 13.026C14.685 13.191 14.4467 13.2918 14.2083 13.2918ZM7.79167 16.5002C7.6725 16.5002 7.55333 16.4727 7.44333 16.4268C7.33333 16.381 7.2325 16.3168 7.14083 16.2343C6.97583 16.0602 6.875 15.8218 6.875 15.5835C6.875 15.4643 6.9025 15.3452 6.94833 15.2352C6.99417 15.116 7.05833 15.0152 7.14083 14.9327C7.48 14.5935 8.10333 14.5935 8.4425 14.9327C8.6075 15.1068 8.70833 15.3452 8.70833 15.5835C8.70833 15.8218 8.6075 16.0602 8.4425 16.2343C8.26833 16.3993 8.03 16.5002 7.79167 16.5002ZM11 16.5002C10.7617 16.5002 10.5233 16.3993 10.3492 16.2343C10.1842 16.0602 10.0833 15.8218 10.0833 15.5835C10.0833 15.4643 10.1108 15.3452 10.1567 15.2352C10.2025 15.116 10.2667 15.0152 10.3492 14.9327C10.6883 14.5935 11.3117 14.5935 11.6508 14.9327C11.7333 15.0152 11.7975 15.116 11.8433 15.2352C11.8892 15.3452 11.9167 15.4643 11.9167 15.5835C11.9167 15.8218 11.8158 16.0602 11.6508 16.2343C11.4767 16.3993 11.2383 16.5002 11 16.5002ZM14.2083 16.5002C13.97 16.5002 13.7317 16.3993 13.5575 16.2343C13.4727 16.1482 13.4071 16.0451 13.365 15.9318C13.3192 15.8218 13.2917 15.7027 13.2917 15.5835C13.2917 15.4643 13.3192 15.3452 13.365 15.2352C13.4108 15.116 13.475 15.0152 13.5575 14.9327C13.7683 14.7218 14.0892 14.621 14.3825 14.6852C14.4467 14.6943 14.5017 14.7127 14.5567 14.7402C14.6117 14.7585 14.6667 14.786 14.7217 14.8227C14.7675 14.8502 14.8133 14.896 14.8592 14.9327C15.0242 15.1068 15.125 15.3452 15.125 15.5835C15.125 15.8218 15.0242 16.0602 14.8592 16.2343C14.685 16.3993 14.4467 16.5002 14.2083 16.5002ZM18.7917 9.02016H3.20833C2.8325 9.02016 2.52083 8.7085 2.52083 8.33266C2.52083 7.95683 2.8325 7.64516 3.20833 7.64516H18.7917C19.1675 7.64516 19.4792 7.95683 19.4792 8.33266C19.4792 8.7085 19.1675 9.02016 18.7917 9.02016Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M14.6667 20.8543H7.33333C3.9875 20.8543 2.0625 18.9293 2.0625 15.5835V7.79183C2.0625 4.446 3.9875 2.521 7.33333 2.521H14.6667C18.0125 2.521 19.9375 4.446 19.9375 7.79183V15.5835C19.9375 18.9293 18.0125 20.8543 14.6667 20.8543ZM7.33333 3.896C4.71167 3.896 3.4375 5.17016 3.4375 7.79183V15.5835C3.4375 18.2052 4.71167 19.4793 7.33333 19.4793H14.6667C17.2883 19.4793 18.5625 18.2052 18.5625 15.5835V7.79183C18.5625 5.17016 17.2883 3.896 14.6667 3.896H7.33333Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>22, Nov 2023</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9195 12.9429L11.852 10.6423V5.95607C11.852 5.48488 11.4712 5.104 11 5.104C10.5288 5.104 10.1479 5.48488 10.1479 5.95607V11.0684C10.1479 11.3368 10.274 11.5899 10.4887 11.7501L13.8969 14.3062C14.044 14.417 14.2232 14.4768 14.4073 14.4766C14.6672 14.4766 14.9228 14.3599 15.0898 14.135C15.3728 13.7592 15.2961 13.2249 14.9195 12.9429Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M11 0C4.93423 0 0 4.93423 0 11C0 17.0658 4.93423 22 11 22C17.0658 22 22 17.0658 22 11C22 4.93423 17.0658 0 11 0ZM11 20.2959C5.8749 20.2959 1.7041 16.1251 1.7041 11C1.7041 5.8749 5.8749 1.7041 11 1.7041C16.126 1.7041 20.2959 5.8749 20.2959 11C20.2959 16.1251 16.1251 20.2959 11 20.2959Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>09:00 PM</span>
                                    </li>
                                </ul>
                                <h3 class="mb-4"><a href="event-single.html" class="primary-hover">Rebecca's Charity
                                        Album A
                                        Brilliant
                                        Display</a>
                                </h3>
                                <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the Internet
                                    to
                                    repeat predefined chunks
                                    necessary, making this</p>
                                <a href="event-single.html" class="primary-hover fw-bold mt-4">EXPLORE MORE <i
                                        class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="event__item h-100">
                            <div class="image h-100">
                                <img class="h-100" src="assets/images/event/event-image3.jpg" alt="image">
                            </div>
                            <div class="event__content">
                                <ul class="mb-4">
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_66_78)">
                                                <path
                                                    d="M8.25 10.0835C8.25 10.8128 8.53973 11.5123 9.05546 12.028C9.57118 12.5438 10.2707 12.8335 11 12.8335C11.7293 12.8335 12.4288 12.5438 12.9445 12.028C13.4603 11.5123 13.75 10.8128 13.75 10.0835C13.75 9.35415 13.4603 8.65468 12.9445 8.13895C12.4288 7.62323 11.7293 7.3335 11 7.3335C10.2707 7.3335 9.57118 7.62323 9.05546 8.13895C8.53973 8.65468 8.25 9.35415 8.25 10.0835Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.1856 15.2691L12.2962 19.1586C11.9524 19.502 11.4864 19.6949 11.0005 19.6949C10.5145 19.6949 10.0485 19.502 9.70474 19.1586L5.81441 15.2691C4.78886 14.2435 4.09047 12.9369 3.80754 11.5143C3.52461 10.0918 3.66986 8.61736 4.22491 7.27739C4.77997 5.93742 5.7199 4.79213 6.92585 3.98635C8.1318 3.18057 9.54961 2.75049 11 2.75049C12.4504 2.75049 13.8682 3.18057 15.0741 3.98635C16.2801 4.79213 17.22 5.93742 17.7751 7.27739C18.3301 8.61736 18.4754 10.0918 18.1924 11.5143C17.9095 12.9369 17.2111 14.2435 16.1856 15.2691Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="22" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>New york, USA</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.33333 5.271C6.9575 5.271 6.64583 4.95933 6.64583 4.5835V1.8335C6.64583 1.45766 6.9575 1.146 7.33333 1.146C7.70917 1.146 8.02083 1.45766 8.02083 1.8335V4.5835C8.02083 4.95933 7.70917 5.271 7.33333 5.271ZM14.6667 5.271C14.2908 5.271 13.9792 4.95933 13.9792 4.5835V1.8335C13.9792 1.45766 14.2908 1.146 14.6667 1.146C15.0425 1.146 15.3542 1.45766 15.3542 1.8335V4.5835C15.3542 4.95933 15.0425 5.271 14.6667 5.271ZM7.79167 13.2918C7.6725 13.2918 7.55333 13.2643 7.44333 13.2185C7.32417 13.1727 7.2325 13.1085 7.14083 13.026C6.97583 12.8518 6.875 12.6227 6.875 12.3752C6.875 12.256 6.9025 12.1368 6.94833 12.0268C6.99417 11.9168 7.05833 11.816 7.14083 11.7243C7.2325 11.6418 7.32417 11.5777 7.44333 11.5318C7.77333 11.3943 8.18583 11.4677 8.4425 11.7243C8.6075 11.8985 8.70833 12.1368 8.70833 12.3752C8.70833 12.4302 8.69917 12.4943 8.69 12.5585C8.68083 12.6135 8.6625 12.6685 8.635 12.7235C8.61667 12.7785 8.58917 12.8335 8.5525 12.8885C8.525 12.9343 8.47917 12.9802 8.4425 13.026C8.26833 13.191 8.03 13.2918 7.79167 13.2918ZM11 13.2918C10.8808 13.2918 10.7617 13.2643 10.6517 13.2185C10.5325 13.1727 10.4408 13.1085 10.3492 13.026C10.1842 12.8518 10.0833 12.6227 10.0833 12.3752C10.0833 12.256 10.1108 12.1368 10.1567 12.0268C10.2025 11.9168 10.2667 11.816 10.3492 11.7243C10.4408 11.6418 10.5325 11.5777 10.6517 11.5318C10.9817 11.3852 11.3942 11.4677 11.6508 11.7243C11.8158 11.8985 11.9167 12.1368 11.9167 12.3752C11.9167 12.4302 11.9075 12.4943 11.8983 12.5585C11.8892 12.6135 11.8708 12.6685 11.8433 12.7235C11.825 12.7785 11.7975 12.8335 11.7608 12.8885C11.7333 12.9343 11.6875 12.9802 11.6508 13.026C11.4767 13.191 11.2383 13.2918 11 13.2918ZM14.2083 13.2918C14.0892 13.2918 13.97 13.2643 13.86 13.2185C13.7408 13.1727 13.6492 13.1085 13.5575 13.026L13.4475 12.8885C13.4128 12.8374 13.385 12.7819 13.365 12.7235C13.3385 12.6716 13.32 12.6159 13.31 12.5585C13.3008 12.4943 13.2917 12.4302 13.2917 12.3752C13.2917 12.1368 13.3925 11.8985 13.5575 11.7243C13.6492 11.6418 13.7408 11.5777 13.86 11.5318C14.1992 11.3852 14.6025 11.4677 14.8592 11.7243C15.0242 11.8985 15.125 12.1368 15.125 12.3752C15.125 12.4302 15.1158 12.4943 15.1067 12.5585C15.0975 12.6135 15.0792 12.6685 15.0517 12.7235C15.0333 12.7785 15.0058 12.8335 14.9692 12.8885C14.9417 12.9343 14.8958 12.9802 14.8592 13.026C14.685 13.191 14.4467 13.2918 14.2083 13.2918ZM7.79167 16.5002C7.6725 16.5002 7.55333 16.4727 7.44333 16.4268C7.33333 16.381 7.2325 16.3168 7.14083 16.2343C6.97583 16.0602 6.875 15.8218 6.875 15.5835C6.875 15.4643 6.9025 15.3452 6.94833 15.2352C6.99417 15.116 7.05833 15.0152 7.14083 14.9327C7.48 14.5935 8.10333 14.5935 8.4425 14.9327C8.6075 15.1068 8.70833 15.3452 8.70833 15.5835C8.70833 15.8218 8.6075 16.0602 8.4425 16.2343C8.26833 16.3993 8.03 16.5002 7.79167 16.5002ZM11 16.5002C10.7617 16.5002 10.5233 16.3993 10.3492 16.2343C10.1842 16.0602 10.0833 15.8218 10.0833 15.5835C10.0833 15.4643 10.1108 15.3452 10.1567 15.2352C10.2025 15.116 10.2667 15.0152 10.3492 14.9327C10.6883 14.5935 11.3117 14.5935 11.6508 14.9327C11.7333 15.0152 11.7975 15.116 11.8433 15.2352C11.8892 15.3452 11.9167 15.4643 11.9167 15.5835C11.9167 15.8218 11.8158 16.0602 11.6508 16.2343C11.4767 16.3993 11.2383 16.5002 11 16.5002ZM14.2083 16.5002C13.97 16.5002 13.7317 16.3993 13.5575 16.2343C13.4727 16.1482 13.4071 16.0451 13.365 15.9318C13.3192 15.8218 13.2917 15.7027 13.2917 15.5835C13.2917 15.4643 13.3192 15.3452 13.365 15.2352C13.4108 15.116 13.475 15.0152 13.5575 14.9327C13.7683 14.7218 14.0892 14.621 14.3825 14.6852C14.4467 14.6943 14.5017 14.7127 14.5567 14.7402C14.6117 14.7585 14.6667 14.786 14.7217 14.8227C14.7675 14.8502 14.8133 14.896 14.8592 14.9327C15.0242 15.1068 15.125 15.3452 15.125 15.5835C15.125 15.8218 15.0242 16.0602 14.8592 16.2343C14.685 16.3993 14.4467 16.5002 14.2083 16.5002ZM18.7917 9.02016H3.20833C2.8325 9.02016 2.52083 8.7085 2.52083 8.33266C2.52083 7.95683 2.8325 7.64516 3.20833 7.64516H18.7917C19.1675 7.64516 19.4792 7.95683 19.4792 8.33266C19.4792 8.7085 19.1675 9.02016 18.7917 9.02016Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M14.6667 20.8543H7.33333C3.9875 20.8543 2.0625 18.9293 2.0625 15.5835V7.79183C2.0625 4.446 3.9875 2.521 7.33333 2.521H14.6667C18.0125 2.521 19.9375 4.446 19.9375 7.79183V15.5835C19.9375 18.9293 18.0125 20.8543 14.6667 20.8543ZM7.33333 3.896C4.71167 3.896 3.4375 5.17016 3.4375 7.79183V15.5835C3.4375 18.2052 4.71167 19.4793 7.33333 19.4793H14.6667C17.2883 19.4793 18.5625 18.2052 18.5625 15.5835V7.79183C18.5625 5.17016 17.2883 3.896 14.6667 3.896H7.33333Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>22, Nov 2023</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9195 12.9429L11.852 10.6423V5.95607C11.852 5.48488 11.4712 5.104 11 5.104C10.5288 5.104 10.1479 5.48488 10.1479 5.95607V11.0684C10.1479 11.3368 10.274 11.5899 10.4887 11.7501L13.8969 14.3062C14.044 14.417 14.2232 14.4768 14.4073 14.4766C14.6672 14.4766 14.9228 14.3599 15.0898 14.135C15.3728 13.7592 15.2961 13.2249 14.9195 12.9429Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M11 0C4.93423 0 0 4.93423 0 11C0 17.0658 4.93423 22 11 22C17.0658 22 22 17.0658 22 11C22 4.93423 17.0658 0 11 0ZM11 20.2959C5.8749 20.2959 1.7041 16.1251 1.7041 11C1.7041 5.8749 5.8749 1.7041 11 1.7041C16.126 1.7041 20.2959 5.8749 20.2959 11C20.2959 16.1251 16.1251 20.2959 11 20.2959Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>09:00 PM</span>
                                    </li>
                                </ul>
                                <h3 class="mb-4"><a href="event-single.html" class="primary-hover">Rebecca's Charity
                                        Showcases
                                        Nation's</a>
                                </h3>
                                <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the Internet
                                    to
                                    repeat predefined chunks
                                    necessary, making this</p>
                                <a href="event-single.html" class="primary-hover fw-bold mt-4">EXPLORE MORE <i
                                        class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="event__item h-100">
                            <div class="image h-100">
                                <img class="h-100" src="assets/images/event/event-image4.jpg" alt="image">
                            </div>
                            <div class="event__content">
                                <ul class="mb-4">
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_66_78)">
                                                <path
                                                    d="M8.25 10.0835C8.25 10.8128 8.53973 11.5123 9.05546 12.028C9.57118 12.5438 10.2707 12.8335 11 12.8335C11.7293 12.8335 12.4288 12.5438 12.9445 12.028C13.4603 11.5123 13.75 10.8128 13.75 10.0835C13.75 9.35415 13.4603 8.65468 12.9445 8.13895C12.4288 7.62323 11.7293 7.3335 11 7.3335C10.2707 7.3335 9.57118 7.62323 9.05546 8.13895C8.53973 8.65468 8.25 9.35415 8.25 10.0835Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.1856 15.2691L12.2962 19.1586C11.9524 19.502 11.4864 19.6949 11.0005 19.6949C10.5145 19.6949 10.0485 19.502 9.70474 19.1586L5.81441 15.2691C4.78886 14.2435 4.09047 12.9369 3.80754 11.5143C3.52461 10.0918 3.66986 8.61736 4.22491 7.27739C4.77997 5.93742 5.7199 4.79213 6.92585 3.98635C8.1318 3.18057 9.54961 2.75049 11 2.75049C12.4504 2.75049 13.8682 3.18057 15.0741 3.98635C16.2801 4.79213 17.22 5.93742 17.7751 7.27739C18.3301 8.61736 18.4754 10.0918 18.1924 11.5143C17.9095 12.9369 17.2111 14.2435 16.1856 15.2691Z"
                                                    stroke="#F74F22" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="22" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>New york, USA</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.33333 5.271C6.9575 5.271 6.64583 4.95933 6.64583 4.5835V1.8335C6.64583 1.45766 6.9575 1.146 7.33333 1.146C7.70917 1.146 8.02083 1.45766 8.02083 1.8335V4.5835C8.02083 4.95933 7.70917 5.271 7.33333 5.271ZM14.6667 5.271C14.2908 5.271 13.9792 4.95933 13.9792 4.5835V1.8335C13.9792 1.45766 14.2908 1.146 14.6667 1.146C15.0425 1.146 15.3542 1.45766 15.3542 1.8335V4.5835C15.3542 4.95933 15.0425 5.271 14.6667 5.271ZM7.79167 13.2918C7.6725 13.2918 7.55333 13.2643 7.44333 13.2185C7.32417 13.1727 7.2325 13.1085 7.14083 13.026C6.97583 12.8518 6.875 12.6227 6.875 12.3752C6.875 12.256 6.9025 12.1368 6.94833 12.0268C6.99417 11.9168 7.05833 11.816 7.14083 11.7243C7.2325 11.6418 7.32417 11.5777 7.44333 11.5318C7.77333 11.3943 8.18583 11.4677 8.4425 11.7243C8.6075 11.8985 8.70833 12.1368 8.70833 12.3752C8.70833 12.4302 8.69917 12.4943 8.69 12.5585C8.68083 12.6135 8.6625 12.6685 8.635 12.7235C8.61667 12.7785 8.58917 12.8335 8.5525 12.8885C8.525 12.9343 8.47917 12.9802 8.4425 13.026C8.26833 13.191 8.03 13.2918 7.79167 13.2918ZM11 13.2918C10.8808 13.2918 10.7617 13.2643 10.6517 13.2185C10.5325 13.1727 10.4408 13.1085 10.3492 13.026C10.1842 12.8518 10.0833 12.6227 10.0833 12.3752C10.0833 12.256 10.1108 12.1368 10.1567 12.0268C10.2025 11.9168 10.2667 11.816 10.3492 11.7243C10.4408 11.6418 10.5325 11.5777 10.6517 11.5318C10.9817 11.3852 11.3942 11.4677 11.6508 11.7243C11.8158 11.8985 11.9167 12.1368 11.9167 12.3752C11.9167 12.4302 11.9075 12.4943 11.8983 12.5585C11.8892 12.6135 11.8708 12.6685 11.8433 12.7235C11.825 12.7785 11.7975 12.8335 11.7608 12.8885C11.7333 12.9343 11.6875 12.9802 11.6508 13.026C11.4767 13.191 11.2383 13.2918 11 13.2918ZM14.2083 13.2918C14.0892 13.2918 13.97 13.2643 13.86 13.2185C13.7408 13.1727 13.6492 13.1085 13.5575 13.026L13.4475 12.8885C13.4128 12.8374 13.385 12.7819 13.365 12.7235C13.3385 12.6716 13.32 12.6159 13.31 12.5585C13.3008 12.4943 13.2917 12.4302 13.2917 12.3752C13.2917 12.1368 13.3925 11.8985 13.5575 11.7243C13.6492 11.6418 13.7408 11.5777 13.86 11.5318C14.1992 11.3852 14.6025 11.4677 14.8592 11.7243C15.0242 11.8985 15.125 12.1368 15.125 12.3752C15.125 12.4302 15.1158 12.4943 15.1067 12.5585C15.0975 12.6135 15.0792 12.6685 15.0517 12.7235C15.0333 12.7785 15.0058 12.8335 14.9692 12.8885C14.9417 12.9343 14.8958 12.9802 14.8592 13.026C14.685 13.191 14.4467 13.2918 14.2083 13.2918ZM7.79167 16.5002C7.6725 16.5002 7.55333 16.4727 7.44333 16.4268C7.33333 16.381 7.2325 16.3168 7.14083 16.2343C6.97583 16.0602 6.875 15.8218 6.875 15.5835C6.875 15.4643 6.9025 15.3452 6.94833 15.2352C6.99417 15.116 7.05833 15.0152 7.14083 14.9327C7.48 14.5935 8.10333 14.5935 8.4425 14.9327C8.6075 15.1068 8.70833 15.3452 8.70833 15.5835C8.70833 15.8218 8.6075 16.0602 8.4425 16.2343C8.26833 16.3993 8.03 16.5002 7.79167 16.5002ZM11 16.5002C10.7617 16.5002 10.5233 16.3993 10.3492 16.2343C10.1842 16.0602 10.0833 15.8218 10.0833 15.5835C10.0833 15.4643 10.1108 15.3452 10.1567 15.2352C10.2025 15.116 10.2667 15.0152 10.3492 14.9327C10.6883 14.5935 11.3117 14.5935 11.6508 14.9327C11.7333 15.0152 11.7975 15.116 11.8433 15.2352C11.8892 15.3452 11.9167 15.4643 11.9167 15.5835C11.9167 15.8218 11.8158 16.0602 11.6508 16.2343C11.4767 16.3993 11.2383 16.5002 11 16.5002ZM14.2083 16.5002C13.97 16.5002 13.7317 16.3993 13.5575 16.2343C13.4727 16.1482 13.4071 16.0451 13.365 15.9318C13.3192 15.8218 13.2917 15.7027 13.2917 15.5835C13.2917 15.4643 13.3192 15.3452 13.365 15.2352C13.4108 15.116 13.475 15.0152 13.5575 14.9327C13.7683 14.7218 14.0892 14.621 14.3825 14.6852C14.4467 14.6943 14.5017 14.7127 14.5567 14.7402C14.6117 14.7585 14.6667 14.786 14.7217 14.8227C14.7675 14.8502 14.8133 14.896 14.8592 14.9327C15.0242 15.1068 15.125 15.3452 15.125 15.5835C15.125 15.8218 15.0242 16.0602 14.8592 16.2343C14.685 16.3993 14.4467 16.5002 14.2083 16.5002ZM18.7917 9.02016H3.20833C2.8325 9.02016 2.52083 8.7085 2.52083 8.33266C2.52083 7.95683 2.8325 7.64516 3.20833 7.64516H18.7917C19.1675 7.64516 19.4792 7.95683 19.4792 8.33266C19.4792 8.7085 19.1675 9.02016 18.7917 9.02016Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M14.6667 20.8543H7.33333C3.9875 20.8543 2.0625 18.9293 2.0625 15.5835V7.79183C2.0625 4.446 3.9875 2.521 7.33333 2.521H14.6667C18.0125 2.521 19.9375 4.446 19.9375 7.79183V15.5835C19.9375 18.9293 18.0125 20.8543 14.6667 20.8543ZM7.33333 3.896C4.71167 3.896 3.4375 5.17016 3.4375 7.79183V15.5835C3.4375 18.2052 4.71167 19.4793 7.33333 19.4793H14.6667C17.2883 19.4793 18.5625 18.2052 18.5625 15.5835V7.79183C18.5625 5.17016 17.2883 3.896 14.6667 3.896H7.33333Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>22, Nov 2023</span>
                                    </li>
                                    <li>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.9195 12.9429L11.852 10.6423V5.95607C11.852 5.48488 11.4712 5.104 11 5.104C10.5288 5.104 10.1479 5.48488 10.1479 5.95607V11.0684C10.1479 11.3368 10.274 11.5899 10.4887 11.7501L13.8969 14.3062C14.044 14.417 14.2232 14.4768 14.4073 14.4766C14.6672 14.4766 14.9228 14.3599 15.0898 14.135C15.3728 13.7592 15.2961 13.2249 14.9195 12.9429Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M11 0C4.93423 0 0 4.93423 0 11C0 17.0658 4.93423 22 11 22C17.0658 22 22 17.0658 22 11C22 4.93423 17.0658 0 11 0ZM11 20.2959C5.8749 20.2959 1.7041 16.1251 1.7041 11C1.7041 5.8749 5.8749 1.7041 11 1.7041C16.126 1.7041 20.2959 5.8749 20.2959 11C20.2959 16.1251 16.1251 20.2959 11 20.2959Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>09:00 PM</span>
                                    </li>
                                </ul>
                                <h3 class="mb-4"><a href="event-single.html" class="primary-hover">A Nation's
                                        Benevolence
                                        Displayed</a>
                                </h3>
                                <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the Internet
                                    to
                                    repeat predefined chunks
                                    necessary, making this</p>
                                <a href="event-single.html" class="primary-hover fw-bold mt-4">EXPLORE MORE <i
                                        class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
        <!-- Event area end here -->
    
@endsection