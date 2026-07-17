@extends('frontend.layouts.master')
@section('title', 'Churi House – Authentic Chai & Churi Café in Mohali ')
@section('meta_description', 'Discover Churi House\'s journey since 2023 — our mission to serve authentic Indian flavours with premium ingredients & warm hospitality in Punjab.')
@section('meta_keywords', 'about churi house, churi house story, best indian cafe in mohali, indian cafe brand in india	')
@section('content')

    @include('frontend.components.home.hero')
    @include('frontend.components.home.about')
    @include('frontend.components.home.signature-recipe')
    @include('frontend.components.home.best-seller')
    @include('frontend.components.home.what-we-do')
    @include('frontend.components.home.our-history')
    @include('frontend.components.home.testimonials')
    @include('frontend.components.home.our-specials')




    <!-- Under Construction Modal -->
    <!-- <div class="modal fade" id="underConstructionModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static"
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
                                </div> -->
@endsection
@push('scripts')
    <!-- <script>
                                    window.addEventListener('load', function () {
                                        const popup = new bootstrap.Modal(document.getElementById('underConstructionModal'));
                                        popup.show();
                                    });
                                </script> -->
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