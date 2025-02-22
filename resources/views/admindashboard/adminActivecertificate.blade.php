
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
    <div class="container my-5">
  <h3 class="text-center mb-4">Active Generated Certificates</h3>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Certificate No</th>
          <th>Employee Name</th>
          <th>Department</th>
          <th>Issued Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>CERT-001</td>
          <td>John Doe</td>
          <td>HR</td>
          <td>2025-02-20</td>
          <td><span class="badge badge-success">Active</span></td>
          <td class="btn-group">
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-success">Download</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>CERT-002</td>
          <td>Jane Smith</td>
          <td>Finance</td>
          <td>2025-02-18</td>
          <td><span class="badge badge-success">Active</span></td>
          <td class="btn-group">
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-success">Download</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <!-- More rows can be added -->
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


