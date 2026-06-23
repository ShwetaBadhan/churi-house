@extends('frontend.layouts.master')
@section('title', 'Reserve a Table')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Reserve a Table</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reserve a Table</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>c
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Reserve Table Section Start -->
    <div class="page-reserve-table bg-section light-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Reserve A Table</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Dine with us - simple, seamless table
                            reservations</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Reserve Table Form Start -->
                    <div class="reserve-table-form wow fadeInUp" data-wow-delay="0.2s">
                        <form id="reservationForm" action="{{ route('reserve-a-table.store') }}" method="POST"
                            data-toggle="validator">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Your Name*</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Ex. John Dev"
                                        required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">email address*</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="example@gmail.com" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">phone number*</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"
                                        pattern="[0-9]{10}" maxlength="10"
                                        title="Please enter a valid 10-digit phone number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Number of Guests*</label>
                                    <select name="guests" class="form-control form-select" id="number" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5_more">5 & More</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Date of Reservation*</label>
                                    <input type="text" name="date" class="form-control" id="reservationDate"
                                        placeholder="Select Date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Time of Reservation*</label>
                                    <input type="text" name="time" class="form-control" id="reservationTime"
                                        placeholder="Select Time" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <label class="form-label">Special Requests</label>
                                    <textarea name="requirements" class="form-control" id="message" rows="4"
                                        placeholder="Additional Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" id="submitBtn" class="btn-default"><span>Book A
                                            Table</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
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
                            <p>Have a question, need a reservation, or want to plan a private event? Reach out - we're here
                                to help!</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Reserve Table Info Start -->
                        <div class="reserve-table-info">
                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Our Address</h3>
                                <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Contact Information</h3>
                                <p>Phone: <a href="tel:123456789">+ (123) 456-789</a></p>
                                <p>Email: <a href="mailto:info@domainname.com">info@domainname.com</a></p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item reserve-table-time">
                                <h3>Hours Of Operation</h3>
                                <p>Hours Of Operation <span>11:00 AM - 10:00 PM</span></p>
                                <p>Saturday - Sunday <span>09:00 AM - 11:00 PM</span></p>
                            </div>
                            <!-- Reserve Table Info Item End -->

                            <!-- Reserve Table Info Item Start -->
                            <div class="reserve-table-info-item">
                                <h3>Stay Connected</h3>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Reserve Table Info Item End -->
                        </div>
                        <!-- Reserve Table Info End -->
                    </div>
                    <!-- Reserve Table Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Reserve Table Section End -->

@endsection
@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        jQuery(document).ready(function ($) {
            $('#reservationForm').on('submit', function (e) {
                e.preventDefault();

                $('.error-message').text('');

                grecaptcha.ready(function () {

                    grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: 'contact' }).then(function (token) {

                        let form = $('#reservationForm');

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
        flatpickr("#reservationDate", {
            dateFormat: "Y-m-d",
            minDate: "today",
            disableMobile: true
        });

        flatpickr("#reservationTime", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: false,
            minuteIncrement: 15,
            disableMobile: true
        });
    </script>
@endpush