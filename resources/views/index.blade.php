@include('partials.header')

 <!-- carousel start -->
<div class="container_slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://bhagvahindvahini.in/testinomial-img/IMG-20230912-WA0081_10132023015556.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 1 Caption</h5>
                    <p>First slide description goes here.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://bhagvahindvahini.in/testinomial-img/2_1272022104550.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 2 Caption</h5>
                    <p>Second slide description goes here.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://bhagvahindvahini.in/testinomial-img/IMG-20231013-WA0021_10132023014638.jpg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 3 Caption</h5>
                    <p>Third slide description goes here.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://bhagvahindvahini.in/testinomial-img/IMG-20231013-WA0022_10132023014814.jpg" class="d-block w-100" alt="Slide 4">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 4 Caption</h5>
                    <p>Fourth slide description goes here.</p>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- carousel end -->

<!-- headings 1 start -->

    <div class="text-center bg-primary text-white mt-3 py-3 website_heading">
        <h2 class="m-0">Quick Links</h2>
    </div>
<!-- headings 1 end -->

<!-- cards start -->
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card text-center p-3">
                <div class="card-body">
                    <i class="fas fa-user fa-3x text-primary"></i>
                    <h5 class="card-title mt-3 text-dark">Profile</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card text-center p-3">
                <div class="card-body">
                    <i class="fas fa-shopping-cart fa-3x text-primary"></i>
                    <h5 class="card-title mt-3 text-dark">Shop</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card text-center p-3">
                <div class="card-body">
                    <i class="fas fa-cog fa-3x text-primary"></i>
                    <h5 class="card-title mt-3 text-dark">Settings</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card text-center p-3">
                <div class="card-body">
                    <i class="fas fa-envelope fa-3x text-primary"></i>
                    <h5 class="card-title mt-3 text-dark">Messages</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- card start -->

<!-- image with content -->

<div class="container about-section">
    <div class="row justify-content-center">
        <!-- Section Title -->
        <div class="col-12 text-center">
            <h1 class="section-title">About Information</h1>
        </div>

        <!-- Content Section -->
        <div class="col-md-2 d-flex flex-column align-items-center">
            <img src="https://bhagvahindvahini.in/webimg/1001266736_0132025174307.png" alt="Sample Image" class="img-fluid about-img">
        </div>

        <div class="col-md-8 d-flex flex-column align-items-center">
            <p class="about-textr">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui quibusdam delectus autem incidunt eos voluptas sint rerum, pariatur tempora magnam optio! Quae rem nesciunt optio officiis asperiores distinctio molestias quam?
            </p>
            <a href="#" class="btn-custom mt-3"><i class="fas fa-info-circle"></i> Know More Aboutus</a>
        
        </div>
    </div>
</div>

<!-- image with content -->


<!-- heading title 1 -->
<div class="container">
    <div class="title-container">
        <h1 class="title-text">Your Amazing <span>Title<span></h1>
        <div class="title-line"></div>
    </div>
</div>

<!-- heading title 1 -->



