@extends('layouts.frontend')

@section('title', 'About Us | Thankyou Mattresses & More')

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>About Us</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    @include('frontend.sections.about-page')

    <!-- Start Testimonials Area -->
    <section class="testimonials-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Testimonials</span>
                <h2>What Clients Say About Us</h2>
            </div>
    
            <div class="testimonials-slides owl-carousel owl-theme">
                <div class="single-testimonials-item">
                    <p>ThankYou Mattresses & More provided excellent service and the mattress quality is top-notch. I haven’t slept this well in years!</p>
    
                    <div class="info">
                        <img src="{{asset('img/male.png')}}" class="shadow rounded-circle" alt="image">
                        <h3>Amanpreet Singh</h3>
                        <span>Business Owner</span>
                    </div>
                </div>
    
                <div class="single-testimonials-item">
                    <p>I was impressed with their professionalism and timely delivery. The mattress fits perfectly and offers great comfort.</p>
    
                    <div class="info">
                        <img src="{{asset('img/female.png')}}" class="shadow rounded-circle" alt="image">
                        <h3>Simran Kaur</h3>
                        <span>Teacher</span>
                    </div>
                </div>
    
                <div class="single-testimonials-item">
                    <p>Very happy with my purchase. The staff was helpful in guiding me to choose the right mattress for my needs.</p>
    
                    <div class="info">
                        <img src="{{asset('img/male.png')}}" class="shadow rounded-circle" alt="image">
                        <h3>Rohit Sharma</h3>
                        <span>Engineer</span>
                    </div>
                </div>
    
                <div class="single-testimonials-item">
                    <p>I bought a custom-sized mattress for my home. The quality is fantastic and the price was very reasonable.</p>
    
                    <div class="info">
                        <img src="{{asset('img/female.png')}}" class="shadow rounded-circle" alt="image">
                        <h3>Anjali Verma</h3>
                        <span>Interior Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- End Testimonials Area -->
@endsection