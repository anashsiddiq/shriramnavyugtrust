
<!-- add header -->

@include('UserDashDetail.headeruser')

  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


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
    <div class="container">
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-blue">
                <div class="icon-container">
                    <i class="fas fa-users"></i>
                </div>
                <h5>Users</h5>
                <p>Manage all users</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-green">
                <div class="icon-container">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h5>Orders</h5>
                <p>View and manage orders</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-orange">
                <div class="icon-container">
                    <i class="fas fa-box"></i>
                </div>
                <h5>Products</h5>
                <p>Manage product listings</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-red">
                <div class="icon-container">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h5>Analytics</h5>
                <p>View site analytics</p>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 ">
        <div class="table-container">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
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
                        <td><span class="badge bg-danger">Inactive</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Michael Brown</td>
                        <td>michael@example.com</td>
                        <td>Editor</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Emily Davis</td>
                        <td>emily@example.com</td>
                        <td>Contributor</td>
                        <td><span class="badge bg-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>William Johnson</td>
                        <td>william@example.com</td>
                        <td>User</td>
                        <td><span class="badge bg-secondary">Banned</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')