<!-- card2 -->
<div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card card_design">
                    <div class="icon-container">
                        <i class="fas fa-code"></i>
                    </div>
                    <h5 class="card-title cart-text">Development</h5>
                    <p class="card-text">Building scalable applications.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card_design">
                    <div class="icon-container">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h5 class="card-title cart-text">Design</h5>
                    <p class="card-text">Creating stunning visuals.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card_design">
                    <div class="icon-container">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h5 class="card-title cart-text">Marketing</h5>
                    <p class="card-text">Boosting online presence.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card_design">
                    <div class="icon-container">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 class="card-title cart-text">Security</h5>
                    <p class="card-text">Ensuring data protection.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card_design">
                    <div class="icon-container">
                        <i class="fas fa-server"></i>
                    </div>
                    <h5 class="card-title cart-text">Hosting</h5>
                    <p class="card-text">Reliable cloud solutions.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card_design">
                    <div class="icon-container">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5 class="card-title cart-text">Support</h5>
                    <p class="card-text">24/7 customer assistance.</p>
                </div>
            </div>
        </div>
        <div class="container mt-2">
        <p class="text-muted mt-">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus molestias porro facere quasi, dolorum repudiandae ratione, et exercitationem eum, ipsa totam magni nostrum laudantium ipsum saepe quod odit quas reiciendis 
       </p>
        </div>
    </div>

  

    <div class="container py-4">
        <div class="empowerment-section">
            <h2>Youth Empowerment</h2>
            <ol type="1">
                <li>
                    <strong>Skill Development</strong>
                    <p>Equip young people with vocational skills and technical training that enhance their employability and entrepreneurial potential.</p>
                </li>
                <li>
                    <strong>Leadership Programs</strong>
                    <p>Foster leadership qualities through workshops, mentorship, and community engagement, empowering youth to become future leaders and change-makers.</p>
                </li>
                <li>
                    <strong>Job Placement Assistance</strong>
                    <p>Provide job placement services and career counseling to help youth transition smoothly into the workforce, ensuring a stable livelihood.</p>
                </li>
                <li>
                    <strong>Youth Advocacy</strong>
                    <p>Encourage youth participation in civic activities and policy-making processes, giving them a voice in shaping a better and more inclusive future.</p>
                </li>
            </ol>
        </div>
    </div>

    <div class="container py-4">
        <div>
            <h2>Women Empowerment</h2>
            <ol type="1">
                <li>
                    <strong>Economic Independence</strong>
                    <p>Promote financial independence for women through microfinance initiatives, self-help groups, and entrepreneurship training, enabling them to become self-sufficient.</p>
                </li>
                <li>
                    <strong>Education and Training</strong>
                    <p>Ensure access to education and vocational training for women to help them develop new skills, increase their income potential, and improve their socioeconomic status.</p>
                </li>
                <li>
                    <strong>Health and Wellness</strong>
                    <p>Provide health education and services focused on women’s health issues, including reproductive health, maternal care, and nutrition.</p>
                </li>
                <li>
                    <strong>Legal Awareness</strong>
                    <p>Raise awareness about women’s rights and provide legal assistance to those affected by domestic violence, discrimination, or injustice.</p>
                </li>
            </ol>
        </div>
    </div>

    <div class="container py-4">
        <div class="empowerment-section">
            <h2>Rural Empowerment</h2>
            <ol type="1">
                <li>
                    <strong>Agricultural Support</strong>
                    <p>Improve agricultural productivity by promoting sustainable farming practices, providing access to modern technology, and offering farmer training programs.</p>
                </li>
                <li>
                    <strong>Infrastructure Development</strong>
                    <p>Enhance rural infrastructure, including access to clean water, sanitation, reliable electricity, and transportation, to improve the quality of life in rural areas.</p>
                </li>
                <li>
                    <strong>Community Development</strong>
                    <p>Establish community centers that offer educational, healthcare, and vocational training programs, fostering a sense of community and improving overall well-being.</p>
                </li>
                <li>
                    <strong>Income Generation</strong>
                    <p>Create diverse income opportunities beyond agriculture, such as small-scale businesses and entrepreneurship, to reduce dependency and ensure economic stability.</p>
                </li>
            </ol>
        </div>
    </div>


    <div class="container py-4">
        <div class="empowerment-section">
            <h2>Environmental Help</h2>
            <ol>
                <li>
                    <strong>Conservation Projects</strong>
                    <p>Implement projects that conserve natural resources, protect biodiversity, and restore ecosystems that are critical to environmental sustainability.</p>
                </li>
                <li>
                    <strong>Sustainable Practices</strong>
                    <p>Promote eco-friendly and sustainable agricultural, industrial, and everyday practices that minimize environmental damage and promote a green future.</p>
                </li>
                <li>
                    <strong>Climate Change Awareness</strong>
                    <p>Educate communities about the effects of climate change and encourage proactive measures to mitigate its impacts on the environment and people’s livelihoods.</p>
                </li>
                <li>
                    <strong>Waste Management</strong>
                    <p>Establish waste management systems in communities that prioritize recycling, reduce pollution, and ensure the sustainable disposal of waste.</p>
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="empowerment-section">
            <h2>Education Empowerment</h2>
            <ol type="1">
                <li>
                    <strong>Access to Quality Education</strong>
                    <p>Ensure that every child has access to quality education by building schools, offering scholarships, and supplying necessary educational materials.</p>
                </li>
                <li>
                    <strong>Teacher Training</strong>
                    <p>Enhance the quality of education through continuous professional development programs for teachers, improving their teaching methods and knowledge.</p>
                </li>
                <li>
                    <strong>Adult Literacy Programs</strong>
                    <p>Provide literacy programs for adults who missed out on formal education, empowering them with basic skills to improve their lives and economic opportunities.</p>
                </li>
                <li>
                    <strong>Inclusive Education</strong>
                    <p>Promote inclusive education practices and policies that ensure all children, including those with disabilities, receive quality education in supportive environments.</p>
                </li>
            </ol>
        </div>
    </div>
  
    <div class="container py-4">
        <div class="empowerment-section">
            <h2>Health Empowerment</h2>
            <ol type="1">
                <li>
                    <strong>Healthcare Access</strong>
                    <p>Provide access to essential healthcare services, particularly in underserved and remote areas, through health camps and mobile clinics.</p>
                </li>
                <li>
                    <strong>Health Education</strong>
                    <p>Conduct health education campaigns focused on preventive healthcare, proper nutrition, hygiene practices, and overall well-being.</p>
                </li>
                <li>
                    <strong>Disease Prevention and Control</strong>
                    <p>Implement programs to control and prevent both communicable and non-communicable diseases, improving public health and safety.</p>
                </li>
                <li>
                    <strong>Mental Health Support</strong>
                    <p>Promote mental health awareness, reduce stigma, and provide support services for individuals facing mental health challenges to improve their quality of life.</p>
                </li>
            </ol>
        </div>
    </div>
   
    <!-- background_image slider -->
    <div id="backgroundSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active carousel_items">
            <div class="carousel-image" style="background-image: url('https://images.pexels.com/photos/443446/pexels-photo-443446.jpeg');" data-bs-interval="1000"></div>
        </div>
        <div class="carousel-item carousel_items">
            <div class="carousel-image" style="background-image: url('https://m.media-amazon.com/images/I/A130976N98L.png');" data-bs-interval="1000"></div>
        </div>
        <div class="carousel-item  carousel_items" data-bs-interval="1000">
            <div class="carousel-image" style="background-image: url('https://w0.peakpx.com/wallpaper/311/206/HD-wallpaper-spring-beauty-landscap-colors-of-nature-high-quality-animal-graphy-splendor-wild-greeny-flowers-beauty-forest-colors-birds-spring-sky-sounds-plants-garden-nature-branches.jpg');" data-bs-interval="1000"></div>
        </div>
    </div>
