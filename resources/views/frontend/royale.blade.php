{{--  --}}

@extends('layouts.frontend')

@section('title', 'Royale Series | Thankyou Mattresses & More')


@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>ROYALE [M-002]</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>ROYALE [M-002]</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Start Products Area -->
    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>ROYALE [M-002] MODEL</h2>

                <p>
                    Our <b>Royale Model</b> is manufactured to satisfy the demand of all types of customers.
                </p>
                <p>
                    The cloth used to cover the mattresses is different and of higher quality than Relaxo Model. Considering
                    the warranty is more in this Model, The density of the inner block is also kept higher.
                </p>
                <p>
                    We offer three variants in this model also so as to satisfy the individual liking, body need &
                    requirements of the customer.
                </p>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="{{ asset('product/royale-1.jpg') }}" class="main-image" alt="image">
                                <img src="{{ asset('product/royale-1.jpg') }}" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">ROYALE - ORTHO (M-001A)</a></h3>
                            <div class="price">
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="{{ asset('product/royale-1.jpg') }}" class="main-image" alt="image">
                                <img src="{{ asset('product/royale-1.jpg') }}" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">ROYALE - SOFTY HARDY (M-001B)</a></h3>
                            <div class="price">
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="{{ asset('product/royale-1.jpg') }}" class="main-image" alt="image">
                                <img src="{{ asset('product/royale-1.jpg') }}" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">ROYALE -SOFTY (M-001C)</a></h3>
                            <div class="price">
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Area -->
@endsection
