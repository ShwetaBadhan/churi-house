@extends('frontend.layouts.master')
@section('title', 'Home Page | Churi House')
@section('content')

    @include('frontend.components.home.hero')
    @include('frontend.components.home.about')
    @include('frontend.components.home.history')
    @include('frontend.components.home.what-we-do')
    @include('frontend.components.home.ticker')
    @include('frontend.components.home.events')
    
    @include('frontend.components.home.testimonials')
    @include('frontend.components.home.table')

    @include('frontend.components.home.gallery')

@endsection