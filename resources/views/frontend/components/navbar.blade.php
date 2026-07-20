<!-- Header Start -->
<header class="main-header">
    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li class="has-pipe-lg has-pipe-md"><a href="tel:+919800003447"><img src="images/icon-phone-accent.svg"
                                        alt=""><span>Phone: </span>+91 9800003447</a></li>
                            <li class="has-pipe-lg"><a href="mailto:info@churihouse.com"><img
                                        src="images/icon-mail-accent.svg" alt=""><span>Email:
                                    </span>info@churihouse.com</a></li>
                            <li class="d-none d-md-block"><a href="javascript:void(0);">
                                
                                    </svg><img src="{{ asset('images/upload/india.jpg') }}" class="flag "> India  | <img src="{{ asset('images/upload/canada.jpg') }}" class="flag ms-2"> Canada </a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-md-3">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li class="text-white">Follow us on :</li>

                            <li><a href="https://www.facebook.com/churihouseindia" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/churihouseindia/" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo/logo.png') }}" style="width: 80px;" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a> </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About Us</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('our-menu') }}">Our Menu</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="{{ route('locations') }}">Franchise </a></li> -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('our-gallery') }}">Find Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('career') }}">Careers</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                            </li>
                            {{-- <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li> --}}

                            <li class="nav-item highlighted-menu"><a class="nav-link"
                                    href="{{ route('locations') }}">Franchise Request</a></li>
                        </ul>
                    </div>
                    <div class="ch-language">

                        <div class="ch-language-icon">
                            <i class="fa-solid fa-earth-asia"></i>
                        </div>

                        <div id="google_translate_element"></div>

                    </div>
                    <!-- Header Btn Start -->

                    <div class="header-btn">

                        <a href="{{ route('locations') }}" class="btn-default">Franchise Request</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->