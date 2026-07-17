@extends('frontend.layouts.master')
@section('title', 'Contact Us | Churi House Mohali, Punjab')
@section('meta_description', 'Get in touch with Churi House head office in Mohali, Punjab. Call, email or visit us for queries, feedback & franchise info.')
@section('meta_keywords', 'contact churi house mohali, churi house head office punjab, churi house india contact, churi house phone number')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
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
    <div class="page-contact-us bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <div class="contact-us-img">
                            <figure class="image-anime">
                                <img src="{{ asset('images/upload/contact-us.jpg') }}" alt="">
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
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in quick touch with us </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Have a question, feedback, or a special request?
                                Reach out now — we're here to help you make your Seabud experience unforgettable.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-us-form">
                            <form id="leadForm" action="{{ route('contact-us.store') }}" method="POST"
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
                                        <input type="text" name="subject" class="form-control" id="subject"
                                            placeholder="Subject*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="3"
                                            placeholder="Write Message..."></textarea>
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
    <!-- Page Contact Us End -->

    <!-- Contact Info Box Start -->
    <div class="contact-info-box bg-section light-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-phone.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Contact us</h3>
                                <p><a href="tel:+919800003447">+91 9800003447</a></p>

                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-mail.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Email us</h3>
                                <p><a href="mailto:churihouse3b2@gmail.com">churihouse3b2@gmail.com</a></p>

                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-location.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Address</h3>
                                <p>Head Office : SCO No.110 Sector -96 , S.A.S. Nagar (Mohali), Punjab</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info Box End -->

    <!-- Google Map Section Start -->
    <div class="google-map bg-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d875677.378852302!2d75.33386704905936!3d30.98123110903317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x391964aa569e7355%3A0x8fbd263103a38861!2sPunjab!3m2!1d31.1471305!2d75.34121789999999!4m5!1s0x390fefedea944243%3A0x9500c935fc50694a!2sChuri%20House%2C%20SCO%20No.04%2C%20Monga%20City%20Centre%2C%20Kharar%20-%20Landran%20Rd%2C%20Sector%20115%2C%20Sahibzada%20Ajit%20Singh%20Nagar%2C%20Punjab%20140307!3m2!1d30.7135169!2d76.65492239999999!5e0!3m2!1sen!2sin!4v1780039968165!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->

@endsection
@push('scripts')

    <script>

        jQuery(document).ready(function ($) {
            $('#leadForm').on('submit', function (e) {
                e.preventDefault();

                $('.error-message').text('');

                grecaptcha.ready(function () {

                    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'contact' }).then(function (token) {

                        let form = $('#leadForm');

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