{{--  --}}

@extends('layouts.frontend')

@section('title', 'DEBONAIR (SOFTY-HARDY) (M-004) | Thankyou Mattresses & More')


@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>DEBONAIR (SOFTY-HARDY) (M-004)</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>DEBONAIR (SOFTY-HARDY) (M-004)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Start Products Area -->
    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>DEBONAIR (SOFTY-HARDY) (M-004) </h2>

                <p>Our Debonair Mattress as the name suggests is a model crafted as soft on one side and hard on the other side.</p>
                <p>Top side of the mattress is fixed with high density Softy Foam & the other side has high density Rebonded Foam.</p>
                <p>This mattress model has a twin bonefit that two people sleeping on it can sleep on the side of their choice i.e. soft back or hard back.</p>
                <p>This preference will be possible only if two mattresses are made of the total bed size.</p>
                <p>Our this model is available in one variant with different thicknesses.</p>
                <p>Covered with Knitted or Towel Jacquard Quilted Cloth.</p>
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
                                {{-- <ul>
                                  <li>
                                      <div class="wishlist-btn">
                                          <a href="#" data-bs-toggle="modal"
                                              data-bs-target="#shoppingWishlistModal">
                                              <i class='bx bx-heart'></i>
                                              <span class="tooltip-label">Add to Wishlist</span>
                                          </a>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="compare-btn">
                                          <a href="compare.html">
                                              <i class='bx bx-refresh'></i>
                                              <span class="tooltip-label">Compare</span>
                                          </a>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="quick-view-btn">
                                          <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                              <i class='bx bx-search-alt'></i>
                                              <span class="tooltip-label">Quick View</span>
                                          </a>
                                      </div>
                                  </li>
                              </ul> --}}
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
                                {{-- <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul> --}}
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
