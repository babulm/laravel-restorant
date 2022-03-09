@extends('frontend.layouts.main')

@section('title')
   {{'Our Foods'}}
@endsection



@section('content')

    @include('frontend.include.breadcumb')
    @include('frontend.pages.HomeSection.foodmenu')


@endsection