@extends('frontend.layouts.master')
@section('title', 'Welcome to Churi House')
@section('content')

    @include('frontend.components.home.hero')
    @include('frontend.components.home.about')
    <section class="ch_bestseller_section bg-section dark-section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title section-title-center mb-4">
                <h3 class="wow fadeInUp"> Customer Favorites</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque"> Our Best Sellers</h2>
            </div>
           
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="ch_bestseller_card">
                        <div class="ch_bestseller_image">
                            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=800" alt="">
                        </div>

                        <div class="ch_bestseller_content">
                            <span class="ch_bestseller_tag">Signature</span>
                            <h5>Stuffed Paratha</h5>

                            <div class="ch_bestseller_rating">
                                ★★★★★
                            </div>

                            <p>Freshly prepared with premium ingredients and served with homemade butter.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="ch_bestseller_card">
                        <div class="ch_bestseller_image">
                            <img src="https://images.unsplash.com/photo-1515823064-d6e0c04616a7?w=800" alt="">
                        </div>

                        <div class="ch_bestseller_content">
                            <span class="ch_bestseller_tag">Popular</span>
                            <h5>Masala Chai</h5>

                            <div class="ch_bestseller_rating">
                                ★★★★★
                            </div>

                            <p>Rich, aromatic and brewed to perfection with traditional Indian spices.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="ch_bestseller_card">
                        <div class="ch_bestseller_image">
                            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=800" alt="">
                        </div>

                        <div class="ch_bestseller_content">
                            <span class="ch_bestseller_tag">Chef Choice</span>
                            <h5>Farm House Pizza</h5>

                            <div class="ch_bestseller_rating">
                                ★★★★★
                            </div>

                            <p>Loaded with fresh vegetables, mozzarella cheese and house-made sauce.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    @include('frontend.components.home.what-we-do')
    @include('frontend.components.home.ticker')
    
    @include('frontend.components.home.cta')
    @include('frontend.components.home.events')

    @include('frontend.components.home.testimonials')

    @include('frontend.components.home.gallery')

@endsection