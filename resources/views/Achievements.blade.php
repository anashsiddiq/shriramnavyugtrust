@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/Achievements.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="Ourgallary_margin">
        <h2 class="m-0">Achievements / Awards   </h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>

</div>

<div class="container py-5">
        <div class="row d-flex flex-wrap justify-content-center">
            <div class="col-md-3 mb-3">
                <div class="border-box"></div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="border-box"></div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="border-box"></div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="border-box"></div>
            </div>
        </div>
    </div>
    
<div class="container text-center mt-5">
        <a href="{{ route('contact') }}" class="custom-btn">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>
@include('partials.footer')