@extends('frontend.layouts.master')
@section('title', 'Careers at Churi House | Join Our Growing Team')
@section('meta_description', 'Explore exciting career opportunities at Churi House. We\'re hiring Restaurant Managers, Chefs & Baristas across Punjab. Apply now!')
@section('meta_keywords', 'churi house careers, jobs at churi house mohali, restaurant jobs punjab, cafe jobs in india	')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Careers</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Careers</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>c
        </div>
    </div>
    <!-- Page Header End -->

    @include('frontend.components.career.career-cards')
    @include('frontend.components.career.form')

@endsection
@push('scripts')

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