@extends('layout.app')
@section('title', 'Donate')
@section('content')

<!-- Donate Hero Start -->
<section class="about-two-area pt-120 pb-120 overflow-hidden">
    <div class="about-two__wrp">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-two__image image pr-60">
                        <img src="{{asset('assets/images/icon/donate-hero.avif')}}" alt="Donate">
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
                            <i class="fa-solid fa-angles-left pe-1"></i> DONATE <i class="fa-solid fa-angles-right ps-1"></i>
                        </h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            Support the Work. Empower More Lives.
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            Your donation helps Destiny Call Foundation equip youth and women with leadership skills,
                            entrepreneurial tools, and mentorship opportunities that create real impact in underserved communities.
                        </p>

                        <div class="d-flex flex-wrap gap-3 mt-30 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="btn-two">
                                <span class="btn-circle"></span>
                                <a href="#donation-methods" class="btn-inner">
                                    <span class="btn-text">Choose a Donation Method</span>
                                </a>
                            </div>

                            <div class="btn-two">
                                <span class="btn-circle"></span>
                                <a href="#donation-faq" class="btn-inner">
                                    <span class="btn-text">Donation FAQ</span>
                                </a>
                            </div>
                        </div>

                        <p class="mt-20 sm-font wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <i class="fa-solid fa-lock me-2"></i> Secure options • Local & International donors welcome
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Donate Hero End -->


<!-- Donation Methods Start -->
<section id="donation-methods" class="about-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <i class="fa-solid fa-angles-left pe-1"></i> DONATION OPTIONS <i class="fa-solid fa-angles-right ps-1"></i>
            </h5>
            <h2>Choose How You Want to Give</h2>
            <p class="mt-20">
                Pick the option that works best for you. You can donate via bank transfer (NGN/USD) or pay instantly with Flutterwave.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="service__item">
                    <div class="service__icon">
                        <img src="{{asset('assets/images/icon/naira.png')}}" width="150" alt="Naira Account">
                    </div>
                    <div class="service__content">
                        <h3 class="text-white">Naira Account (1)</h3>

                        <ul class="text-white mt-20" style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><strong>Bank:</strong> <span id="ngn_bank_1">FIRST BANK OF NIGERIA</span></li>
                            <li class="mb-10"><strong>Account Name:</strong> <span id="ngn_name_1">DESTINY CALL FOUNDATION</span></li>
                            <li class="mb-10"><strong>Account Number:</strong> <span id="ngn_acc_1">2032819364</span></li>
                        </ul>

                        <div class="d-flex gap-2 flex-wrap mt-20">
                            <button class="btn btn-light btn-sm" onclick="copyText('ngn_acc_1')">
                                <i class="fa-regular fa-copy me-1"></i> Copy Account No.
                            </button>
                            <button class="btn btn-light btn-sm" onclick="copyAll('ngn_bank_1','ngn_name_1','ngn_acc_1')">
                                <i class="fa-solid fa-copy me-1"></i> Copy All
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="service__item active">
                    <div class="service__icon">
                        <img src="{{asset('assets/images/icon/naira.png')}}" width="90" alt="Naira Account">
                    </div>
                    <div class="service__content">
                        <h3 class="text-white">Naira Account (2)</h3>

                        <ul class="text-white mt-20" style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><strong>Bank:</strong> <span id="ngn_bank_2">ZENITH BANK PLC.</span></li>
                            <li class="mb-10"><strong>Account Name:</strong> <span id="ngn_name_2">DESTINY CALL FOUNDATION</span></li>
                            <li class="mb-10"><strong>Account Number:</strong> <span id="ngn_acc_2">1310884249</span></li>
                        </ul>

                        <div class="d-flex gap-2 flex-wrap mt-20">
                            <button class="btn btn-light btn-sm" onclick="copyText('ngn_acc_2')">
                                <i class="fa-regular fa-copy me-1"></i> Copy Account No.
                            </button>
                            <button class="btn btn-light btn-sm" onclick="copyAll('ngn_bank_2','ngn_name_2','ngn_acc_2')">
                                <i class="fa-solid fa-copy me-1"></i> Copy All
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-10">
            <div class="col-lg-12 col-md-12">
                <div class="service__item">
                    <div class="service__icon">
                        <img src="{{asset('assets/images/icon/dollar.jpg')}}" width="90" alt="Dollar Account">
                    </div>
                    <div class="service__content">
                        <h3 class="text-white">Dollar Account (USD)</h3>

                        <ul class="text-white mt-20" style="list-style: none; padding-left: 0;">
                            <li class="mb-10"><strong>Bank:</strong> <span id="usd_bank">ZENITH BANK PLC.</span></li>
                            <li class="mb-10"><strong>Account Name:</strong> <span id="usd_name">DESTINY CALL FOUNDATION</span></li>
                            <li class="mb-10"><strong>Account Number:</strong> <span id="usd_acc">5075-681932</span></li>
                            <li class="mb-10"><strong>Swift Code:</strong> <span id="usd_swift">ZEIBNGLAXXX (Primary Oﬃce-Lagos, Nigeria) </span></li>
                            <li class="mb-10"><strong>Bank Address:</strong> <span id="usd_address">Zenith Bank Plc, Galadima Aminu Way, Jimeta-Yola, Adamawa State, Nigeria.</span></li>
                        </ul>

                        <div class="d-flex gap-2 flex-wrap mt-20">
                            <button class="btn btn-light btn-sm" onclick="copyText('usd_acc')">
                                <i class="fa-regular fa-copy me-1"></i> Copy Account No.
                            </button>
                            <button class="btn btn-light btn-sm" onclick="copyAll('usd_bank','usd_name','usd_acc','usd_swift')">
                                <i class="fa-solid fa-copy me-1"></i> Copy All
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional Donation Note -->
        <div class="text-center mt-60">
            <p class="mb-0">
                <strong>After donating:</strong> Kindly send proof of payment to
                <a href="mailto:info@destinycallfoundation.org">info@destinycallfoundation.org</a>
                so we can acknowledge your donation properly.
            </p>
        </div>
    </div>
