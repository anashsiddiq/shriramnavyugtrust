
<!-- add header -->

@include('UserDashDetail.headeruser')

<link rel="stylesheet" href="{{ asset('css/updateprofile.css') }}">
  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container m-4">
    <h2>Update Profile</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>

    <!-- Main content -->
      
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')
