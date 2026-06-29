<!-- Hero Section Start -->
<div class="hero dark-section">
    <!-- Video Start -->
    <div class="hero-bg-video">
        <!-- Selfhosted Video Start -->
        <!-- <video autoplay muted loop id="myvideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
        <!-- <video autoplay muted loop id="myvideo">
            <source src="{{ url('images/upload/home-coffee.mp4') }}" type="video/mp4">
        </video> -->
        <video autoplay muted loop id="myvideo">
            <source src="{{ url('images/video.mp4') }}" type="video/mp4">
        </video>
        <!-- <img src="{{ asset('images/upload/main-banner.jpeg') }}" > -->

        <!-- Selfhosted Video End -->

        <!-- Youtube Video Start -->
        <!-- <div id="herovideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
        <!-- Youtube Video End -->
    </div>
    <!-- Video End -->
    <div class="container">
        <div class="row align-items-end d-flex justify-content-center">
            <div class="col-lg-7 text-center">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Indulge in Authentic Flavours at Churi House </h3>
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Churi House – Where Every Taste Meets
                            Tradition.

                        </h1>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="{{ route('our-menu') }}" class="btn-default btn-highlighted">View Our Menu</a>
                         <a href="{{ route('contact-us') }}" class="ch-special-btn btn-default mt-0 bg-white">
                        Contact Us <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    </div>
                    <!-- Hero Button End -->

                    <div class="counter-hero">
                        <div class="row g-0 counter-box">

                            <div class="col-6 col-md-3 p-0">
                                <div class="ch-counter-item">
                                    <h3><span class="ch-counter" data-count="170">0</span>+</h3>
                                    <p> OUTLETS</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 p-0">
                                <div class="ch-counter-item">
                                    <h3><span class="ch-counter" data-count="10">0</span>L+</h3>
                                    <p> CUSTOMERS</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 p-0">
                                <div class="ch-counter-item">
                                    <h3><span class="ch-counter" data-count="60">0</span>+</h3>
                                    <p>CITIES SERVED</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-3 p-0">
                                <div class="ch-counter-item">
                                    <h3><span class="ch-counter" data-count="1000">0</span>+</h3>
                                    <p>TEAM MEMBERS</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Hero Content End -->
            </div>


        </div>
    </div>
</div>
<!-- Hero Section End -->