</section>
<!-- Donation Methods End -->

<!-- FAQ Start -->
<section id="donation-faq" class="about-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <i class="fa-solid fa-angles-left pe-1"></i> DONATION FAQ <i class="fa-solid fa-angles-right ps-1"></i>
            </h5>
            <h2>Common Questions</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="p-4 bg-white rounded-3 shadow-sm">
                    <h6 class="mb-10">Is my donation secure?</h6>
                    <p class="mb-0">Yes. Bank transfers go directly to our official accounts and Flutterwave uses secure payment processing.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 bg-white rounded-3 shadow-sm">
                    <h6 class="mb-10">Can I donate from outside Nigeria?</h6>
                    <p class="mb-0">Yes. Use the USD bank account or Flutterwave payment option for international donations.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 bg-white rounded-3 shadow-sm">
                    <h6 class="mb-10">Do you issue receipts?</h6>
                    <p class="mb-0">Yes. Email your proof of payment or submit your details so we can send a confirmation.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 bg-white rounded-3 shadow-sm">
                    <h6 class="mb-10">Can I donate anonymously?</h6>
                    <p class="mb-0">Absolutely. You can donate without filling the donor form or submitting any details.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ End -->


<!-- Copy Script -->
<script>
    function copyText(elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(() => {
            alert("Copied: " + text);
        });
    }

    function copyAll(...ids) {
        const values = ids.map(id => document.getElementById(id).innerText).join(" | ");
        navigator.clipboard.writeText(values).then(() => {
            alert("Copied: " + values);
        });
    }
</script>

@endsection
{{-- @extends('layout.app')
@section('title', 'Donate Now')
@section('content')

<!-- Donation Hero Section -->
<section class="donation-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header text-center mb-60">
            <h5>
                <i class="fa-solid fa-angles-left pe-1"></i> SUPPORT US <i class="fa-solid fa-angles-right ps-1"></i>
            </h5>
            <h2>Make a Donation</h2>
            <p>
                Your generosity helps us empower youth and women, build leaders, and create lasting impact across communities.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Naira Account 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="donation-card text-center p-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="background:#043263; border-radius:12px;">
                    <div class="icon mb-3">
                        <i class="fa-solid fa-money-bill-wave fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-2">Naira Account 1</h3>
                    <p class="text-white mb-1">Account Name: Destiny Call Foundation</p>
                    <p class="text-white mb-1">Bank: First Bank of Nigeria</p>
                    <p class="text-white mb-0">Account Number: 2032819364</p>
                </div>
            </div>

            <!-- Naira Account 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="donation-card text-center p-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="background:#043263; border-radius:12px;">
                    <div class="icon mb-3">
                        <i class="fa-solid fa-money-bill-wave fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-2">Naira Account 2</h3>
                    <p class="text-white mb-1">Account Name: Destiny Call Foundation</p>
                    <p class="text-white mb-1">Bank: Zenith Bank Plc.</p>
                    <p class="text-white mb-0">Account Number: 1310884249</p>
                </div>
            </div>

            <!-- Dollar Account -->
            <div class="col-lg-4 col-md-6">
                <div class="donation-card text-center p-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms" style="background:#f74f22; border-radius:12px;">
                    <div class="icon mb-3">
                        <i class="fa-solid fa-dollar-sign fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-2">Dollar Account</h3>
                    <p class="text-white mb-1">Account Name: Destiny Call Foundation</p>
                    <p class="text-white mb-1">Bank: Zenith Bank (USD)</p>
                    <p class="text-white mb-0">Account Number: 5075-681932</p>
                </div>
            </div>

            <!-- Flutterwave Payment Link -->
            <div class="col-lg-4 col-md-6">
                <div class="donation-card text-center p-4 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms" style="background:#f4b725; border-radius:12px;">
                    <div class="icon mb-3">
                        <i class="fa-solid fa-credit-card fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-2">Pay via Flutterwave</h3>
                    <p class="text-white mb-3">Instant and secure online donation.</p>
                    <a href="https://checkout.flutterwave.com/v3/hosted/pay/your-flutterwave-link" target="_blank" class="btn btn-primary">
                        Donate Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-area pt-80 pb-80">
    <div class="container text-center">
        <h2 class="mb-3">Your Support Changes Lives</h2>
        <p class="mb-4">Every contribution, no matter the size, helps us empower youth, women, and communities.</p>
        <a href="{{ asset('assets/DCF_BROCHURE.pdf') }}" target="_blank" class="btn btn-outline-light">Download Our Brochure</a>
    </div>
</section>

@endsection --}}
