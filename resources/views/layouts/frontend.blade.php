<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flat-icons@1.0.0/creative.min.css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>

<body>
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="xton-responsive-nav">
            <div class="container">
                <div class="xton-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('storage/' . $logo->image_path) }}" class="main-logo" alt="logo">
                            <img src="{{ asset('storage/' . $logo->image_path) }}" class="white-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="xton-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('storage/' . $logo->image_path) }}" class="main-logo" alt="logo">
                        <img src="{{ asset('storage/' . $logo->image_path) }}" class="white-logo" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="/about" class="nav-link">About Us
                                </a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Mattress Collections<i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="/relaxo" class="nav-link">Relaxo Series
                                            [M-001]</a>
                                    </li>
                                    <li class="nav-item"><a href="/royale" class="nav-link">Royale Series
                                            [M-002]</a>
                                    </li>

                                    <li class="nav-item"><a href="/adonis-ortho-bondo" class="nav-link">Adonis-Ortho
                                            Bondo [M-003]</a>
                                    </li>

                                    <li class="nav-item"><a href="/debonair-softy-hardy" class="nav-link">Debonair-Softy
                                            Hardy
                                            [M-004]</a>
                                    </li>
                                    <li class="nav-item"><a href="/memory-foam-series" class="nav-link">Memory Foam
                                            Series (M-005)</a>
                                    </li>

                                    <li class="nav-item"><a href="/spring-series" class="nav-link">Spring Series
                                            [M-006]</a>
                                    </li>

                                    <li class="nav-item"><a href="/coir-series" class="nav-link">Coir
                                            Series [M-007]</a>
                                    </li>
                                    <li class="nav-item"><a href="/latexo-series" class="nav-link">Latexo Series
                                            [M-008]</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="/gallery" class="nav-link">Gallery
                                </a>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="search-btn bx bx-search-alt"></i>
                                </div>
                            </div>

                            <div class="option-item">
                                <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                    <span class="top-bar"></span>
                                    <span class="middle-bar"></span>
                                    <span class="bottom-bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Sticky Navbar Area -->
    <div class="navbar-area header-sticky">
        <div class="xton-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('storage/' . $logo->image_path) }}" class="main-logo" alt="logo">
                        <img src="{{ asset('storage/' . $logo->image_path) }}" class="white-logo" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="/about" class="nav-link">About Us
                                </a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Mattress Collections<i
                                        class='bx bx-chevron-down'></i></a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="/relaxo" class="nav-link">Relaxo Series
                                            [M-001]</a>
                                    </li>
                                    <li class="nav-item"><a href="/royale" class="nav-link">Royale Series
                                            [M-002]</a>
                                    </li>

                                    <li class="nav-item"><a href="/adonis-ortho-bondo" class="nav-link">Adonis-Ortho
                                            Bondo [M-003]</a>
                                    </li>

                                    <li class="nav-item"><a href="/debonair-softy-hardy"
                                            class="nav-link">Debonair-Softy
                                            Hardy
                                            [M-004]</a>
                                    </li>
                                    <li class="nav-item"><a href="/memory-foam-series" class="nav-link">Memory Foam
                                            Series (M-005)</a>
                                    </li>

                                    <li class="nav-item"><a href="/spring-series" class="nav-link">Spring Series
                                            [M-006]</a>
                                    </li>

                                    <li class="nav-item"><a href="/classic-ortho-bondo-coir" class="nav-link">Coir
                                            Series [M-007]</a>
                                    </li>
                                    <li class="nav-item"><a href="/luxury" class="nav-link">Latexo Series
                                            [M-008]</a>
                                    </li>
                                </ul>





                            </li>

                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="/gallery" class="nav-link">Gallery
                                </a>
                            </li>
                        </ul>


                        <div class="others-option">
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="search-btn bx bx-search-alt"></i>
                                </div>
                            </div>


                            <div class="option-item">
                                <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                    <span class="top-bar"></span>
                                    <span class="middle-bar"></span>
                                    <span class="bottom-bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Header Area -->

    <!-- Start Search Overlay -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>

                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>

                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Overlay -->


    <main>
        @yield('content')
    </main>

    <!-- Start Sidebar Modal -->
    <div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <div class="sidebar-about-content">
                        <h3>About The Store</h3>

                        <div class="about-the-store">
                            <p>
                                Since 1995, ThankYou Mattresses & More has been crafting quality sleep solutions. We
                                combine expertise with innovation to deliver customized comfort, ensuring better sleep
                                and healthier lives.
                            </p>

                            <ul class="sidebar-contact-info">
                                <li><i class='bx bx-map'></i> <a href="#" target="_blank">
                                        212, Nangli Sakravati, Near Najafgarh, New Delhi-110043
                                    </a></li>
                                <li><i class='bx bx-phone-call'></i> <a href="tel:+01321654214">+91 9971 12345 41</a>
                                </li>
                                <li><i class='bx bx-envelope'></i> <a
                                        href="mailto:info@thankyoumattress.com ">info@thankyoumattress.com </a>
                                </li>
                            </ul>
                        </div>

                        <ul class="social-link">
                            <li><a href="https://www.facebook.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://twitter.com/login" class="d-block" target="_blank"><i
                                        class='bx bxl-twitter'></i></a></li>
                            <li><a href="https://www.instagram.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-instagram'></i></a></li>
                            <li><a href="https://www.linkedin.com/login" class="d-block" target="_blank"><i
                                        class='bx bxl-linkedin'></i></a></li>
                            <li><a href="https://www.pinterest.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-pinterest-alt'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    <!-- Start QuickView Modal Area -->
    <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="products-image">
                            <img src="assets/img/quick-view-img.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="products-content">
                            <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>

                            <div class="price">
                                <span class="old-price">$210.00</span>
                                <span class="new-price">$200.00</span>
                            </div>

                            <div class="products-review">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <a href="#" class="rating-count">3 reviews</a>
                            </div>

                            <ul class="products-info">
                                <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                                <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
                                <li><span>Products Type:</span> <a href="#">T-Shirt</a></li>
                            </ul>

                            <div class="products-color-switch">
                                <h4>Color:</h4>

                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Black" class="color-black"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="White" class="color-white"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Green" class="color-green"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Yellow Green" class="color-yellowgreen"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Teal" class="color-teal"></a></li>
                                </ul>
                            </div>

                            <div class="products-size-wrapper">
                                <h4>Size:</h4>

                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li class="active"><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>

                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>

                                <button type="submit" class="default-btn">Add to Cart</button>
                            </div>

                            <a href="#" class="view-full-info">View Full Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End QuickView Modal Area -->

    <!-- Start Shopping Cart Modal -->
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <h3>My Cart (3)</h3>

                    <div class="products-cart-content">
                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$250.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Hanes Men's Pullover</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>

                        <span class="subtotal">$650.00</span>
                    </div>
                    {{-- 
                    <div class="products-cart-btn">
                        <a href="#" class="default-btn">Proceed to Checkout</a>
                        <a href="#" class="optional-btn">View Shopping Cart</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Shopping Cart Modal -->

    <!-- Start Wishlist Modal -->
    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <h3>My Wish List (3)</h3>

                    <div class="products-cart-content">
                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$250.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Hanes Men's Pullover</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="products-cart-btn">
                        <a href="#" class="optional-btn">View Shopping Cart</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist Modal -->

    <!-- Start Size Guide Modal Area -->
    <div class="modal fade sizeGuideModal" id="sizeGuideModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bx bx-x"></i></span>
                </button>

                <div class="modal-sizeguide">
                    <h3>Size Guide</h3>
                    <p>This is an approximate conversion table to help you find your size.</p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Italian</th>
                                    <th>Spanish</th>
                                    <th>German</th>
                                    <th>UK</th>
                                    <th>US</th>
                                    <th>Japanese</th>
                                    <th>Chinese</th>
                                    <th>Russian</th>
                                    <th>Korean</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>34</td>
                                    <td>30</td>
                                    <td>28</td>
                                    <td>4</td>
                                    <td>00</td>
                                    <td>3</td>
                                    <td>155/75A</td>
                                    <td>36</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>32</td>
                                    <td>30</td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>5</td>
                                    <td>155/80A</td>
                                    <td>38</td>
                                    <td>44</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>34</td>
                                    <td>32</td>
                                    <td>8</td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>160/84A</td>
                                    <td>40</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>36</td>
                                    <td>34</td>
                                    <td>10</td>
                                    <td>4</td>
                                    <td>9</td>
                                    <td>165/88A</td>
                                    <td>42</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>38</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>6</td>
                                    <td>11</td>
                                    <td>170/92A</td>
                                    <td>44</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>40</td>
                                    <td>38</td>
                                    <td>14</td>
                                    <td>8</td>
                                    <td>13</td>
                                    <td>175/96A</td>
                                    <td>46</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>42</td>
                                    <td>40</td>
                                    <td>16</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>170/98A</td>
                                    <td>48</td>
                                    <td>77</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>44</td>
                                    <td>42</td>
                                    <td>18</td>
                                    <td>12</td>
                                    <td>17</td>
                                    <td>170/100B</td>
                                    <td>50</td>
                                    <td>77</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>46</td>
                                    <td>44</td>
                                    <td>20</td>
                                    <td>14</td>
                                    <td>19</td>
                                    <td>175/100B</td>
                                    <td>52</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td>48</td>
                                    <td>46</td>
                                    <td>22</td>
                                    <td>16</td>
                                    <td>21</td>
                                    <td>180/104B</td>
                                    <td>54</td>
                                    <td>88</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Size Guide Modal Area -->

    <!-- Start Shipping Modal Area -->
    <div class="modal fade productsShippingModal" id="productsShippingModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="shipping-content">
                    <h3>Shipping</h3>
                    <ul>
                        <li>Complimentary ground shipping within 1 to 7 business days</li>
                        <li>In-store collection available within 1 to 7 business days</li>
                        <li>Next-day and Express delivery options also available</li>
                        <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of
                            certain items</li>
                        <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                    </ul>

                    <h3>Returns and Exchanges</h3>
                    <ul>
                        <li>Easy and complimentary, within 14 days</li>
                        <li>See conditions and procedure in our return FAQs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shipping Modal Area -->

    <!-- Start Products Filter Modal Area -->
    <div class="modal left fade productsFilterModal" id="productsFilterModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i> Close</span>
                </button>

                <div class="modal-body">
                    <div class="woocommerce-widget-area">
                        <div class="woocommerce-widget filter-list-widget">
                            <h3 class="woocommerce-widget-title">Current Selection</h3>

                            <div class="selected-filters-wrap-list">
                                <ul>
                                    <li><a href="#"><i class='bx bx-x'></i> 44</a></li>
                                    <li><a href="#"><i class='bx bx-x'></i> XI</a></li>
                                    <li><a href="#"><i class='bx bx-x'></i> Clothing</a></li>
                                    <li><a href="#"><i class='bx bx-x'></i> Shoes</a></li>
                                </ul>

                                <a href="#" class="delete-selected-filters"><i class='bx bx-trash'></i>
                                    <span>Clear All</span></a>
                            </div>
                        </div>

                        <div class="woocommerce-widget collections-list-widget">
                            <h3 class="woocommerce-widget-title">Collections</h3>

                            <ul class="collections-list-row">
                                <li><a href="#">Men's</a></li>
                                <li class="active"><a href="#" class="active">Women’s</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget price-list-widget">
                            <h3 class="woocommerce-widget-title">Price</h3>

                            <div class="collection-filter-by-price">
                                <input class="js-range-of-price" type="text" data-min="0" data-max="1055"
                                    name="filter_by_price" data-step="10">
                            </div>
                        </div>

                        <div class="woocommerce-widget size-list-widget">
                            <h3 class="woocommerce-widget-title">Size</h3>

                            <ul class="size-list-row">
                                <li><a href="#">20</a></li>
                                <li><a href="#">24</a></li>
                                <li class="active"><a href="#">36</a></li>
                                <li><a href="#">30</a></li>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget color-list-widget">
                            <h3 class="woocommerce-widget-title">Color</h3>

                            <ul class="color-list-row">
                                <li class="active"><a href="#" title="Black" class="color-black"></a></li>
                                <li><a href="#" title="Red" class="color-red"></a></li>
                                <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                                <li><a href="#" title="White" class="color-white"></a></li>
                                <li><a href="#" title="Blue" class="color-blue"></a></li>
                                <li><a href="#" title="Green" class="color-green"></a></li>
                                <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                <li><a href="#" title="Pink" class="color-pink"></a></li>
                                <li><a href="#" title="Violet" class="color-violet"></a></li>
                                <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
                                <li><a href="#" title="Lime" class="color-lime"></a></li>
                                <li><a href="#" title="Plum" class="color-plum"></a></li>
                                <li><a href="#" title="Teal" class="color-teal"></a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget brands-list-widget">
                            <h3 class="woocommerce-widget-title">Brands</h3>

                            <ul class="brands-list-row">
                                <li><a href="#">Gucci</a></li>
                                <li><a href="#">Virgil Abloh</a></li>
                                <li><a href="#">Balenciaga</a></li>
                                <li class="active"><a href="#">Moncler</a></li>
                                <li><a href="#">Fendi</a></li>
                                <li><a href="#">Versace</a></li>
                            </ul>
                        </div>

                        <div class="woocommerce-widget aside-trending-widget">
                            <div class="aside-trending-products">
                                <img src="assets/img/offer-bg.jpg" alt="image">

                                <div class="category">
                                    <h3>Top Trending</h3>
                                    <span>Spring/Summer 2024 Collection</span>
                                </div>
                                <a href="products-right-sidebar.html" class="link-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products Filter Modal Area -->


    <!-- Start Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>About The Store</h3>

                        <div class="about-the-store">
                            <p>

                                Since 1995, <i>ThankYou Mattresses & More</i> has been crafting quality sleep solutions.
                                We
                                combine expertise with innovation to deliver customized comfort, ensuring better sleep
                                and healthier lives.

                            </p>
                            <ul class="footer-contact-info">
                                <li><i class='bx bx-map'></i> <a href="#" target="_blank">
                                        212, Nangli Sakravati, Near Najafgarh, New Delhi-110043
                                    </a></li>
                                <li><i class='bx bx-phone-call'></i> <a href="tel:+9199711234541">+91 9971 12345
                                        41</a>
                                </li>
                                <li><i class='bx bx-envelope'></i> <a href="mailto:info@thankyoumattress.com ">
                                        info@thankyoumattress.com
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <ul class="social-link">
                            <li><a href="https://www.facebook.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://twitter.com/login" class="d-block" target="_blank"><i
                                        class='bx bxl-twitter'></i></a></li>
                            <li><a href="https://www.instagram.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-instagram'></i></a></li>
                            <li><a href="https://www.linkedin.com/login" class="d-block" target="_blank"><i
                                        class='bx bxl-linkedin'></i></a></li>
                            <li><a href="https://www.pinterest.com/" class="d-block" target="_blank"><i
                                        class='bx bxl-pinterest-alt'></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget pl-4">
                        <h3>Quick Links</h3>

                        <ul class="quick-links">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/">Terms &amp; conditions</a></li>
                            <li><a href="/">FAQ's</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="customer-service.html">Customer Services</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Customer Support</h3>

                        <ul class="customer-support">
                            <li><a href="login.html">My Account</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                            <li><a href="track-order.html">Order Tracking</a></li>
                            <li><a href="contact.html">Help & Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Newsletter</h3>

                        <div class="footer-newsletter-box">
                            <p>To get the latest news and latest updates from us.</p>

                            <form class="newsletter-form" data-bs-toggle="validator">
                                <label>Your E-mail Address:</label>
                                <input type="email" class="input-newsletter" placeholder="Enter your email"
                                    name="EMAIL" required autocomplete="off">
                                <button type="submit">Subscribe</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <p>© All Rights Reserved
                            <a>ThankYou Mattress</a>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul class="payment-types">
                            <li><a href="#" target="_blank"><img src="assets/img/payment/visa.png"
                                        alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="assets/img/payment/mastercard.png"
                                        alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="assets/img/payment/mastercard2.png"
                                        alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="assets/img/payment/visa2.png"
                                        alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="assets/img/payment/expresscard.png"
                                        alt="image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <!-- Links of JS files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/rangeSlider.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>