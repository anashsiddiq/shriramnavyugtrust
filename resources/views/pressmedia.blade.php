@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/Ourpressmedia.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="pressmedia_margin">
        <h2 class="m-0">Press Release</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>
</div>

<!-- cards -->
    <div class="container text-center mt-5">
        <a href="{{ route('contact') }}" class="custom-btn">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>

@include('partials.footer')