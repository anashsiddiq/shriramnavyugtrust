
<!-- add header -->

@include('UserDashDetail.headeruser')

<link rel="stylesheet" href="{{ asset('css/donateform.css') }}">
  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container mt-5">
    <div class="donation-container">
    <h2>Donate Now</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('donate.submit') }}" method="GET">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Donation Amount ($)</label>
            <input type="number" name="amount" class="form-control" placeholder="Enter donation amount" required min="1">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message (Optional)</label>
            <textarea name="message" class="form-control" rows="3" placeholder="Write a message..."></textarea>
        </div>

        <button type="submit" class="btn btn-success">Donate Now</button>
    </form>
</div>

    <!-- Main content -->
      
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')

