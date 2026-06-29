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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
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

    <section class="ch-history-section bg-section dark-section">
        <div class="container">

            <div class="section-title section-title-center mb-4">
                <h3 class="wow fadeInUp"> Our Journey</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque"> Our History
                </h2>
            </div>

            <div class="ch-history-timeline">

                <!-- Item -->
                <div class="ch-history-item left">
                    <div class="ch-history-year">2018</div>

                    <div class="ch-history-card">
                        <div class="ch-history-icon">
                            <i class="fa-solid fa-seedling"></i>
                        </div>

                        <h4>The Beginning</h4>

                        <p>
                            Churi House started with a simple vision—to serve fresh,
                            authentic chai with homemade flavors that bring people together.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="ch-history-item right">
                    <div class="ch-history-year">2020</div>

                    <div class="ch-history-card">
                        <div class="ch-history-icon">
                            <i class="fa-solid fa-mug-hot"></i>
                        </div>

                        <h4>Signature Chai</h4>

                        <p>
                            Introduced our signature chai menu and handcrafted snacks,
                            quickly becoming a local favorite.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="ch-history-item left">
                    <div class="ch-history-year">2022</div>

                    <div class="ch-history-card">
                        <div class="ch-history-icon">
                            <i class="fa-solid fa-utensils"></i>
                        </div>

                        <h4>Expanded Menu</h4>

                        <p>
                            Added café-style meals, desserts, and beverages while
                            maintaining our commitment to quality ingredients.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="ch-history-item right">
                    <div class="ch-history-year">2024</div>

                    <div class="ch-history-card">
                        <div class="ch-history-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <h4>Community Favourite</h4>

                        <p>
                            Thousands of happy guests have made Churi House their go-to
                            place for conversations, celebrations, and unforgettable food.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="ch-mv-section bg-section">
        <div class="container">
            <div class="section-title section-title-center mb-4">
                <h3 class="wow fadeInUp">Our Purpose</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">
                    Mission & Vision
                </h2>
            </div>
            <div class="ch-mv-row">

                <div class="ch-mv-image">
                    <img src="{{ asset('images/upload/franchise.jpg') }}" alt="Our Mission">
                </div>

                <div class="ch-mv-content">
                    <div class="ch-mv-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <span>Our Purpose</span>

                    <h2>Serving Authentic Taste with Passion</h2>

                    <p align="justify">
                        Our mission is to bring families and communities together through authentic Indian
                        recipes prepared with premium ingredients, traditional methods, and exceptional
                        service. Every meal is crafted to deliver warmth, freshness, and unforgettable
                        flavors.
                    </p>

                   
                </div>

            </div>


            <div class="ch-mv-row ch-mv-reverse">

                <div class="ch-mv-image">
                    <img src="{{ asset('images/upload/home-a.jpg') }}" alt="Our Vision">
                </div>

                <div class="ch-mv-content">
                    <div class="ch-mv-icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>

                    <span>Our Future</span>

                    <h2>Creating a Global Home for Indian Flavours</h2>

                    <p align="justify">
                        We envision Churi House becoming a trusted destination where people across the
                        world experience the richness of Indian culinary traditions, creating meaningful
                        moments over food that feels just like home.
                    </p>

                   
                </div>

            </div>

        </div>
    </section>



@endsection