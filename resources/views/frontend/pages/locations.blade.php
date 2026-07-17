@extends('frontend.layouts.master')
@section('title', 'Franchise Opportunities | Own a Churi House Outlet')
@section('meta_description', 'Bring Churi House to your city! Explore franchise opportunities, business support & benefits of joining our growing brand family.')
@section('meta_keywords', 'churi house franchise in mohali, cafe franchise opportunities in india, food franchise punjab, own a cafe franchise')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Franchise </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Take Franchise</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Page Contact Us Start -->
    <div class="page-contact-us bg-section light-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <div class="contact-us-img">
                            <figure class="image-anime">
                                <img src="{{ asset('images/upload/franchise.jpg') }}" alt="">
                            </figure>
                        </div>


                    </div>
                    <!-- Contact Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Grow with a brand people love. </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Interested in bringing the Seabud experience to your city? Connect with us to explore
                                exciting franchise opportunities, business support, and the benefits of joining our growing
                                brand family.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-us-form">
                            <form id="franchiseForm" action="{{ route('locations.store') }}" method="POST"
                                data-toggle="validator" class="contact-form wow fadeInUp" data-wow-delay="0.4s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="fname"
                                            placeholder="First name*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>



                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email*"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone*"
                                            pattern="[0-9]{10}" maxlength="10"
                                            title="Please enter a valid 10-digit phone number" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="location" class="form-control" id="subject"
                                            placeholder="Area Where You Want Outlet ?*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group  mb-4">
                                        <input type="text" name="address" class="form-control" id="subject"
                                            placeholder="Address*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <select class="form-control" name="type" required>
                                            <option value="" selected disabled>Select Preferred Type*</option>
                                            <option value="Take Always">Take Always</option>
                                            <option value="Dining">Dining</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <textarea name="message" class="form-control" id="message" rows="3"
                                            placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>


                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>Submit</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>
            </div>
        </div>
    </div>

  




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