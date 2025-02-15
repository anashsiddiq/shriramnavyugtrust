@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/OurManagement.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="OurTeam_margin">
        <h2 class="m-0">Our Management Body</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>
</div>

<!-- cards -->
<div class="container py-5">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card p-4 cards_team">
                    <div class="icon-team">
                        <i class="fas fa-user"></i>
                    </div>
                    <h5 class="card-title">User Profile</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 cards_team">
                    <div class="icon-team">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h5 class="card-title">Shopping</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 cards_team">
                    <div class="icon-team">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h5 class="card-title">Settings</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-4 cards_team">
                    <div class="icon-team">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5 class="card-title">Messages</h5>
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