</div>
    <!-- background_image slider -->


<!-- heading title 2 -->
<div class="container">
    <div class="title-container">
        <h1 class="title-text">Your Amazing <span>Title<span></h1>
        <div class="title-line"></div>
    </div>
</div>

<!-- heading title 2 -->

<!-- cards 2 -->

<div class="container py-5">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="icon-card">
                    <div class="icon-circle"><i class="fas fa-code"></i></div>
                    <h5 class="text-white">Web Development</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="icon-card">
                    <div class="icon-circle"><i class="fas fa-paint-brush"></i></div>
                    <h5 class="text-white">UI/UX Design</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="icon-card">
                    <div class="icon-circle"><i class="fas fa-database"></i></div>
                    <h5 class="text-white">Database Management</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="icon-card">
                    <div class="icon-circle"><i class="fas fa-mobile-alt"></i></div>
                    <h5 class="text-white">Mobile App Development</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
    <h2 class="tag-heading">
        <span class="tag-button">
            Creative Tag <i class="fas fa-star tag-icon"></i>
        </span>
    </h2>
</div>

<!-- cards 2 -->


<!-- heading title 3 -->
<div class="container mt-5">
    <div class="title-container">
        <h1 class="title-text">Your Amazing <span>Title<span></h1>
        <div class="title-line"></div>
    </div>
</div>

<!-- heading title 3 -->


<!-- swiper carousel -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div> 
  
  <div class="container text-center">
    <h2 class="tag-heading">
        <span class="tag-button">
            Creative Tag <i class="fas fa-star tag-icon"></i>
        </span>
    </h2>
</div>
<!-- swiper carousel -->


<!-- heading title 4 -->
<div class="container mt-5">
    <div class="title-container">
        <h1 class="title-text">Your Amazing <span>Title<span></h1>
        <div class="title-line"></div>
    </div>
</div>

<!-- heading title 4 -->

<!-- card4 -->
<div class="container mt-5">
        <div class="row g-4">
        <div class="col-md-3 col-sm-6 mb-4">
                <div class="card card_sets_design">
                    <div class="icon-containers">
                        <i class="fas fa-user"></i>
                    </div>
                    <h5 class="card-title">User Profile</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card card_sets_design">
                    <div class="icon-containers">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h5 class="card-title">Shopping Cart</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card card_sets_design">
                    <div class="icon-containers">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h5 class="card-title">Settings</h5>
                </div>
            </div>
               <div class="col-md-3 col-sm-6 mb-4">
                <div class="card card_sets_design">
                    <div class="icon-containers">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5 class="card-title">Messages</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center mt-3">
    <h2 class="tag-heading">
        <span class="tag-button">
            Creative Tag <i class="fas fa-star tag-icon"></i>
        </span>
    </h2>
</div>
<!-- card4 -->
<div class="container mt-5">
    <div class="title-container">
        <h1 class="title-text">Your Amazing <span>Title<span></h1>
        <div class="title-line"></div>
    </div>
</div>

<div class="container mt-5" id="card_flow">
    <div class="row justify-content-center">
        <div class="col-md-2 col-sm-4 col-6">
            <div class="card card_sets_design text-center" id="grid_margin">
                <div class="icon-containers">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h5 class="card-title">Marketing</h5>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <div class="card card_sets_design text-center" id="grid_margin">
                <div class="icon-containers">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h5 class="card-title">Marketing</h5>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <div class="card card_sets_design text-center" id="grid_margin">
                <div class="icon-containers">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h5 class="card-title">Analytics</h5>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <div class="card card_sets_design text-center" id="grid_margin">
                <div class="icon-containers">
                    <i class="fas fa-headset"></i>
                </div>
                <h5 class="card-title">Support</h5>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <div class="card card_sets_design text-center" id="grid_margin">
                <div class="icon-containers">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h5 class="card-title">Consulting</h5>
            </div>
        </div>
    </div>
</div>
<div class="container text-center mt-3">
    <h2 class="tag-heading">
        <span class="tag-button">
            Creative Tag <i class="fas fa-star tag-icon"></i>
        </span>
    </h2>
</div>

<!-- card5 -->

@include('partials.footer')