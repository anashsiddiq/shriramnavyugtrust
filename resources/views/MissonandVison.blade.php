@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/MissonandVison.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="mivion_margin">
        <h2 class="m-0">Misson / Vison </h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>
</div>

<div class="container vision-mission-section overflow-hidden">
    <div class="row">
        <!-- Vision Section -->
        <div class="col-md-6">
            <div class="vision text-center">
                <div class="icon-box">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="heading">Our Vision</div>
                <p class="text">
                    Our vision is to empower businesses with innovative technology solutions that drive success and growth.
                </p>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="col-md-6">
            <div class="mission text-center">
                <div class="icon-box">
                    <i class="fas fa-bullseye"></i>
                </div>
                <div class="heading">Our Mission</div>
                <p class="text">
                    Our mission is to deliver high-quality services that create meaningful impact and long-lasting relationships.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container text-center mt-5">
        <a href="{{ route('contact') }}" class="custom-btn">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>
@include('partials.footer')