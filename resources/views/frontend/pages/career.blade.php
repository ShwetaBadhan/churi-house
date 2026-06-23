@extends('frontend.layouts.master')
@section('title', 'Career')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Career</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>c
        </div>
    </div>
    <!-- Page Header End -->

    <section class="ch_job_section bg-section">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title section-title-center mb-4">
                <h3 class="wow fadeInUp">Join Our Team</h3>
                <h2 class="text-anime-style-3" data-cursor="-opaque">Be part of our growing family and build your career
                    with us.</h2>
            </div>

            <div class="container">

                <div class="row g-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="ch_job_card">
                            <div class="ch_job_icon">
                                <i class="fa-solid fa-utensils"></i>
                            </div>

                            <div class="ch_job_content">
                                <h5>Restaurant Manager</h5>
                                <p align="justify">Prepare continental dishes, maintain quality standards, and support menu
                                    development.</p>
                                <ul>
                                    <li><i class="fa-solid fa-location-dot"></i> Mohali</li>
                                    <li><i class="fa-solid fa-briefcase"></i> Full Time</li>
                                    <li><i class="fa-solid fa-user-tie"></i> 3+ Years Experience</li>
                                </ul>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="ch_job_card">
                            <div class="ch_job_icon">
                                <i class="fa-solid fa-mug-hot"></i>
                            </div>

                            <div class="ch_job_content">
                                <h5>Barista</h5>
                                <p align="justify">Prepare continental dishes, maintain quality standards, and support menu
                                    development.</p>

                                <ul>
                                    <li><i class="fa-solid fa-location-dot"></i> Chandigarh</li>
                                    <li><i class="fa-solid fa-briefcase"></i> Full Time</li>
                                    <li><i class="fa-solid fa-user-tie"></i> 1+ Year Experience</li>
                                </ul>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="ch_job_card">
                            <div class="ch_job_icon">
                                <i class="fa-solid fa-bowl-food"></i>
                            </div>

                            <div class="ch_job_content">
                                <h5>Chef</h5>
                                <p align="justify">Prepare continental dishes, maintain quality standards, and support menu
                                    development.</p>

                                <ul>
                                    <li><i class="fa-solid fa-location-dot"></i> Mohali</li>
                                    <li><i class="fa-solid fa-briefcase"></i> Full Time</li>
                                    <li><i class="fa-solid fa-user-tie"></i> 5+ Years Experience</li>
                                </ul>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <div class="page-reserve-table bg-section light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Career Opportunities</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Explore exciting opportunities and grow with a passionate team
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Reserve Table Form Start -->
                    <div class="reserve-table-form wow fadeInUp" data-wow-delay="0.2s">
                        <form id="careerForm" action="{{ route('career.store') }}" method="POST" >
                            @csrf

                            <div class="row">

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Full Name*</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Full Name"
                                        required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Email Address*</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com"
                                        required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Phone Number*</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number"
                                        pattern="[0-9]{10}" maxlength="10"
                                        title="Please enter a valid 10-digit phone number" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Position Applied For*</label>
                                    <select name="position" class="form-control form-select" required>
                                        <option value="">Select Position</option>
                                        <option value="Restaurant Manager">Restaurant Manager</option>
                                        <option value="Chef">Chef</option>
                                        <option value="Barista">Barista</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Years of Experience*</label>
                                    <input type="number" name="experience" class="form-control"
                                        placeholder="Enter Experience" min="0" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Current Location*</label>
                                    <input type="text" name="location" class="form-control"
                                        placeholder="Enter Current Location" required>
                                </div>


                                <div class="col-md-12">
                                    <button type="submit" id="submitBtn" class="btn-default">
                                        <span>Apply Now</span>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- Reserve Table Form End -->
                </div>

                <div class="col-lg-5">
                    <!-- Reserve Table Content Start -->
                    <div class="reserve-table-content wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <p align="justify">
                                We're always looking for passionate, talented, and dedicated individuals to join our team.
                                Explore exciting career opportunities and take the next step in your professional journey
                                with us.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Career Info Start -->
                        <div class="reserve-table-info">

                            <!-- Career Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Why Join Us?</h3>
                                <p align="justify">Work in a collaborative environment that values growth, innovation, and
                                    excellence in
                                    hospitality.</p>
                            </div>
                            <!-- Career Info Item End -->



                            <!-- Career Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Recruitment Contact</h3>
                                <p>Email: <a href="mailto:careers@churihouse.com">careers@churihouse.com</a></p>
                                <p>Phone: <a href="tel:+911234567890">+91 12345 67890</a></p>
                            </div>
                            <!-- Career Info Item End -->

                        </div>
                        <!-- Career Info End -->

                    </div>
                    <!-- Reserve Table Content End -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        jQuery(document).ready(function ($) {
            $('#careerForm').on('submit', function (e) {
                e.preventDefault();

                $('.error-message').text('');

                grecaptcha.ready(function () {

                    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'contact' }).then(function (token) {

                        let form = $('#careerForm');

                        let formData = form.serialize() + "&g-recaptcha-response=" + token;

                        $('#submitBtn').prop('disabled', true);

                        $.ajax({
                            url: form.attr('action'),
                            method: 'POST',
                            data: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
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