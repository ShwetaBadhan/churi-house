@extends('frontend.layouts.master')
@section('title', 'Welcome to Churi House')
@section('content')

    @include('frontend.components.home.hero')
    @include('frontend.components.home.about')
    @include('frontend.components.home.best-seller')
    
    @include('frontend.components.home.what-we-do')
    @include('frontend.components.home.ticker')
    
    @include('frontend.components.home.cta')
    @include('frontend.components.home.events')

    @include('frontend.components.home.testimonials')

    @include('frontend.components.home.gallery')

@endsection