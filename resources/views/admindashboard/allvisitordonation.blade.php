
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
    <h2 class="mb-4 text-center">All visior Dontation</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Joined Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Admin</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>2024-10-10</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>Member</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>2024-09-15</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mike Johnson</td>
                    <td>mike@example.com</td>
                    <td>Moderator</td>
                    <td><span class="badge bg-danger">Inactive</span></td>
                    <td>2024-08-05</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Emily Brown</td>
                    <td>emily@example.com</td>
                    <td>Member</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>2024-07-20</td>
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
