{{--  --}}

@extends('layouts.frontend')

@section('title', 'Relaxo Series | Thank    you Mattresses & More')


@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>RELAXO [M-001]</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>RELAXO [M-001]</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Start Products Area -->
    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>RELAXO [M-001] MODEL</h2>

                <p>
                    Our Relaxo Model are entry level mattresses generally for those customers who change from
                    traditional cotton mattresses to mattresses in vogue today.

                    These mattresses are manufactured keeping in mind economy & budget but without compromising on any
                    Quality, Durability or Comfort.

                    We offer three variants in this model so as to satisfy the individual liking, body need & requirements
                    of the customer.
                </p>

                <ul>
                    <li style="list-style-type: lower-roman">ORTHO-BONDO : Pure HD Rebonded Foam</li>
                    <li style="list-style-type: lower-roman">SOFTY-BONDO : Layer of Softy Foam + HD Rebonded Foam</li>
                    <li style="list-style-type: lower-roman">SOFTY PUFF : Layer of softy foam + HD Polyurethane Foam</li>
                </ul>
                <p>
                    Covered with butter sarten cloth.
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

                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="assets/img/products/img8.jpg" class="main-image" alt="image">
                                <img src="assets/img/products/img-hover8.jpg" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
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
                                </ul>
                            </div>

                            <div class="sale-tag">Sale!</div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">Sunnyme Women's Ponchos</a></h3>
                            <div class="price">
                                <span class="old-price">$210</span>
                                <span class="new-price">$200</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="cart.html" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="assets/img/products/img9.jpg" class="main-image" alt="image">
                                <img src="assets/img/products/img-hover9.jpg" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
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
                                </ul>
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">Open Front Knit Sweaters</a></h3>
                            <div class="price">
                                <span class="old-price">$210</span>
                                <span class="new-price">$200</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="cart.html" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="assets/img/products/img10.jpg" class="main-image" alt="image">
                                <img src="assets/img/products/img-hover10.jpg" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
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
                                </ul>
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">Block Striped Draped</a></h3>
                            <div class="price">
                                <span class="new-price">$150</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="cart.html" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="assets/img/products/img11.jpg" class="main-image" alt="image">
                                <img src="assets/img/products/img-hover11.jpg" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
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
                                </ul>
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">Fleece Hooded Sweatshirt</a></h3>
                            <div class="price">
                                <span class="new-price">$240</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="cart.html" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="products-type-1.html">
                                <img src="assets/img/products/img12.jpg" class="main-image" alt="image">
                                <img src="assets/img/products/img-hover12.jpg" class="hover-image" alt="image">
                            </a>

                            <div class="products-button">
                                <ul>
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
                                </ul>
                            </div>

                            <div class="new-tag">New!</div>
                        </div>

                        <div class="products-content">
                            <h3><a href="products-type-1.html">Women's Modern-Skinny</a></h3>
                            <div class="price">
                                <span class="old-price">$150</span>
                                <span class="new-price">$100</span>
                            </div>
                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="cart.html" class="add-to-cart">Add to Cart</a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <!-- End Products Area -->
@endsection
