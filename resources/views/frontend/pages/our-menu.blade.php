@extends('frontend.layouts.master')
@section('title', 'Our Menu | Chai, Churi, Pizza & Shakes – Churi House')
@section('meta_description', 'Explore Churi House\'s full menu — adrak chai, desi ghee churi, wood-fired pizzas, cold coffee, shakes & mojitos. Order your favourites today!')
@section('meta_keywords', 'churi house menu, chai menu mohali, churi menu, pizza menu mohali, cold coffee shakes, best chai menu in india	')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our Menu</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Menu</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

  @include('frontend.components.our-menu.menu-section')

@endsection
