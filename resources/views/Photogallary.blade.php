@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/Photogallary.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="Ourgallary_margin">
        <h2 class="m-0">Our Gallary</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>

</div>

<div class="container mt-4 ">
<div class="row g-2">
        <div class="col-md-4">
            <div class="image-container">
                <img src="https://c4.wallpaperflare.com/wallpaper/138/429/290/high-quality-backgrounds-nature-1920x1200-wallpaper-preview.jpg" alt="Image 1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="image-container">
                <img src="https://wallpapercave.com/wp/9OYMGcV.jpg" alt="Image 2">
            </div>
        </div>
        <div class="col-md-4">
            <div class="image-container">
                <img src="https://c4.wallpaperflare.com/wallpaper/138/429/290/high-quality-backgrounds-nature-1920x1200-wallpaper-preview.jpg" alt="Image 3">
            </div>
        </div>
    </div>
</div>
    
<div class="container">
<div class="row mt-4 g-2">
        <div class="col-md">
            <div class="image-container">
                <img src="https://c4.wallpaperflare.com/wallpaper/947/750/355/high-quality-backgrounds-nature-1920x1200-wallpaper-preview.jpg" alt="Image">
            </div>
        </div>
        <div class="col-md">
            <div class="image-container">
                <img src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg" alt="Image">
            </div>
        </div>
        <div class="col-md">
            <div class="image-container">
                <img src="https://cdn.pixabay.com/photo/2020/02/10/13/58/flowers-4836548_640.jpg" alt="Image">
            </div>
        </div>
        <div class="col-md">
            <div class="image-container">
                <img src="https://c4.wallpaperflare.com/wallpaper/947/750/355/high-quality-backgrounds-nature-1920x1200-wallpaper-preview.jpg" alt="Image">
            </div>
        </div>
        <div class="col-md">
            <div class="image-container">
                <img src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg" alt="Image">
            </div>
        </div>
        <div class="col-md">
            <div class="image-container">
                <img src="https://cdn.pixabay.com/photo/2020/02/10/13/58/flowers-4836548_640.jpg" alt="Image">
            </div>
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