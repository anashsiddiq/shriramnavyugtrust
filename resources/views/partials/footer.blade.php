<footer id="footer" class="footer bg-dark dark-background mt-4 py-4">
  <div class="container">
    <div class="row d-flex justify-content-between align-items-start">
      <!-- Footer About -->
      <div class="col-lg-3 col-md-6 footer-about">
      <div class="image-container">
    <a href="{{route('index')}}" class="d-inline-block">
        <img src="https://bhagvahindvahini.in/webimg/1001266736_0132025174307.png" 
             alt="Description" 
             class="img-fluid rounded image_short" 
             width="200">
    </a>
</div>
        <div class="social-links d-flex mt-4">
          <a href="#" class="text-decoration-none text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-decoration-none text-white me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-decoration-none text-white me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-decoration-none text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- Our Services -->
      <div class="col-lg-2 col-md-3 text-white footer-links">
      <h4 class="text-uppercase">About</h4>
        <ul class="list-unstyled">
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('index') }}">Home</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('index') }}">About Us</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('MissonandVison') }}">Mission And Vision</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('OurManagement') }}">Our Management body</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('Ourteam') }}">Our Team</a></li>
        </ul>
      </div>

      <!-- Other Services -->
      <div class="col-lg-2 col-md-3 text-white footer-links">
      <h4 class="text-uppercase">Quick Link</h4>
        <ul class="list-unstyled">
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('Achievements') }}">Achivements</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('certificate') }}">Certifications</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('OurProjects') }}">Our projects</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('pressmedia') }}">Press/Media Gallary</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('Photogallary') }}">Photo Gallary</a></li>
        </ul>
      </div>

      <!-- Useful Links -->
      <div class="col-lg-2 col-md-3 text-white footer-links">
        <h4 class="text-uppercase">Polices</h4>
        <ul class="list-unstyled">
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('Termandcondition') }}">Term And Conditions</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('RefundReturn') }}">Refund And Return Policy</a></li>
          <li><i class="fa fa-chevron-right"></i> <a href="{{ route('PrivercyAndPolicy') }}">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="col-lg-3 col-md-12 text-white footer-contact">
    <h4>Contact Us</h4>
    <p>Get in touch with us for any queries or support.</p>
    <div class="d-flex align-items-center mb-3">
        <i class="fas fa-map-marker-alt me-2"></i>
        <span>123 Street, City, Country</span>
    </div>
    <div class="d-flex align-items-center mb-3">
        <i class="fas fa-phone me-2"></i>
        <span>+123 456 7890</span>
    </div>
    <div class="d-flex align-items-center mb-3">
        <i class="fas fa-envelope me-2"></i>
        <span>info@example.com</span>
    </div>
    <div class="d-flex align-items-center">
        <i class="fas fa-clock me-2"></i>
        <span>Mon - at: 9:00 AM - 6:00 PM</span>
    </div>
</div>


    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="container text-center text-white mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Dewi</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="">BootstrapMade</a> Distributed by <a href="">Design</a>
    </div>
  </div>
</footer>




<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- js file -->
  <script src="/public/js/main.js"></script>
  <!-- swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="{{ asset('js/main.js') }}"></script>


</body>
</html>