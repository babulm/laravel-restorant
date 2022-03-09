@extends('frontend.layouts.main')

@section('title')
   {{'About Us'}}
@endsection



@section('content')

    @include('frontend.include.breadcumb')
    @include('frontend.pages.HomeSection.about')
    @include('frontend.pages.HomeSection.team')


@endsection