@extends('layout.app')
@section('title', 'Flagship Programs')
@section('content')

<!-- Programs Hero Start -->
<section class="about-two-area pt-120 pb-120 overflow-hidden">
    <div class="about-two__wrp">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-two__image image pr-60">
                        <img src="{{asset('assets/images/icon/donate-hero.avif')}}" alt="Programs">
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
                            <i class="fa-solid fa-angles-left pe-1"></i> OUR PROGRAMS <i class="fa-solid fa-angles-right ps-1"></i>
                        </h5>

                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            Destiny Call Foundation Flagship Programs
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            We run impactful programs that equip youth and women with leadership skills, entrepreneurial tools,
                            mentorship, and the confidence to create change in their communities.
                        </p>

                        <div class="d-flex flex-wrap gap-3 mt-30 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="btn-two">
                                <span class="btn-circle"></span>
                                <a href="#flagship-programs" class="btn-inner">
                                    <span class="btn-text">Explore Programs</span>
                                </a>
                            </div>

                            <div class="btn-two">
                                <span class="btn-circle"></span>
                                <a href="/donate" class="btn-inner">
                                    <span class="btn-text">Support This Work</span>
                                </a>
                            </div>
                        </div>

                        <p class="mt-20 sm-font wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <i class="fa-solid fa-heart me-2"></i> Leadership • Mentorship • Community Impact
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Programs Hero End -->


<!-- Programs Grid Start -->
<section id="flagship-programs" class="about-area pt-120 pb-120 sub-bg">
    <div class="container-fluid px-lg-5"">

        <div class="section-header text-center mb-60">
            <h5>
                <i class="fa-solid fa-angles-left pe-1"></i> FLAGSHIP PROGRAMS <i class="fa-solid fa-angles-right ps-1"></i>
            </h5>
            <h2>Our Core Initiatives</h2>
            <p class="mt-20">
                Each program is designed to inspire, train, and support young people and women to become leaders,
                innovators, and changemakers.
            </p>
        </div>

        <div class="row g-4">

            <!-- Program 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="service__item h-100">
                    <div class="service__content">
                        <h3 class="text-white mb-10">Empowered to Lead and Build</h3>
                        <p class="text-white mb-20">Inspiring leaders, strengthening communities.</p>

                        <p class="text-white">
                            Emerging leaders, professionals, and influencers join this program to gain practical leadership skills and credibility.
                        </p>

                        <h6 class="text-white mt-20">How it works:</h6>
                        <ul class="text-white mt-10" style="padding-left: 18px; line-height: 1.8;">
                            <li>Leadership forums and seminars with universities, associations, and churches</li>
                            <li>Mentorship and networking opportunities</li>
                            <li>Articles, podcasts, and videos on leadership and community building</li>
                        </ul>

                        <div class="mt-20 p-3 rounded-3" style="background: rgba(255,255,255,0.08);">
                            <strong class="text-white">Transformation:</strong>
                            <span class="text-white"> Participants become confident, ethical leaders who drive positive change in their communities.</span>
                        </div>

                        <div class="mt-25">
                            <a href="#" class="btn btn-light btn-sm">
                                Apply Now <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="service__item h-100 active">
                    <div class="service__content">
                        <h3 class="text-white mb-10">Women in Enterprise</h3>
                        <p class="text-white mb-20">Empowering women, building businesses.</p>

                        <p class="text-white">
                            Designed for women entrepreneurs, small business owners, and aspiring female leaders.
                        </p>

                        <h6 class="text-white mt-20">How it works:</h6>
                        <ul class="text-white mt-10" style="padding-left: 18px; line-height: 1.8;">
                            <li>Training workshops and financial literacy sessions</li>
                            <li>Partnerships with microfinance institutions and cooperatives</li>
                            <li>Storytelling campaigns showcasing women’s success stories</li>
                        </ul>

                        <div class="mt-20 p-3 rounded-3" style="background: rgba(255,255,255,0.08);">
                            <strong class="text-white">Transformation:</strong>
                            <span class="text-white"> Women gain the tools to build sustainable businesses, create jobs, and uplift their families.</span>
                        </div>

                        <div class="mt-25">
                            <a href="#" class="btn btn-light btn-sm">
                                Apply Now <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="service__item h-100">
                    <div class="service__content">
                        <h3 class="text-white mb-10">Mentorship Circle</h3>
                        <p class="text-white mb-20">Guidance, belonging, and growth.</p>

                        <p class="text-white">
                            Youth, students, and early-career professionals connect with mentors who guide them through education, career, and life.
                        </p>

                        <h6 class="text-white mt-20">How it works:</h6>
                        <ul class="text-white mt-10" style="padding-left: 18px; line-height: 1.8;">
                            <li>Partnerships with schools and universities</li>
                            <li>Peer-to-peer recruitment and community events</li>
                            <li>Digital engagement through Instagram Live and Zoom sessions</li>
                        </ul>

                        <div class="mt-20 p-3 rounded-3" style="background: rgba(255,255,255,0.08);">
                            <strong class="text-white">Transformation:</strong>
                            <span class="text-white"> Young people gain clarity, confidence, and purpose, supported by a strong alumni network.</span>
                        </div>

                        <div class="mt-25">
                            <a href="#" class="btn btn-light btn-sm">
                                Join Now <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="service__item h-100">
                    <div class="service__content">
                        <h3 class="text-white mb-10">Youth Leadership Bootcamp</h3>
                        <p class="text-white mb-20">Energy, innovation, and activism.</p>

                        <p class="text-white">
                            An intensive program for young people (16–25) passionate about leadership and innovation.
                        </p>

                        <h6 class="text-white mt-20">How it works:</h6>
                        <ul class="text-white mt-10" style="padding-left: 18px; line-height: 1.8;">
                            <li>Recruitment through campus ambassadors and social media challenges</li>
                            <li>Gamified competitions (debates, hackathons, essay contests)</li>
                            <li>Scholarships for talented but underprivileged youth</li>
                        </ul>

                        <div class="mt-20 p-3 rounded-3" style="background: rgba(255,255,255,0.08);">
                            <strong class="text-white">Transformation:</strong>
                            <span class="text-white"> Youth emerge as bold, innovative leaders ready to tackle challenges and drive social impact.</span>
                        </div>

                        <div class="mt-25">
                            <a href="#" class="btn btn-light btn-sm">
                                Apply Now <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Programs Grid End -->

@endsection
