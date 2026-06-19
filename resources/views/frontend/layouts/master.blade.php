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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
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
    <script>
window.addEventListener('DOMContentLoaded', () => {

    const defaultState = document.querySelector('.state-item.active');

    if(defaultState){
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
    
</body>

</html>