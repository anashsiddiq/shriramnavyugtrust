@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/Achievements.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="Ourgallary_margin">
        <h2 class="m-0">Our Gallary</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>

</div>



<a href="{{ route('contact') }}" class="custom-btn mt-5">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>
@include('partials.footer')