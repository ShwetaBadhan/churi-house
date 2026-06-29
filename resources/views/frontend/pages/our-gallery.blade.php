@extends('frontend.layouts.master')
@section('title', 'Our Gallery')
@section('content')

 <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Find Us</h1>                        
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Find Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

   <section class="franchise-network bg-section">

        <div class="container">
            <div class="section-title text-center">
                <h3 class="wow fadeInUp">EXPAND WITH US ACROSS INDIA</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">Be part of a growing brand that's bringing great food
                    and memorable experiences. </h2>
            </div>


            <div class="franchise-wrapper">

                <!-- Left -->
                <div class="franchise-sidebar">

                    <div class="state-item active" data-state="Punjab"
                        data-locations="Chandigarh University, Sector 35C, Mohali Phase 3B2">

                        <div class="state-header">
                            <h4>Punjab</h4>
                            <span>3 Locations</span>
                        </div>

                    </div>

                    <div class="state-item" data-state="Haryana" data-locations="Gurugram, Faridabad">

                        <div class="state-header">
                            <h4>Haryana</h4>
                            <span>2 Locations</span>
                        </div>

                    </div>

                    <div class="state-item" data-state="Himachal" data-locations="Shimla">

                        <div class="state-header">
                            <h4>Himachal Pradesh</h4>
                            <span>1 Location</span>
                        </div>

                    </div>

                </div>

                <!-- Right -->
                <div class="franchise-map-area">

                    <div class="india-map">

                        <div class="map-state punjab active-state">
                            Punjab
                        </div>

                        <div class="map-state haryana">
                            Haryana
                        </div>

                        <div class="map-state himachal">
                            Himachal
                        </div>

                    </div>

                    <div class="location-popup">

                        <h3 id="stateName">Punjab</h3>

                        <ul id="locationList">

                            <li>Chandigarh University</li>
                            <li>Sector 35C</li>
                            <li>Mohali Phase 3B2</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection