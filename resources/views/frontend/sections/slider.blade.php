<!-- Start Main Banner Area -->
<div class="home-slides owl-carousel owl-theme">
    @foreach ($sliders as $slider)
        <div class="main-banner banner-bg1" style="background-image: url('{{ asset('storage/' . $slider->image_path) }}')">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content
                        {{-- text-center --}}
                        ">
                            {{-- <span class="sub-title">Limited Time Offer!</span> --}}
                            <h1>{{ $slider->title }}</h1>
                            <p>{{ $slider->short_paragraph }}</p>
                            <div class="btn-box">
                                <a href="{{ $slider->button_url }}" class="default-btn">{{ $slider->button_text }}</a>
                                {{-- <a href="products-right-sidebar-2.html" class="optional-btn">Shop Men's</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <div class="main-banner banner-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span class="sub-title">Exclusive Offer!</span>
                        <h1>Spring-Show!</h1>
                        <p>Leap year offer ‘Sale Must-Haves'</p>
                        <div class="btn-box">
                            <a href="products-left-sidebar.html" class="default-btn">Shop Women's</a>
                            <a href="products-right-sidebar-2.html" class="optional-btn">Shop Men's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner banner-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="main-banner-content">
                        <span class="sub-title">Buy Now From Xton!</span>
                        <h1>New Season Canvas</h1>
                        <p>Take 20% Off ‘Sale Must-Haves'</p>
                        <div class="btn-box">
                            <a href="products-left-sidebar.html" class="default-btn">Shop Women's</a>
                            <a href="products-right-sidebar-2.html" class="optional-btn">Shop Men's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- End Main Banner Area -->






{{-- @foreach ($sliders as $slider)
    <div class="slide">
        <img src="{{ asset('storage/' . $slider->image_path) }}" alt="{{ $slider->title }}">
        <div class="slide-content">
            <h2>{{ $slider->title }}</h2>
            <p>{{ $slider->short_paragraph }}</p>
            @if ($slider->button_text && $slider->button_url)
                <a href="{{ $slider->button_url }}" class="button">{{ $slider->button_text }}</a>
            @endif
        </div>
    </div>
@endforeach --}}
