
<!-- add header -->

@include('UserDashDetail.headeruser')

<link rel="stylesheet" href="{{ asset('css/Memberships.css') }}">
  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <!-- /.content-header -->

    <!-- Main content -->

<div class="container table-container">
    <h2 class="mb-4 text-center">Membership Status</h2>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Member Name</th>
          <th>Membership Type</th>
          <th>Status</th>
          <th>Join Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>Premium</td>
          <td><span class="badge badge-active">Active</span></td>
          <td>2023-05-12</td>
          <td>
            <button class="btn btn-sm btn-primary btn-action">Edit</button>
            <button class="btn btn-sm btn-danger btn-action">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>Basic</td>
          <td><span class="badge badge-inactive">Inactive</span></td>
          <td>2022-11-08</td>
          <td>
            <button class="btn btn-sm btn-primary btn-action">Edit</button>
            <button class="btn btn-sm btn-danger btn-action">Delete</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Emily Johnson</td>
          <td>Standard</td>
          <td><span class="badge badge-pending">Pending</span></td>
          <td>2024-01-15</td>
          <td>
            <button class="btn btn-sm btn-primary btn-action">Edit</button>
            <button class="btn btn-sm btn-danger btn-action">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')

