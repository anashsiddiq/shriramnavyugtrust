
@include('admindashdetail.headeradmin')

<link rel="stylesheet" href="{{ asset('admin/dist/css/admindashboard.css') }}">
  <!-- Main Sidebar Container -->
   @include('admindashdetail.Slider')
    <!-- Main Sidebar Container -->

      <!-- Sidebar Menu -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="container my-5">
  <h3 class="text-center mb-4">User Details</h3>
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">John Doe <span class="badge badge-success ml-2">Active</span></h5>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="row" style="width: 30%;">User ID</th>
            <td>USR-001</td>
          </tr>
          <tr>
            <th scope="row">Full Name</th>
            <td>John Doe</td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td>johndoe@example.com</td>
          </tr>
          <tr>
            <th scope="row">Phone</th>
            <td>+1234567890</td>
          </tr>
          <tr>
            <th scope="row">Department</th>
            <td>Human Resources</td>
          </tr>
          <tr>
            <th scope="row">Role</th>
            <td>Manager</td>
          </tr>
          <tr>
            <th scope="row">Registration Date</th>
            <td>2025-02-20</td>
          </tr>
          <tr>
            <th scope="row">Status</th>
            <td><span class="badge badge-success">Active</span></td>
          </tr>
        </tbody>
      </table>

      <div class="text-center mt-4">
        <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
 

@include('admindashdetail.Script')


