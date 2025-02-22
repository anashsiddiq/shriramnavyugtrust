@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/RefundReturn.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="RefundReturn">
        <h2 class="m-0">Refund and Return Policy</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>
</div>

<div class="container text_center mt-4 mb-5">
             <p> No Refund And Return As It Is Donation.</p>
        </div>
<!-- cards -->
    <div class="container text-center mt-5">
        <a href="{{ route('contact') }}" class="custom-btn">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>

@include('partials.footer')