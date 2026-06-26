@extends('frontend.layouts.master')
@section('title', 'Welcome to Churi House')
@section('content')

    @include('frontend.components.home.hero')
    @include('frontend.components.home.about')

    <!-- dummy counter -->
    <!-- <section class="ch-fr-counter-bg-section bg-section">
                                                                    <div class="ch-fr-counter-overlay"></div>

                                                                    <div class="container position-relative">
                                                                        <div class="row">

                                                                            <div class="col-lg-3 col-6">
                                                                                <div class="ch-fr-counter-box">
                                                                                    <h2><span class="counter">50</span>+</h2>
                                                                                    <h4>Menu Items</h4>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-3 col-6">
                                                                                <div class="ch-fr-counter-box">
                                                                                    <h2><span class="counter">100</span>K+</h2>
                                                                                    <h4>Happy Customers</h4>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-3 col-6">
                                                                                <div class="ch-fr-counter-box">
                                                                                    <h2><span class="counter">10</span>+</h2>
                                                                                    <h4>Years Experience</h4>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-3 col-6">
                                                                                <div class="ch-fr-counter-box">
                                                                                    <h2><span class="counter">100</span>%</h2>
                                                                                    <h4>Support</h4>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </section> -->


    <!-- <section class="ch-franchise-category-section">
                                                                        <div class="container">
                                                                            <div class="row g-4">

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" alt="Pizza">
                                                                                        <h4>Pizza</h4>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1626700051175-6818013e1d4f?w=600" alt="Wraps">
                                                                                        <h4>Wraps</h4>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600" alt="Burgers">
                                                                                        <h4>Burgers</h4>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600" alt="Refreshers">
                                                                                        <h4>Refreshers</h4>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?w=600" alt="Momos">
                                                                                        <h4>Momos</h4>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=600" alt="Sandwiches">
                                                                                        <h4>Sandwiches</h4>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1619740455993-9e612b1af08a?w=600" alt="Pasta">
                                                                                        <h4>Pasta</h4>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-6 col-md-4 col-lg-3">
                                                                                    <a href="#" class="ch-franchise-category-card">
                                                                                        <img src="https://images.unsplash.com/photo-1541592106381-b31e9677c0e5?w=600" alt="Chai">
                                                                                        <h4>Chai</h4>
                                                                                    </a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </section> -->
    @include('frontend.components.home.best-seller')

    @include('frontend.components.home.what-we-do')

    @include('frontend.components.home.testimonials')


    <section class="ch-specials-showcase bg-section">
        <div class="container">
            <div class="section-title section-title-center mb-4">
                <h3 class="wow fadeInUp"> Our Specials</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque"> Handpicked Favorites, Crafted to Delight
                </h2>
            </div>



            <div class="ch-specials-wrapper">

                <!-- Left Menu -->
                <div class="ch-specials-list">

                    <div class="ch-specials-item active" data-title="Pizza"
                        data-desc="Classic pizza topped with rich mozzarella cheese, fresh tomato sauce,and aromatic herbs."
                        data-img="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600">
                        <span>01</span>
                        Pizza
                    </div>

                    <div class="ch-specials-item" data-title="Aloo Toast"
                        data-desc="Crispy toasted bread stuffed with a flavorful potato filling and served fresh."
                        data-img="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=1000">
                        <span>02</span>
                        Aloo Toast
                    </div>

                    <div class="ch-specials-item" data-title="French Toast"
                        data-desc="Golden toasted bread with rich flavors, perfect for breakfast or an evening snack."
                        data-img="https://images.unsplash.com/photo-1484723091739-30a097e8f929?w=1000">
                        <span>03</span>
                        French Toast
                    </div>

                    <div class="ch-specials-item" data-title="Chai"
                        data-desc="Aromatic, freshly brewed chai with rich flavors and comforting warmth."
                        data-img="https://images.unsplash.com/photo-1515823064-d6e0c04616a7?w=800">
                        <span>04</span>
                        Chai
                    </div>

                    <div class="ch-specials-item" data-title="Wrap"
                        data-desc="Freshly filled wraps packed with flavor in every bite."
                        data-img="https://images.unsplash.com/photo-1626700051175-6818013e1d4f?w=600">
                        <span>05</span>
                        Wrap
                    </div>

                </div>

                <!-- Center Content -->
                <div class="ch-specials-content">

                    <span class="ch-special-tag">House Favorite</span>

                    <h3 id="specialTitle">Pizza</h3>

                    <p id="specialDesc">
                        Classic pizza topped with rich mozzarella cheese, fresh tomato sauce,and aromatic herbs.
                    </p>

                    <a href="#" class="ch-special-btn">
                        Perfect
                    </a>

                </div>

                <!-- Right Image -->
                <div class="ch-specials-image">
                    <img id="specialImage" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600" alt="">
                </div>

            </div>

        </div>
    </section>

    <!-- Under Construction Modal -->
    <div class="modal fade" id="underConstructionModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ch-popup">

                <button type="button" class="btn-close ch-popup-close" data-bs-dismiss="modal"></button>

                <div class="modal-body text-center">

                    <div class="ch-popup-icon">
                        <img src="{{ asset('images/logo/logo.png') }}">
                    </div>

                    <span class="ch-popup-badge">
                        🚧 Coming Soon
                    </span>

                    <h3>
                        We're Brewing Something
                        <span>Special</span>
                    </h3>

                    <p>
                        Churi House is currently enhancing your experience.
                        Some sections of our website are still under construction
                        and will be available very soon.
                    </p>

                    <div class="ch-popup-btns">

                      
                        <button class="btn ch-btn-primary" data-bs-dismiss="modal">
                            Continue
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        window.addEventListener('load', function () {
            const popup = new bootstrap.Modal(document.getElementById('underConstructionModal'));
            popup.show();
        });
    </script>
    <script>
        const specials = document.querySelectorAll('.ch-specials-item');

        specials.forEach(item => {

            item.addEventListener('click', function () {

                specials.forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                document.getElementById('specialTitle').textContent =
                    this.dataset.title;

                document.getElementById('specialDesc').textContent =
                    this.dataset.desc;

                document.getElementById('specialImage').src =
                    this.dataset.img;
            });

        });
    </script>
@endpush