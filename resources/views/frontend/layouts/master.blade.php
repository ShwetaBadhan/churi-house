<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>@yield('title', 'Churi House')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/logo.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&amp;family=Manrope:wght@200..800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    @include('frontend.components.navbar')
    @yield('content')

    @include('frontend.components.footer')


    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const defaultState = document.querySelector('.state-item.active');

            if (defaultState) {
                defaultState.click();
            }

        });
        const stateData = {

            Punjab: {
                viewAll: "https://maps.google.com/?q=Punjab",
                locations: [
                    {
                        name: "Chandigarh University",
                        link: "https://maps.google.com/?q=Chandigarh+University"
                    },
                    {
                        name: "Sector 35C",
                        link: "https://maps.google.com/?q=Sector+35C+Chandigarh"
                    },
                    {
                        name: "Mohali Phase 3B2",
                        link: "https://maps.google.com/?q=Mohali+Phase+3B2"
                    }
                ]
            },

            Haryana: {
                viewAll: "https://maps.google.com/?q=Haryana",
                locations: [
                    {
                        name: "Gurugram",
                        link: "https://maps.google.com/?q=Gurugram"
                    },
                    {
                        name: "Faridabad",
                        link: "https://maps.google.com/?q=Faridabad"
                    }
                ]
            },

            Himachal: {
                viewAll: "https://maps.google.com/?q=Himachal+Pradesh",
                locations: [
                    {
                        name: "Shimla",
                        link: "https://maps.google.com/?q=Shimla"
                    }
                ]
            }

        };

        const states = document.querySelectorAll('.state-item');

        states.forEach(item => {

            item.addEventListener('click', function () {

                // Sidebar Active State
                states.forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                const state = this.dataset.state;

                // Popup Heading
                document.getElementById('stateName').innerText = state;

                // Location Links
                let html = '';

                stateData[state].locations.forEach(location => {

                    html += `
                <li>
                    <a href="${location.link}" 
                       target="_blank"
                       rel="noopener noreferrer">
                        <i class="fa-solid fa-location-dot"></i>
                        ${location.name}
                    </a>
                </li>
            `;
                });

                document.getElementById('locationList').innerHTML = html;

                // View All Button
                const viewBtn = document.getElementById('allLocationsBtn');

                if (viewBtn) {
                    viewBtn.href = stateData[state].viewAll;
                }

                // Remove Existing Highlight
                document.querySelectorAll('.map-state')
                    .forEach(el => el.classList.remove('active-state'));

                // Highlight Selected State
                const mapState = document.querySelector(
                    '.' + state.toLowerCase().replace(/\s+/g, '-')
                );

                if (mapState) {
                    mapState.classList.add('active-state');
                }

            });

        });

    </script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        jQuery(document).ready(function ($) {
            $('#newsletterForm').on('submit', function (e) {
                e.preventDefault();

                $('.error-message').text('');

                grecaptcha.ready(function () {

                    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'contact' }).then(function (token) {

                        let form = $('#newsletterForm');

                        let formData = form.serialize() + "&g-recaptcha-response=" + token;

                        $('#submitBtn').prop('disabled', true);

                        $.ajax({
                            url: form.attr('action'),
                            method: 'POST',
                            data: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            },


                            beforeSend: function () {
                                $('#submitBtn').prop('disabled', true);

                                Swal.fire({
                                    title: 'Please Wait...',
                                    text: 'Submitting your request...',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    showConfirmButton: false,
                                    didOpen: () => {
                                        Swal.showLoading();
                                    }
                                });
                            },

                            success: function (response) {

                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.message,
                                    confirmButtonColor: '#28a745'
                                });

                                form[0].reset();
                            },

                            error: function (xhr) {

                                if (xhr.status === 422) {

                                    let errors = xhr.responseJSON.errors;

                                    $.each(errors, function (key, value) {
                                        $('#' + key + '-error').text(value[0]);
                                    });

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Validation Error',
                                        text: 'Please check form fields.'
                                    });
                                } else {

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: xhr.responseJSON?.message || 'Something went wrong. Please try again.',
                                        confirmButtonColor: '#dc3545'
                                    });
                                }
                            },

                            complete: function () {
                                $('#submitBtn').prop('disabled', false);
                            }


                        });

                    });

                });

            });
        });
    </script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi,fr,de,',
                autoDisplay: false
            }, 'google_translate_element');
        }

        const counters = document.querySelectorAll(".ch-counter");

        const observer = new IntersectionObserver(entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    const counter = entry.target;
                    const target = +counter.dataset.count;

                    let count = 0;

                    const speed = target / 120;

                    const update = () => {

                        count += speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count).toLocaleString();
                            requestAnimationFrame(update);
                        } else {
                            counter.innerText = target.toLocaleString();
                        }

                    };

                    update();

                    observer.unobserve(counter);

                }

            });

        }, { threshold: .5 });

        counters.forEach(counter => observer.observe(counter));
        document.addEventListener("DOMContentLoaded", function () {

            const cards = document.querySelectorAll(".ch-history-card");

            const observer = new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {
                        entry.target.style.opacity = "1";
                        entry.target.style.transform = "translateY(0)";
                    }

                });

            }, { threshold: .2 });

            cards.forEach(card => {

                card.style.opacity = "0";
                card.style.transform = "translateY(60px)";
                card.style.transition = "all .8s ease";

                observer.observe(card);

            });

        });
    </script>

    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @stack('scripts')

</body>

</html>