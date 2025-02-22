@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/PrivercyAndPolicy.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="PrivercyAndPolicy">
        <h2 class="m-0">Privacy Policy</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>
</div>

<div class="container mt-5">
    <h4 >Privacy Policy</h4>
    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque expedita soluta, cumque quaerat, dignissimos numquam sequi ipsam molestias libero nostrum minus similique quidem possimus, facilis earum quam quis quasi aut commodi incidunt neque reprehenderit! Facere perspiciatis dolorum mollitia voluptas vero suscipit quod ex porro doloremque sed laborum deserunt incidunt sint saepe, maiores quia. Dolores, ipsum repudiandae consectetur optio ex cum? </p>
</div>

<div class="container mt-5">
        <div class="mb-4">
            <h4>1. Information We Collect</h4>
            <ul>
                <li><strong>Personal Information:</strong> Includes your name, email address, phone number, and any other information you provide when you contact us, make a donation, or register for our events or services.</li>
                <li><strong>Usage Data:</strong> We collect information about your interactions with our website, such as IP address, browser type, pages visited, and the time and date of your visit.</li>
                <li><strong>Cookies and Tracking Technologies:</strong> We use cookies and similar tracking technologies to enhance your experience on our website and collect data about your browsing behavior.</li>
            </ul>
        </div>
        
        <div class="mb-4">
            <h4>2. How We Use Your Information</h4>
            <ul>
                <li><strong>To Provide and Improve Our Services:</strong> To process donations, manage registrations, and respond to your inquiries or requests.</li>
                <li><strong>To Communicate with You:</strong> To send you updates, newsletters, and information about our programs, events, and initiatives.</li>
                <li><strong>To Analyze Website Usage:</strong> To monitor and analyze website performance and user behavior to improve our site and services.</li>
                <li><strong>To Ensure Security:</strong> To protect against unauthorized access, misuse, or fraud.</li>
            </ul>
        </div>
        
        <div class="mb-4">
            <h4>3. How We Share Your Information</h4>
            <ul>
                <li><strong>With Service Providers:</strong> We may share your information with third-party service providers who assist us in operating our website, processing payments, or managing communications.</li>
                <li><strong>For Legal Reasons:</strong> We may disclose your information if required by law or in response to legal processes or requests from law enforcement agencies.</li>
                <li><strong>With Your Consent:</strong> We may share your information with third parties if you provide explicit consent to do so.</li>
            </ul>
        </div>
        
        <div class="mb-4">
            <h4>4. Data Security</h4>
            <p>We implement reasonable administrative, technical, and physical measures to protect your personal information from unauthorized access, disclosure, or misuse. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>
        </div>
        
        <div class="mb-4">
            <h4>5. Your Rights and Choices</h4>
            <ul>
                <li><strong>Access and Correction:</strong> You have the right to access and correct your personal information held by us. You can request to update or delete your information by contacting us.</li>
                <li><strong>Opt-Out:</strong> You may opt-out of receiving promotional emails or communications from us by following the unsubscribe instructions in those communications or contacting us directly.</li>
            </ul>
        </div>
        
        <div class="mb-4">
            <h4>6. Children’s Privacy</h4>
            <p>Our website is not intended for use by children under the age of 13. We do not knowingly collect personal information from children under 13. If we become aware that we have collected such information, we will take steps to delete it.</p>
        </div>
        
        <div class="mb-4">
            <h4>7. Changes to This Privacy Policy</h4>
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. We will post any updates on this page and encourage you to review the policy periodically.</p>
        </div>
        
        <div class="mb-4">
            <h4>8. Contact Us</h4>
            <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us.</p>
            <p><strong>ShriRam Navyug Trust</strong></p>
        </div>
        <div class="mt-4">
             <p>Thank you for your trust in ShriRam Navyug Trust. We are committed to protecting your privacy and ensuring a positive experience on our website.</p>
        </div>
    </div>
    
<!-- cards -->
    <div class="container text-center mt-5">
        <a href="{{ route('contact') }}" class="custom-btn">
            <i class="fas fa-download"></i> Contact Us
        </a>
    </div>

@include('partials.footer')