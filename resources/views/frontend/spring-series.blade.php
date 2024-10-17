{{--  --}}

@extends('layouts.frontend')

@section('title', 'SPRING SERIES : (M-006) | Thankyou Mattresses & More')


@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>SPRING SERIES : (M-006)</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>SPRING SERIES : (M-006)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Start Products Area -->
    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>SPRING SERIES : (M-006) </h2>

                <p>This collection of spring based mattresses are in tune with latest International standards. These
                    mattresses are crafted and architectured to provide the real sleeping luxury and unmatched comfort
                    specifically for those who are more into travelling and are used to sleeping in hotels. </p>
                <p>Its numerous high tensile steel springs give proper support to body contours. It also enhances sleeping
                    experience with proper air circulation through air ventilators. </p>
                <p>These mattresses have a little Bouncing or Jumping effect, and are commonly used in western countries,
                    hence best for those who want to get feel of International Sleeping Standards. </p>
                <p>Our Spring Series Mattresses are made in 3 variants : </p>
                <ul>

                    <li style="list-style-type: lower-roman">
                        SPRINGEE BONNEL : (6”/8”/10” Thickness) This Model comprises of High Tensile Bonnell Springs, High
                        Density Cotton Felt Sheet and High Density Foam.
                    </li>
                    <li style="list-style-type: lower-roman">
                        SPRINGEE POCKET : (6”/8”/10” Thickness) This Model comprises of High Tensile Pocket Springs, High
                        Density Cotton Felt Sheet and High Density Foam.
                    </li>
                    <li style="list-style-type: lower-roman">
                        SPRINGEE MEMORY : (7”/8”/10” Thickness) This Model comprises of High Tensile Pocket Springs, High
                        Density Cotton Felt Sheet, High Density Foam and Memory Foam Sheet on top.
                    </li>
                </ul>
                <p>
                    All the above models are covered in Knitted / Towel Jacquard Quilted Cloth.
                </p>

            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="/relaxo/ortho">
                                <img src="{{ asset('product/relaxo-1.jpg') }}" class="main-image" alt="image">
                                <img src="{{ asset('product/relaxo-1.jpg') }}" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="/relaxo/ortho">RELAXO -ORTHO (M-001A)</a></h3>
                            <div class="price">
                                {{-- <span class="old-price">₹4,990</span>
                                <span class="new-price">₹3,333/- per piece</span> --}}
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            {{-- <a href="cart.html" class="add-to-cart">Add to Cart</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="/relaxo/softy-hardy">
                                <img src="{{ asset('product/relaxo-1.jpg') }}" class="main-image" alt="image">
                                <img src="{{ asset('product/relaxo-1.jpg') }}" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="/relaxo/softy-hardy">RELAXO -SOFTY HARDY (M-001B)</a></h3>
                            <div class="price">
                                {{-- <span class="old-price">₹4,990</span>
                              <span class="new-price">₹3,333/- per piece</span> --}}
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            {{-- <a href="cart.html" class="add-to-cart">Add to Cart</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="/relaxo/softy">
                                <img src="{{ asset('product/relaxo-1.jpg') }}" class="main-image" alt="image">
                                <img src="{{ asset('product/relaxo-1.jpg') }}" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="relaxo/softy">RELAXO -SOFTY (M-001C)</a></h3>
                            <div class="price">
                                {{-- <span class="old-price">₹4,990</span>
                            <span class="new-price">₹3,333/- per piece</span> --}}
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            {{-- <a href="cart.html" class="add-to-cart">Add to Cart</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Area -->
@endsection
