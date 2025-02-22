@include('partials.header')
<link rel="stylesheet" href="{{ asset('css/donateus.css') }}">

<!-- headings 1 start -->
<div class="text-center bg-primary text-white mt-5 py-3 website_heading" id="pressmedia_margin">
        <h2 class="m-0">Donate  us</h2>
    </div>
 
<!-- headings 1 end -->

<div class="container mt-4">
<div class="title-line"></div>
</div>

<!-- cards -->
<div class="donate-form">
        <h2>Donate Us</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('donate.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount">Donation Amount</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-donate btn-block">Donate Now</button>
        </form>
    </div>

@include('partials.footer')