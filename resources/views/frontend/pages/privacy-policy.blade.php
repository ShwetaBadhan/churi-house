@extends('frontend.layouts.master')
@section('title', 'Privacy Policy | Churi House')
@section('meta_description', 'Read Churi House\'s privacy policy to know how we collect, use & protect your personal information when you visit our website.')
@section('meta_keywords', 'churi house privacy policy, churi house mohali, data protection churi house india')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Privacy Policy</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>c
        </div>
    </div>
    <!-- Page Header End -->
    @include('frontend.components.privacy-policy.privacy-policy-component')

@endsection