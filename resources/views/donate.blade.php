@extends('layout.app')
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

@endsection
