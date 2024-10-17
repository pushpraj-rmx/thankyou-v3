@extends('layouts.frontend')

@section('title', 'Thankyou Mattresses & More')

@section('content')
    {{-- <h2>Welcome to the Public Homepage</h2>
    <p>This is where dynamic content like logos, sliders, etc., will go.</p> --}}

    @include('frontend.sections.slider')
    @include('frontend.sections.about-section')
@endsection
