
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
  <h3 class="text-center mb-4">Previous Details</h3>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Record ID</th>
          <th>User Name</th>
          <th>Description</th>
          <th>Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <!-- Record Row 1 -->
        <tr>
          <td>1</td>
          <td>REC-101</td>
          <td>John Doe</td>
          <td>Order for electronics</td>
          <td>2024-12-15</td>
          <td><span class="badge badge-success">Completed</span></td>
          <td>
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-success">Download</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <!-- Record Row 2 -->
        <tr>
          <td>2</td>
          <td>REC-102</td>
          <td>Jane Smith</td>
          <td>Service booking</td>
          <td>2024-11-30</td>
          <td><span class="badge badge-warning">Pending</span></td>
          <td>
            <button class="btn btn-sm btn-primary">View</button>
            <button class="btn btn-sm btn-success">Download</button>
            <button class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <!-- Add more records as needed -->
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


