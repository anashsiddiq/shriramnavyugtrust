<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- add google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Karla:ital,wght@0,200..800;1,200..800&family=Liter&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include Custom CSS -->
    <!-- swiper js -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-fluid bg-light pt-4" id="container_height">
    <div class="row align-items-center mb-3" id="icon_left">
        <div class="col-md-2 col-3 text-start" id="social_right">
        <a href="https://www.facebook.com" target="_blank" class="social-icons">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.twitter.com" target="_blank" class="social-icons">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank" class="social-icons">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com" target="_blank" class="social-icons">
            <i class="fab fa-linkedin-in"></i>
        </a>
        </div>

        <div class="col-md-6 col-6 text-center">
            <div class="news-box d-flex align-items-center p-2 bg-white shadow-sm rounded">
            <div class="bg_box d-flex rounded g-3">
                <i class="fas fa-newspaper text-white fs-4"></i>
                <h5 class="m-0 text-white font_less">Latest News</h5>
            </div>
            <marquee behavior="scroll" direction="left" class="flex-grow-1 spam_color">
    <span class="dot bg-danger"></span>"Stay Connect and informed: Empowering Lives,Transforming Communities!" &nbsp;&nbsp;
    <span class="dot bg-success"></span> "Stay Connect and informed: Empowering Lives,Transforming Communities!" &nbsp;&nbsp;
</marquee>

            </div>
        </div>

        <div class="col-md-4 col-3 text-end text-white d-flex align-items-center justify-content-end" id="set_phone">
    <i class="fas fa-phone-alt me-1"></i>
    <span class="fw-bold text-nowrap">+91 98765 43210</span>
</div>
    </div>
</div>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid py-2 background_color">
    <div class="d-flex align-items-center w-100">
    <!-- Left Side: Logo -->
    <div class="me-auto">
        <a href="{{ url('your-link-here') }}" class="container_logo">
            <img src="https://bhagvahindvahini.in/webimg/1001266736_0132025174307.png" alt="Example Image" class="img-fluid">
        </a>
    </div>

    <!-- Center: Title -->
    <div class="flex-grow-1 text-center">
        <h3 class="heading_title text-white mb-0">भगवा हिन्द वाहिनी</h3>
    </div>
</div>
           
        
        <!-- Navbar Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Menu -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="links_left">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('OurManagement') }}">Our Management Body</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('Photogallary') }}">Photo Gallery</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('Achievements') }}">Achivements</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Upcoming Event</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Donate</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">List Donors</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Contact us</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="{{ route('index') }}">About us</a></li>
                            <li><a class="dropdown-item" href="{{ route('Ourteam') }}">Our Team</a></li>
                            <li><a class="dropdown-item" href="{{ route('index') }}">Our Vison / Mission</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="importantLinksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Important Links
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="importantLinksDropdown">
                            <li><a class="dropdown-item" href="{{ route('index') }}">Terms and Conditions</a></li>
                            <li><a class="dropdown-item" href="{{ route('index') }}">Privacy Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('index') }}">FAQs</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                            <li><a class="dropdown-item" href="{{ route('index') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('index') }}">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
 <!-- navbaar end -->