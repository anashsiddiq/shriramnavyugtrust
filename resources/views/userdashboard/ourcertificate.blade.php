
<!-- add header -->

@include('UserDashDetail.headeruser')

<link rel="stylesheet" href="{{ asset('css/ourcertificate.css') }}">
  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="search-container">
        <div class="search-box">
            <input type="text" class="form-control" placeholder="Search certificates...">
        </div>
    </div>

    <!-- Certificate Table -->
    <div class="certificate-table">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Employee Name</th>
                    <th>Certificate Title</th>
                    <th>Issued Date</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Employee of the Month</td>
                    <td>2024-01-15</td>
                    <td><a href="#" class="download-btn">Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>Excellence Award</td>
                    <td>2024-02-10</td>
                    <td><a href="#" class="download-btn">Download</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mike Johnson</td>
                    <td>Best Performer</td>
                    <td>2024-03-05</td>
                    <td><a href="#" class="download-btn">Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Main content -->
      
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')

