<footer class="footer-area secondary-bg overflow-hidden">
        <div class="footer__main-wrp">
            <div class="footer__shape-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="footer__shape__animation" src="assets/images/shape/footer-shape-left.png" alt="shape">
            </div>
            <div class="footer__shape-right wow slideInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img class="footer__shape__animation-right" src="assets/images/shape/footer-shape-right.png"
                    alt="shape">
            </div>
            <div class="container">
                <div class="footer__wrp pt-120 pb-120">
                    <div class="row g-4 justify-content-between">
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <a href="index.html" class="logo mb-40">
                                    <img src="assets/images/logo/logo-light.png" alt="image">
                                </a>
                                <p class="text-white">{{ setting('company_about') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <h3 class="title mb-40 text-white">Latest Post</h3>
                                <ul class="post">
                                    <li class="mb-3">
                                        <div class="image">
                                            <img src="assets/images/footer/footer-blog1.png" alt="image">
                                        </div>
                                        <div class="con"><span>22, Nov 2023</span>
                                            <a href="blog-single.html">
                                                Provide Healthy Impoverished..
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="assets/images/footer/footer-blog2.png" alt="image">
                                        </div>
                                        <div class="con"><span>18, Nov 2023</span>
                                            <a href="blog-single.html">
                                                Rebecca’s New <br>
                                                Album..
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <h3 class="title mb-40 text-white">Contact Info</h3>
                                <ul class="link info">
                                    <li class="mb-3">
                                        <a href="tel:{{ setting('company_phone_number') }}"><i
                                                class="fa-solid fa-phone me-1 primary-color"></i>{{ setting('company_phone_number') }}</a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="mailto:{{ setting('company_email') }}"><i class="fa-sharp fa-solid fa-envelope me-1 primary-color"></i>{{ setting('company_email') }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-solid fa-location-dot me-1 primary-color"></i>{{ setting('company_address') }}</a>
                                    </li>
                                </ul>
                                <div class="social-icon mt-30">
                                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="active" href="#0"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copytext">
            <p class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">&copy; All Copyright 2025 </p>
        </div>
    </footer>