@extends('frontend.layouts.master')
@section('title', 'Find Us | Churi House Outlets Near You')
@section('meta_description', 'Locate your nearest Churi House outlet across Punjab, Haryana & Himachal Pradesh. Enjoy authentic chai & churi at a location close to you.')
@section('meta_keywords', 'churi house near me, churi house outlets in mohali, find churi house in india, churi house locations punjab')
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

    <section class="chs-history-area  bg-section">

        <div class="container">

            <div class="row align-items-center g-5">



                <div class="col-lg-6">

                    <div class="chs-history-details">
                        <div class="section-title section-title-center mb-4">
                            <h3 class="wow fadeInUp"> Find Us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"> Serving Happiness Across Every Location

                            </h2>
                        </div>


                        <p class="chs-history-description">
                            With a growing network of Churi House outlets, we're bringing authentic flavors and memorable
                            dining experiences closer to you. Find your nearest outlet and enjoy the perfect combination of
                            great food, refreshing beverages, and exceptional service.

                        </p>

                        <p class="chs-history-description">
                            <b>We look forward to welcoming you soon!
                            </b>
                        </p>





                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="chs-history-image-box">

                        <img src="{{ asset('images/upload/home-a.png') }}" class="img-fluid chs-history-main-image"
                            alt="Our History">



                    </div>

                </div>

            </div>

        </div>

    </section>

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