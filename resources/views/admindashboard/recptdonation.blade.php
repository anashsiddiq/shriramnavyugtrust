
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
  <h3 class="text-center mb-4">Recipt Dontation Data</h3>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>User ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Department</th>
          <th>Role</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- User Row 1 -->
        <tr>
          <td>1</td>
          <td>USR-001</td>
          <td>John Doe</td>
          <td>johndoe@example.com</td>
          <td>+1234567890</td>
          <td>HR</td>
          <td>Manager</td>
          <td><span class="badge badge-success">Active</span></td>
          <td>
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <!-- User Row 2 -->
        <tr>
          <td>2</td>
          <td>USR-002</td>
          <td>Jane Smith</td>
          <td>janesmith@example.com</td>
          <td>+9876543210</td>
          <td>Finance</td>
          <td>Analyst</td>
          <td><span class="badge badge-secondary">Inactive</span></td>
          <td>
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <!-- Add more users as needed -->
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


