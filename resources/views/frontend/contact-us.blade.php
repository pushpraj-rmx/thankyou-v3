@extends('layouts.frontend')
@section('content')

        <!-- Start Page Title -->
        <div class="page-title-area">
          <div class="container">
              <div class="page-title-content">
                  <h2>Contact Us</h2>
                  <ul>
                      <li><a href="/">Home</a></li>
                      <li>Contact Us</li>
                  </ul>
              </div>
          </div>
      </div>
      <!-- End Page Title -->

      <!-- Start Contact Area -->
      <section class="contact-area ptb-100">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-5 col-md-12">
                      <div class="contact-info">
                          <h3>Visit Us</h3>
                          {{-- <p>Have a question? You may find an answer in our <a href="#">FAQs</a>. But you can also contact us.</p> --}}

                          <ul class="contact-list">
                              <li>
                                <i class='bx bx-map'></i> Location:  <a href="https://maps.app.goo.gl/tQDnRiUopUP4rxMi7">212, Nangli Sakravati, Near Najafgarh, New Delhi-110043
                                
                                </a>
                              </li>
                              <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+01321654214">
                                +91 9971 12345 41
                              </a></li>
                              <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+01321654214">
                                +91 9910 0788 98
                              </a></li>
                              <li><i class='bx bx-envelope'></i> Email Us: <a href="mailto:info@thankyoumattress.com">info@thankyoumattress.com</a></li>
                              {{-- <li><i class='bx bx-microphone'></i> Fax: <a href="tel:+123456789">+123456789</a></li> --}}
                          </ul>

                          <h3>Opening Hours:</h3>
                          <ul class="opening-hours">
                              <li><span>Monday:</span> 8AM - 6AM</li>
                              <li><span>Tuesday:</span> 8AM - 6AM</li>
                              <li><span>Wednesday:</span> 8AM - 6AM</li>
                              <li><span>Thursday - Friday:</span> 8AM - 6AM</li>
                              <li><span>Sunday:</span> Closed</li>
                          </ul>

                          <h3>Follow Us:</h3>
                          <ul class="social">
                              <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                              <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                              <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                              <li><a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                              <li><a href="#" target="_blank"><i class='bx bxl-skype'></i></a></li>
                              <li><a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                              <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-7 col-md-12">
                      <div class="contact-form">
                          <h3>Drop Us A Line</h3>
                          <p>
                            If you have any questions regarding our products, directions to our stores, or our specials, please feel free to use the below contact form. We will respond to your request at the earliest possible opportunity.   
                          </p>

                          <form id="contactForm">
                              <div class="row justify-content-center">
                                  <div class="col-lg-12 col-md-6">
                                      <div class="form-group">
                                          <label>Name <span>*</span></label>
                                          <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                          <div class="help-block with-errors"></div>
                                      </div>
                                  </div>

                                  <div class="col-lg-12 col-md-6">
                                      <div class="form-group">
                                          <label>Email <span>*</span></label>
                                          <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                          <div class="help-block with-errors"></div>
                                      </div>
                                  </div>

                                  <div class="col-lg-12 col-md-12">
                                      <div class="form-group">
                                          <label>Phone Number <span>*</span></label>
                                          <input type="text" name="phone_number" id="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                                          <div class="help-block with-errors"></div>
                                      </div>
                                  </div>

                                  <div class="col-lg-12 col-md-12">
                                      <div class="form-group">
                                          <label>Your Message <span>*</span></label>
                                          <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
                                          <div class="help-block with-errors"></div>
                                      </div>
                                  </div>

                                  <div class="col-lg-12 col-md-12">
                                      <button type="submit" class="default-btn">Send Message</button>
                                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Contact Area -->

      <!-- Map -->
      <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3502.312366941586!2d77.00059637550034!3d28.620398775671344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDM3JzEzLjQiTiA3N8KwMDAnMTEuNCJF!5e0!3m2!1sen!2sin!4v1727431434042!5m2!1sen!2sin"></iframe>
      </div>
      <!-- End Map -->

      <!-- Start Facility Area -->
      {{-- <section class="facility-area pt-100 pb-70">
          <div class="container">
              <div class="facility-slides owl-carousel owl-theme">
                  <div class="single-facility-box">
                      <div class="icon">
                          <i class='flaticon-tracking'></i>
                      </div>
                      <h3>Free Shipping Worldwide</h3>
                  </div>

                  <div class="single-facility-box">
                      <div class="icon">
                          <i class='flaticon-return'></i>
                      </div>
                      <h3>Easy Return Policy</h3>
                  </div>

                  <div class="single-facility-box">
                      <div class="icon">
                          <i class='flaticon-shuffle'></i>
                      </div>
                      <h3>7 Day Exchange Policy</h3>
                  </div>

                  <div class="single-facility-box">
                      <div class="icon">
                          <i class='flaticon-sale'></i>
                      </div>
                      <h3>Weekend Discount Coupon</h3>
                  </div>

                  <div class="single-facility-box">
                      <div class="icon">
                          <i class='flaticon-credit-card'></i>
                      </div>
                      <h3>Secure Payment Methods</h3>
                  </div>

                  <div class="single-facility-box">
                      <div class="icon">
                          <i class='flaticon-location'></i>
                      </div>
                      <h3>Track Your Package</h3>
                  </div>

                  <div class="single-facility-box">
                      <div class="icon">
                          <i class='flaticon-customer-service'></i>
                      </div>
                      <h3>24/7 Customer Support</h3>
                  </div>
              </div>
          </div>
      </section> --}}
      <!-- End Facility Area -->

      <!-- Start Instagram Area -->
      {{-- <div class="instagram-area">
          <div class="container-fluid">
              <div class="instagram-title">
                  <a href="#" target="_blank"><i class='bx bxl-instagram'></i> Follow us on @xton</a>
              </div>

              <div class="instagram-slides owl-carousel owl-theme">
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img1.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>

                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img2.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>

                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img3.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
                  
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img4.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
                  
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img10.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
                  
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img6.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
                  
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img7.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
                  
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img8.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
                  
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img9.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
                  
                  <div class="single-instagram-post">
                      <img src="assets/img/instagram/img5.jpg" alt="image">
                      <i class='bx bxl-instagram'></i>
                      <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                  </div>
              </div>
          </div>
      </div> --}}
      <!-- End Instagram Area -->



@endsection
