 <!-- Hero Section Start -->
    <div class="hero dark-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="myvideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay muted loop id="myvideo"><source src="{{ url('images/video.mp4') }}" type="video/mp4"></video>
            
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
                            <h3 class="wow fadeInUp">Experience the Taste of Tradition at Churi House</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Churi House – A Celebration of Indian Flavours and Comfort</h1>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{ route('contact-us') }}" class="btn-default btn-highlighted">Get Started</a>
                            <a href="{{ route('our-menu') }}" class="btn-default btn-dark">Explore Our Menu</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-5">
                    <!-- Working Hours Item Start -->
                    <div class="working-hours-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Working Hours Header Start -->
                        <div class="working-hours-header">
                            <h3>Working Hours</h3>
                            <img src="images/icon-clock-white.svg" alt="">
                        </div>
                        <!-- Working Hours Header End -->
                        
                        <!-- Working Hours Body Start -->
                        <div class="working-hours-body">
                            <ul>
                                <li>Monday - Friday <span>8:00 AM - 8:00 PM</span></li>
                                <li>Saturday <span>9:00 AM - 6:00 PM</span></li>
                                <li>Sunday <span>Closed</span></li>
                            </ul>
                        </div>
                        <!-- Working Hours Body End -->
                    </div>
                    <!-- Working Hours Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->