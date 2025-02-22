
@include('admindashdetail.headeradmin')

<link rel="stylesheet" href="{{ asset('admin/dist/css/admindashboard.css') }}">

<style>
    /* Center the form */
    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f0f2f5;
      padding: 20px;
    }

    /* Certification Form */
    .cert-form {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 600px;
      margin-bottom: 40px;
    }

    .cert-form h3 {
      text-align: center;
      margin-bottom: 20px;
      color: #007bff;
    }

    /* Certificate Template */
    .certificate {
      width: 100%;
      max-width: 800px;
      padding: 30px;
      border: 10px solid #007bff;
      border-radius: 15px;
      background-color: #fff;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .certificate h2 {
      font-size: 32px;
      color: #333;
      margin-bottom: 10px;
    }

    .certificate h4 {
      font-size: 24px;
      margin: 10px 0;
    }

    .certificate p {
      font-size: 18px;
      color: #555;
    }

    .certificate .cert-footer {
      margin-top: 30px;
      display: flex;
      justify-content: space-between;
      padding: 0 50px;
    }

    .cert-footer .issuer, .cert-footer .date {
      font-size: 16px;
      text-align: center;
    }

    /* Custom Button */
    .btn-custom {
      background-color: #28a745;
      color: #fff;
      width: 100%;
    }

    .btn-custom:hover {
      background-color: #218838;
    }
  </style>

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
    <div class="form-container">
  <!-- Certification Form -->
  <div class="cert-form">
    <h3>Generate Certificate</h3>
    <form id="certForm">
      <!-- Recipient Name -->
      <div class="form-group">
        <label for="recipientName">Recipient Name</label>
        <input type="text" class="form-control" id="recipientName" placeholder="Enter recipient's name" required>
      </div>

      <!-- Course Title -->
      <div class="form-group">
        <label for="courseTitle">Course Title</label>
        <input type="text" class="form-control" id="courseTitle" placeholder="Enter course title" required>
      </div>

      <!-- Date -->
      <div class="form-group">
        <label for="certDate">Date</label>
        <input type="date" class="form-control" id="certDate" required>
      </div>

      <!-- Issuer Name -->
      <div class="form-group">
        <label for="issuerName">Issuer Name</label>
        <input type="text" class="form-control" id="issuerName" placeholder="Enter issuer's name" required>
      </div>

      <!-- Generate Button -->
      <button type="submit" class="btn btn-custom">Generate Certificate</button>
    </form>
  </div>

  <!-- Certificate Template -->
  <div class="certificate" id="certificate" style="display: none;">
    <h2>Certificate of Completion</h2>
    <p>This is to certify that</p>
    <h4 id="certRecipient">[Recipient Name]</h4>
    <p>has successfully completed the course</p>
    <h4 id="certCourse">[Course Title]</h4>
    <div class="cert-footer">
      <div class="issuer">
        <p>Issued By</p>
        <h5 id="certIssuer">[Issuer Name]</h5>
      </div>
      <div class="date">
        <p>Date</p>
        <h5 id="certDateText">[Date]</h5>
      </div>
    </div>
  </div>
</div>

    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<script>
  // Handle Form Submission
  document.getElementById('certForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Get Form Data
    const recipient = document.getElementById('recipientName').value;
    const course = document.getElementById('courseTitle').value;
    const date = document.getElementById('certDate').value;
    const issuer = document.getElementById('issuerName').value;

    // Populate Certificate
    document.getElementById('certRecipient').textContent = recipient;
    document.getElementById('certCourse').textContent = course;
    document.getElementById('certDateText').textContent = date;
    document.getElementById('certIssuer').textContent = issuer;

    // Display Certificate
    document.getElementById('certificate').style.display = 'block';
  });
</script>
 

@include('admindashdetail.Script')


