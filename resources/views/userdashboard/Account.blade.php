
<!-- add header -->

@include('UserDashDetail.headeruser')

<link rel="stylesheet" href="{{ asset('css/Account.css') }}">
  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="account-box">
    <h2>User Account Details</h2>

    <div class="table-responsive">
        <table class="table table-bordered account-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Admin</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>User</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mike Johnson</td>
                    <td>mike@example.com</td>
                    <td>Moderator</td>
                    <td><span class="badge bg-danger">Suspended</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Main content -->
      
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')

