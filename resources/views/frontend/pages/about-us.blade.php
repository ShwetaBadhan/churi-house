@extends('frontend.layouts.master')
@section('title', 'About Us | Churi House – Our Story & Mission')
@section('meta_description', 'Churi House brings authentic Indian chai, desi ghee churi, pizzas & wraps to Mohali, Punjab. Visit us for a taste of tradition & comfort food.')
@section('meta_keywords', 'churi house, desi ghee churi, chai cafe punjab, indian street food mohali, churi house mohali, best chai cafe in india')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>c
        </div>
    </div>
    <!-- Page Header End -->

    @include('frontend.components.about.about-us')
    @include('frontend.components.home.our-history')
    @include('frontend.components.about.mission-vision')


   



@endsection