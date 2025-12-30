<div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="/" class="logo mb-40">
            <img src="{{asset('assets/images/logo/logo-light.png')}}" alt="Destiny Call Foundation Logo">
        </a>
        <div class="mobile-menu overflow-hidden"></div>
        <ul class="info pt-40">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">{{ setting('company_address') }}</a>
            </li>
            <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                    href="tel:{{ setting('company_phone_number') }}">{{ setting('company_phone_number') }}</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">{{ setting('company_email') }}</a></li>
        </ul>
        <div class="social-icon mt-20">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>