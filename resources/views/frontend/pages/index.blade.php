@extends('frontend.layouts.master')
@section('title', 'Welcome to Churi House')
@section('content')

    @include('frontend.components.home.hero')
    @include('frontend.components.home.about')

    <section class="ch-counter-section bg-section">
        <div class="ch-counter-overlay"></div>

        <div class="container">
            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="ch-counter-card">
                        <div class="ch-counter-icon">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <h3><span class="ch-counter" data-count="25">0</span>+</h3>
                        <p>Years of Craftsmanship</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="ch-counter-card">
                        <div class="ch-counter-icon">
                            <i class="fa-solid fa-ring"></i>
                        </div>
                        <h3><span class="ch-counter" data-count="5000">0</span>+</h3>
                        <p>Exclusive Designs</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="ch-counter-card">
                        <div class="ch-counter-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <h3><span class="ch-counter" data-count="10000">0</span>+</h3>
                        <p>Happy Customers</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="ch-counter-card">
                        <div class="ch-counter-icon">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <h3><span class="ch-counter" data-count="120">0</span>+</h3>
                        <p>Luxury Collections</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('frontend.components.home.best-seller')

   

    @include('frontend.components.home.what-we-do')
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
                        data-img="{{ asset('images/upload/special/Pizza.jpg') }}">
                        <span>01</span>
                        Pizza
                    </div>

                    <div class="ch-specials-item" data-title="Aloo Toast"
                        data-desc="Crispy toasted bread stuffed with a flavorful potato filling and served fresh."
                        data-img="{{ asset('images/upload/special/Aloo-Toast.jpg') }}">
                        <span>02</span>
                        Aloo Toast
                    </div>

                    <div class="ch-specials-item" data-title="French Toast"
                        data-desc="Golden toasted bread with rich flavors, perfect for breakfast or an evening snack."
                        data-img="{{ asset('images/upload/special/French-Toast.jpg') }}">
                        <span>03</span>
                        French Toast
                    </div>

                    <div class="ch-specials-item" data-title="Chai"
                        data-desc="Aromatic, freshly brewed chai with rich flavors and comforting warmth."
                        data-img="{{ asset('images/upload/special/Chai.jpg') }}">
                        <span>04</span>
                        Chai
                    </div>

                    <div class="ch-specials-item" data-title="Wrap"
                        data-desc="Freshly filled wraps packed with flavor in every bite."
                        data-img="{{ asset('images/upload/special/Wrap.jpg') }}">
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
                    <img id="specialImage" src="{{ asset('images/upload/special/Pizza.jpg') }}" alt="">
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
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?86687';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#2ACA45;",
                "ctaText": "",
                "borderRadius": "25",
                "marginLeft": "20",
                "marginBottom": "30",
                "marginRight": "50",
                "position": "left"
            },
            "brandSetting": {
                "brandName": "Churi House",
                "brandSubTitle": "Typically replies within a day",
                "brandImg": "../images/logo/logo.png",
                "welcomeText": "Hi there!\nHow can I help you?",
                "messageText": "Hello, I have a question about ",
                "backgroundColor": "#2ACA45;",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "+91 94166 88968"
            }
        };
        s.onload = function () {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
@endpush