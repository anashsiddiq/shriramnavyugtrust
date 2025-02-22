
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
    <h2 class="mb-4 text-center">Certificate Details</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Employee Name</th>
                    <th>Employee ID</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Issued Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>EMP001</td>
                    <td>IT</td>
                    <td>Software Engineer</td>
                    <td>2024-10-15</td>
                    <td><span class="badge bg-success">Generated</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-success">Download</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>EMP002</td>
                    <td>HR</td>
                    <td>HR Manager</td>
                    <td>2024-09-20</td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-success" disabled>Download</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mike Johnson</td>
                    <td>EMP003</td>
                    <td>Finance</td>
                    <td>Accountant</td>
                    <td>2024-08-10</td>
                    <td><span class="badge bg-success">Generated</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary">View</button>
                        <button class="btn btn-sm btn-success">Download</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Emily Brown</td>
                    <td>EMP004</td>
                    <td>Marketing</td>
                    <td>Marketing Specialist</td>
                    <td>2024-07-30</td>
                    <td><span class="badge bg-danger">Cancelled</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" disabled>View</button>
                        <button class="btn btn-sm btn-secondary" disabled>Download</button>
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


