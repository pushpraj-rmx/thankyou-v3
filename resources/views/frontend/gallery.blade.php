@extends('layouts.frontend')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery.min.css">
    <h1>Gallery</h1>
    <p>Your gallery images here...</p>

    <div id="lightgallery">
        <a href="img/img1.jpg" data-lg-size="1600-2400"> <img alt="img1" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a>
        <a href="img/img2.jpg" data-lg-size="1024-800"> <img alt="img2" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a> 
        <a href="img/img1.jpg" data-lg-size="1600-2400"> <img alt="img1" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a>
        <a href="img/img2.jpg" data-lg-size="1024-800"> <img alt="img2" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a> 
        <a href="img/img1.jpg" data-lg-size="1600-2400"> <img alt="img1" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a>
        <a href="img/img2.jpg" data-lg-size="1024-800"> <img alt="img2" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a> 
        <a href="img/img1.jpg" data-lg-size="1600-2400"> <img alt="img1" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a>
        <a href="img/img2.jpg" data-lg-size="1024-800"> <img alt="img2" src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" /> </a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"
        integrity="sha256-feKFTnlUEF8rkf9Zg3ScTjx69R4FquJ5+KXWaZSoV3c=" crossorigin="anonymous"></script>


    {{-- <img src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" alt="">
    <img src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" alt="">
    <img src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" alt="">
    <img src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" alt="">
    <img src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" alt="">
    <img src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" alt="">
    <img src="{{ asset('img/gallery/0722090811054839p1.jpg') }}" alt=""> --}}

    <script type="text/javascript">
      lightGallery(document.getElementById('lightgallery'), {
          plugins: [lgZoom, lgThumbnail],
          // licenseKey: 'your_license_key',
          speed: 500,
          // ... other settings
      });
  </script>
  

@endsection
