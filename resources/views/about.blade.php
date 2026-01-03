@extends('layout.app')
@section('title', 'About Us')
@section('content')

<!-- About area start here -->
        <section class="about-two-area pt-120 pb-120 overflow-hidden">
            <div class="about-two__wrp">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="about-two__image image pr-60">
                                <img src="{{asset('assets/images/about/about-image1.jpg')}}" alt="About">
                                <div class="line-shape sway_Y__animation">
                                    <img src="{{asset('assets/images/shape/banner-line.png')}}" alt="shape">
                                </div>
                                <div class="dot-shape sway__animation">
                                    <img src="{{asset('assets/images/shape/about-dot.png')}}" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header mb-20">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <i class="fa-solid fa-angles-left pe-1"></i> ABOUT US <i
                                        class="fa-solid fa-angles-right ps-1"></i>
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Explore
                                    Information About Charitable Organizations</h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    Destiny Call Foundation is a nonprofit organization established to nurture leadership excellence, entrepreneurial thinking, and social responsibility among youth and women—particularly in underserved communities across Nigeria and beyond.
                                </p>

                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                   We believe that sustainable development begins with empowered people. Through carefully designed programs, mentorship networks, and strategic partnerships, we help individuals unlock their potential and translate ideas into meaningful impact.
                                </p>
                            </div>
                            {{-- <div class="about-two__content">
                                <div class="item mb-30 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-icon1.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Quick Fundraise</h6>
                                        <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the
                                            Internet to repeat predefined chunks</p>
                                    </div>
                                </div>
                                <div class="item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-icon2.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Long -Time Support</h6>
                                        <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the
                                            Internet to repeat predefined chunks</p>
                                    </div>
                                </div>
                                <div class="d-flex align-content-center flex-wrap gap-4 mt-40 wow fadeInDown"
                                    data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="btn-two">
                                        <span class="btn-circle">
                                        </span>
                                        <a href="about.html" class="btn-inner">
                                            <span class="btn-text">
                                                ABOUT MORE
                                            </span>
                                        </a>
                                    </div>
                                    <div class="info-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=ElG5-nXD0B8"><i
                                                class="fa-solid fa-play"></i></a>
                                        <h6>Intro Video</h6>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="btn-two">
                                    <span class="btn-circle">
                                    </span>
                                    <a href="{{asset('assets/DCF_BROCHURE.pdf')}}" target="_blank" class="btn-inner">
                                        <span class="btn-text">
                                            Download Brochure
                                        </span>
                                    </a>
                                </div>
                                

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->


<section class="about-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <i class="fa-solid fa-angles-left pe-1"></i> OUR FOUNDATION <i
                    class="fa-solid fa-angles-right ps-1"></i>
            </h5>
            <h2>Vision, Mission & Core Values</h2>
        </div>

        <div class="row g-4">
            <!-- Vision -->
            <div class="col-lg-4 col-md-6">
                <div class="service__item">
                    <div class="service__icon">
                        <img src="{{asset('assets/images/icon/vision.png')}}" width=150 alt="Vision">
                    </div>
                    <div class="service__content">
                        <h3 class="text-white">Our Vision</h3>
                        <p class="text-white">
                            To raise a rare breed of young entrepreneurs and leaders with a global culture of excellence,
                            strong leadership values, and a deep passion for social impact.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission -->
            <div class="col-lg-4 col-md-6">
                <div class="service__item active">
                    <div class="service__icon">
                        <img src="{{asset('assets/images/icon/mission.png')}}" width=150 alt="Mission">
                    </div>
                    <div class="service__content">
                        <h3 class="text-white">Our Mission</h3>
                        <p class="text-white">
                            To provide a dynamic platform for knowledge-sharing, strategic networking, mentorship,
                            and empowerment for leaders, entrepreneurs, and community changemakers.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Values -->
            <div class="col-lg-4 col-md-6">
                <div class="service__item">
                    <div class="service__icon">
                        <img src="{{asset('assets/images/icon/value.png')}}" width=150 alt="Values">
                    </div>
                    <div class="service__content">
                        <h3 class="text-white">Our Values</h3>
                        <p class="text-white">
                            Excellence, Integrity, Empowerment, Innovation, Collaboration, and Sustainable Impact
                            guide every initiative we undertake.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-two-area pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5>
                <i class="fa-solid fa-angles-left pe-1"></i> OUR OBJECTIVES <i
                    class="fa-solid fa-angles-right ps-1"></i>
            </h5>
            <h2>What We Aim to Achieve</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <h6 class="mb-10">✔ Leadership & Entrepreneurship Development</h6>
                <p>Training and equipping future leaders and entrepreneurs through inclusive and innovative programs.</p>
            </div>

            <div class="col-md-6">
                <h6 class="mb-10">✔ Youth & Women Empowerment</h6>
                <p>Empowering youth and women through economic, leadership, and social development initiatives.</p>
            </div>

            <div class="col-md-6">
                <h6 class="mb-10">✔ Mentorship & Knowledge Exchange</h6>
                <p>Building sustainable platforms that foster mentorship, guidance, and shared learning.</p>
            </div>

            <div class="col-md-6">
                <h6 class="mb-10">✔ Strategic Collaboration</h6>
                <p>Partnering with organizations committed to humanitarian, development, and impact-driven goals.</p>
            </div>
        </div>
    </div>
</section>

<section class="about-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Founder Image -->
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about__image">
                    <div class="image">
                        <img src="{{asset('assets/images/about/founder.jpg')}}" alt="Founder - Destiny Call Foundation">
                    </div>
                </div>
            </div>

            <!-- Founder Content -->
            <div class="col-lg-7">
                <div class="section-header mb-20">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-solid fa-angles-left pe-1"></i> FOUNDER’S MESSAGE <i
                            class="fa-solid fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        The Vision Behind Destiny Call Foundation
                    </h2>
                </div>

                <div class="about__content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <p>
                        Dear Friends and Partners, <br>
                        Destiny Call Foundation was born from a personal journey of purpose, resilience, and a deep conviction that every life carries the potential to transform communities. As someone who grew up witnessing the challenges faced by youth and women in undeserved areas, I — Ayuba Garba—felt a divine call to create a platform that would reignite dreams and empower changemakers.
                        <br>Today, Destiny Call Foundation stands as a beacon of hope, equipping the next generation with tools for leadership, entrepreneurship, and impact. We've seen young people rise from uncertainty to confidence, women build businesses from scratch, and communities flourish through shared purpose.
                    </p>

                    <br>

                    <p>
                        This mission is bigger than any one person — it thrives because of people like you. Your support, partnership, and belief in this vision fuel every step forward.
                    </p>

                    <br>
                    
                    <p>
                        Thank you for walking this journey with us. Together, we are raising leaders who build and transform.
                    </p>
                    
                    <br>
                    <p>With gratitude,</p>
                    <div class="">
                        <h3 class="mb-0">AYUBA GARBA</h3>
                        <h6 class="mb-0">Founder &amp; Managing Director</h6>
                        <span class="sm-font">Destiny Call Foundation</span>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>


@endsection