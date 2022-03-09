@extends('frontend.layouts.main')

@section('title')
   {{'Home Page'}}
@endsection



@section('content')

    @include('frontend.pages.HomeSection.hero')
    @include('frontend.pages.HomeSection.service')
    @include('frontend.pages.HomeSection.about')
    @include('frontend.pages.HomeSection.foodmenu')
    @include('frontend.pages.HomeSection.reservation')
    @include('frontend.pages.HomeSection.team')
    @include('frontend.pages.HomeSection.testimonial')


@endsection