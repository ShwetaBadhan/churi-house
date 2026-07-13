@extends('frontend.layouts.master')
@section('title', 'All Locations | Churi House Outlets Across India')
@section('meta_description', 'Browse all Churi House locations across India. Find the outlet nearest to you and enjoy authentic chai, churi, pizza & more.')
@section('meta_keywords', 'churi house all locations, churi house branches in mohali, churi house outlets across india')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Locations </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Locations</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
   

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




    <!-- form -->

@endsection
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        jQuery(document).ready(function ($) {
            $('#franchiseForm').on('submit', function (e) {
                e.preventDefault();

                $('.error-message').text('');

                grecaptcha.ready(function () {

                    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'contact' }).then(function (token) {

                        let form = $('#franchiseForm');

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
@endpush