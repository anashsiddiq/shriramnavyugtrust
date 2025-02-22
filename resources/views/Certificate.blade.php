@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/Certificates.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="certifications_margin">
        <h2 class="m-0">Our Certifications</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>

</div>


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-3 m-2 container-box">
            <button class="btn-gradient">box1</button>
        </div>
        <div class="col-md-3 m-2 container-box">
            <button class="btn-gradient">box2</button>
        </div>
        <div class="col-md-3 m-2 container-box">
            <button class="btn-gradient">box3</button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3 m-2 container-box">
            <button class="btn-gradient">box4</button>
        </div>
        <div class="col-md-3 m-2 container-box">
            <button class="btn-gradient">box5</button>
        </div>
    </div>
</div>

<div class="container text-center mt-5">
        <a href="{{ route('contact') }}" class="custom-btn">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>
@include('partials.footer')