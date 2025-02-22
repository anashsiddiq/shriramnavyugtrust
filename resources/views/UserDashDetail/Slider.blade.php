

<!-- add header -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
  <div class="image">
    <img src="https://shriramnavyugtrust.org/software/websiteLogoImages/1737270034.png" 
         class="img-circle elevation-2" alt="User Image">
  </div>
  <p class="text-white mt-2 ms-3 text_heading">Welcome to the Dashboard</p>
</div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
           <a href="{{ route('apply.membership') }}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
             Applying for Membership
             <i class="fas fa-angle-left right"></i>
             </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ route('membership.status') }}" class="nav-link">
    <i class="nav-icon fas fa-chart-pie"></i>
    <p>
        Membership Status
        <i class="right fas fa-angle-left"></i>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('appointment.letter') }}" class="nav-link">
    <i class="nav-icon fas fa-tree"></i>
    <p>
        Appointment Letter
        <i class="fas fa-angle-left right"></i>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('certificate.index') }}" class="nav-link">
    <i class="nav-icon fas fa-edit"></i>
    <p>
        Our Certificate
        <i class="fas fa-angle-left right"></i>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('profile.edit') }}" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
        Update Profile
        <i class="fas fa-angle-left right"></i>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('account.index') }}" class="nav-link">
    <i class="nav-icon far fa-envelope"></i>
    <p>
        Account
        <i class="fas fa-angle-left right"></i>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('donate.now') }}" class="nav-link">
    <i class="nav-icon fas fa-book"></i>
    <p>
        Donate Now
        <i class="fas fa-angle-left right"></i>
    </p>
</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               Receipt
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             </li>
              <li class="nav-item">
              <a href="{{ route('membership.payment') }}" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Membership Payment</p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('donation.payment.status') }}" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Donation Payment Status</p>
</a>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
