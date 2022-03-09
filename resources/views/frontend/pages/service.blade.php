@extends('frontend.layouts.main')

@section('title')
   {{'Services'}}
@endsection



@section('content')

    @include('frontend.include.breadcumb')
    @include('frontend.pages.ServiceSection.service')


@endsection