
<!-- add header -->

@include('UserDashDetail.headeruser')

<link rel="stylesheet" href="{{ asset('css/memberpayment.css') }}">
  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="payment-container">
    <h2>Membership Payments</h2>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Member Name</th>
                <th>Email</th>
                <th>Amount ($)</th>
                <th>Status</th>
                <th>Payment Date</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td>$50</td>
                <td><span class="status-paid">Paid</span></td>
                <td>2025-02-01</td>
                <td><button class="btn btn-pay">View</button></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>janesmith@example.com</td>
                <td>$70</td>
                <td><span class="status-unpaid">Unpaid</span></td>
                <td>—</td>
                <td><button class="btn btn-pay">Pay Now</button></td>
            </tr>

            <tr>
                <td>3</td>
                <td>David Johnson</td>
                <td>davidj@example.com</td>
                <td>$100</td>
                <td><span class="status-paid">Paid</span></td>
                <td>2025-01-15</td>
                <td><button class="btn btn-pay">View</button></td>
            </tr>
        </tbody>
    </table>
</div>

    <!-- Main content -->
      
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')

