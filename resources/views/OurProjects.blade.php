@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/OurProjects.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="ourproject_margin">
        <h2 class="m-0">Our Projects</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>

</div>

<div class="container mt-4">
        <p class="lead">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima illo delectus, error fuga similique fugiat minus officia mollitia debitis nisi quia eius hic deleniti porro ratione earum, dolorum quibusdam quaerat? Saepe numquam molestias quas reprehenderit cum optio ipsum minus hic quam laudantium, ipsa ad iure. Aliquid nisi quam consectetur obcaecati?
        </p>
    </div>

<div class="container text-center mt-5">
        <a href="{{ route('contact') }}" class="custom-btn">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>

    <div class="container py-4 overflow-hidden">
        <div>
            <h2>Youth Empowerment</h2>
            <ol type="1">
                <li>
                    <strong>Skill Development Centers</strong>
                    <p>We have set up skill development centers in multiple regions, offering vocational training in areas such as IT, carpentry, tailoring, and more. These centers empower young people with the skills required to secure jobs or start their own businesses..</p>
                </li>
                <li>
                    <strong>Youth Leadership Program</strong>
                    <p>Through our Youth Leadership Program, we mentor young individuals to become future leaders in their communities. By focusing on confidence-building, communication skills, and leadership development, we aim to create impactful change-makers..</p>
                </li>
            </ol>
        </div>
    </div>
    <div class="container py-3 overflow-hidden">
        <div>
            <h2>Women Empowerment</h2>
            <ol type="1">
                <li>
                    <strong>Women’s Entrepreneurship Initiative</strong>
                    <p>This project offers women the resources and training they need to start and manage their own businesses. We provide micro-loans, business development support, and continuous mentorship to ensure their entrepreneurial success.</p>
                </li>
                <li>
                    <strong>Health and Wellness Camps for Women</strong>
                    <p>We organize health camps that focus on women’s health issues, such as reproductive health, maternal care, and nutrition. These camps provide essential healthcare services and health education to women in underserved communities.</p>
                </li>
            </ol>
        </div>
    </div>

    <div class="container py-3 overflow-hidden">
        <h2>Rural Empowerment</h2>
        <ol type="1">
            <li>
                <strong>Sustainable Agriculture Program</strong>
                <p>Our Sustainable Agriculture Program educates farmers on eco-friendly farming practices to increase crop yields while reducing environmental impact. We provide access to modern tools, seeds, and promote water conservation techniques.</p>
            </li>
            <li>
                <strong>Rural Infrastructure Development</strong>
                <p>We focus on building and improving essential infrastructure in rural areas, including clean water wells, sanitation facilities, and better roads for enhanced connectivity and quality of life.</p>
            </li>
        </ol>
    </div>

    <div class="container py-3 overflow-hidden">
        <h2>Environmental Help</h2>
        <ol type="1">
            <li>
                <strong>Tree Plantation Drives</strong>
                <p>We conduct tree plantation drives in both urban and rural areas to combat deforestation and promote environmental sustainability. Volunteers plant and nurture saplings to ensure the creation of a greener, healthier environment.</p>
            </li>
            <li>
                <strong>Community Waste Management Systems</strong>
                <p>Our waste management initiative sets up recycling and waste segregation systems in communities, educating people about responsible waste disposal and promoting sustainable environmental practices.</p>
            </li>
        </ol>
    </div>

    <div class="container py-3 overflow-hidden">
        <h2>Education Empowerment</h2>
        <ol type="1">
            <li>
                <strong>School Development Program</strong>
                <p>We build and renovate schools in underserved areas to provide children with a better learning environment. Our support includes supplying books, uniforms, and other essential educational materials to enhance their academic experience.</p>
            </li>
            <li>
                <strong>Adult Literacy Classes</strong>
                <p>Our Adult Literacy Classes aim to empower adults who missed out on formal education. By offering basic reading, writing, and arithmetic classes, we help adults improve their social and economic standing.</p>
            </li>
        </ol>
    </div>

    <div class="container py-3 overflow-hidden">
        <h2>Health Empowerment</h2>
        <ol type="1">
            <li>
                <strong>Mobile Health Clinics</strong>
                <p>We run Mobile Health Clinics that travel to remote areas, providing medical consultations, treatments, and medicines free of charge. This initiative ensures healthcare reaches even the most isolated communities.</p>
            </li>
            <li>
                <strong>Health Awareness Campaigns</strong>
                <p>We conduct extensive health awareness campaigns that educate communities on preventive healthcare, hygiene, and nutrition. These campaigns are aimed at promoting healthier lifestyles and reducing common health risks.</p>
            </li>
        </ol>
    </div>

    
@include('partials.footer')