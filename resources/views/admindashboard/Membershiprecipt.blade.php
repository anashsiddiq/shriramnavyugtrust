
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
    <div class="container table-container">
        <h1 class="text-center">Membership Recipt</h1>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Regis No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Actions</th>
          <th>Reg. Date</th>
          <th>Fee Details</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>John Doe</td>
          <td>john@example.com</td>
          <td>+1234567890</td>
          <td class="btn-group">
            <button class="btn btn-custom  btn-danger">Upload</button>
            <button class="btn btn-custom btn-info  pe-3">View</button>
            <button class="btn btn-custom btn-secondary">Verify Now</button>
          </td>
          <td>2025-02-20</td>
          <td>Paid</td>
          <td class="btn-group">
            <button class="btn btn-custom btn-success">Edit</button>
            <button class="btn btn-custom  btn-warning">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
 

@include('admindashdetail.Script')


