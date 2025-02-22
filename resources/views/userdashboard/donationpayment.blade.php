
<!-- add header -->

@include('UserDashDetail.headeruser')

<link rel="stylesheet" href="{{ asset('css/donationpayment.css') }}">
  <!-- Main Sidebar Container -->
   @include('UserDashDetail.Slider')
    <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container mt-5">
    <h2 class="text-center mb-4">User Payment Receipt</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped payment-table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Receipt No</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Amount Paid</th>
                    <th>Payment Date</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Data -->
                <tr>
                    <td>1</td>
                    <td>RCPT-001</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>$100.00</td>
                    <td>2024-02-20</td>
                    <td>Credit Card</td>
                    <td><span class="badge badge-success">Completed</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>RCPT-002</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>$75.50</td>
                    <td>2024-02-19</td>
                    <td>PayPal</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>RCPT-003</td>
                    <td>David Brown</td>
                    <td>david@example.com</td>
                    <td>$50.00</td>
                    <td>2024-02-18</td>
                    <td>Bank Transfer</td>
                    <td><span class="badge badge-danger">Failed</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    <!-- Main content -->
      
<!-- ./wrapper -->
 
 <!-- add script -->
@include('UserDashDetail.Script')

