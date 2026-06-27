@extends('frontend.layouts.master')
@section('title', 'About Us')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>c
        </div>
    </div>
    <!-- Page Header End -->

    @include('frontend.components.about.about-us')
    @include('frontend.components.home.history')
    <section class="ch-mv-section bg-section">

        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Purpose</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Driven by Tradition, Inspired by Every Cup &
                            Every Bite
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            

            <div class="row g-4 mt-4">

                <!-- Mission -->
                <div class="col-lg-6">
                    <div class="ch-mv-card">
                        <div class="ch-mv-icon">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>

                        <span class="ch-mv-label">Our Mission</span>

                        <h4>Serving Authentic Taste with Passion</h4>

                        <p>
                            Our mission is to bring families and communities together
                            through authentic Indian recipes prepared with premium
                            ingredients, traditional methods, and exceptional service.
                            Every meal is crafted to deliver warmth, freshness, and
                            unforgettable flavors.
                        </p>

                        <ul class="ch-mv-list">
                            <li>Fresh & premium ingredients</li>
                            <li>Authentic traditional recipes</li>
                            <li>Exceptional customer experience</li>
                            <li>Consistency in taste & quality</li>
                        </ul>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-6">
                    <div class="ch-mv-card ch-mv-card-alt">
                        <div class="ch-mv-icon">
                           <i class="fa-solid fa-eye"></i>
                        </div>

                        <span class="ch-mv-label">Our Vision</span>

                        <h4>Creating a Global Home for Indian Flavours</h4>

                        <p>
                            We envision Churi House becoming a trusted destination
                            where people across the world experience the richness of
                            Indian culinary traditions, creating meaningful moments
                            over food that feels just like home.
                        </p>

                        <ul class="ch-mv-list">
                            <li>Expand globally with the same authenticity</li>
                            <li>Celebrate Indian culinary heritage</li>
                            <li>Innovate while respecting tradition</li>
                            <li>Build lasting customer relationships</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection