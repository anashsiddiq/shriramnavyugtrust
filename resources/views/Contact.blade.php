@include('partials.header')

<link rel="stylesheet" href="{{ asset('css/Contact.css') }}">

<!-- headings 1 start -->
    <div class="text-center bg-primary mt-5 text-white mt-5 py-3 website_heading" id="heading_margin">
        <h2 class="m-0">Contact us</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>
</div>

<!-- cards -->

<div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center p-3">
                    <div class="icon-circle">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5>Address</h5>
                    <p>123 Street, City, Country</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-3 card-info">
                    <div class="icon-circle">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h5>Call</h5>
                    <p>+123 456 7890</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-3 card-info">
                    <div class="icon-circle">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h5>WhatsApp</h5>
                    <p>+123 456 7890</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center p-3 card-info">
                    <div class="icon-circle">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
        </div>
    </div>

     <!-- contact us -->
    <div class="contact_bg">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="contact-form">
                        <h2>Contact Us</h2>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Your Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Enter the subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-s">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@include('partials.footer')