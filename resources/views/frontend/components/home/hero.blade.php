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
        <div class="row align-items-end">
            <div class="col-lg-7">
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
                        <a href="{{ route('contact-us') }}" class="btn-default btn-highlighted">Get Started</a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>


        </div>
    </div>
</div>
<!-- Hero Section End -->