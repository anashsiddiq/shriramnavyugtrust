

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
  <div class="image">
    <img src="https://shriramnavyugtrust.org/software/websiteLogoImages/1737270034.png" 
         class="img-circle elevation-2" alt="User Image">
  </div>
  <p class="text-white mt-2 ms-3 text_heading" id="heading_left">Welcome to the Dashboard</p>
</div>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ url('/new-membership') }}" class="nav-link">
    <i class="fa-solid fa-address-card"></i>
    <p class="left_shift">
        New Membership
        <span class="right badge badge-danger">83</span>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('admin.activemembership') }}" class="nav-link">
    <i class="fa-solid fa-users"></i>
    <p class="left_shift">
        Active Membership
        <span class="right badge badge-danger">64</span>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('admin.generatecertificate') }}" class="nav-link">
    <i class="fa-solid fa-circle"></i>
    <p class="left_shift">
        Generate Certificate
        <span class="right badge badge-danger">123</span>
    </p>
</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('admin.activecertificate') }}" class="nav-link">
    <i class="fa-solid fa-trophy"></i>
    <p class="left_shift">
        Active Certificate
        <span class="right badge badge-danger">173</span>
    </p>
</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-list-check"></i>
            <p class="left_shift">
                Send Notification
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('admin.sendsingleuser') }}" class="nav-link">
    <i class="fa-solid fa-user-tie"></i>
    <p class="left_shift">
        Send to Single User
        <span class="badge badge-info right">6</span>
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.sendallusers') }}" class="nav-link">
    <i class="fa-solid fa-user-group"></i>
    <p class="left_shift">
        Send to All Users
        <span class="badge badge-info right">6</span>
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.previousnotice') }}" class="nav-link">
    <i class="fa-solid fa-comment-sms"></i>
    <p class="left_shift">
        Previous Notice 
        <span class="badge badge-info right">6</span>
    </p>
</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a href="{{ route('admin.activeusers') }}" class="nav-link">
    <i class="fa-solid fa-id-card"></i>
    <p class="left_shift">
        Active User Data
        <span class="right badge badge-danger">93</span>
    </p>
</a>
          </li>

          <li class="nav-item">
          <a href="{{ route('admin.blockusers') }}" class="nav-link">
    <i class="fa-solid fa-ban"></i>
    <p class="left_shift">
        Block User
        <span class="right badge badge-danger">93</span>
    </p>
</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-circle-user"></i>
            <p class="left_shift">
                Manager Section
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('admin.addmanager') }}" class="nav-link">
    <i class="fa-solid fa-user-plus"></i>
    <p class="left_shift">
        Add Manager
        <span class="badge badge-info right">6</span>
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.activemanagers') }}" class="nav-link">
    <i class="fa-solid fa-user-tag"></i>
    <p class="left_shift">
        Active Manager
        <span class="badge badge-info right">{{ $managersCount ?? 6 }}</span> <!-- You can dynamically pass count -->
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.blockmanagers') }}" class="nav-link">
    <i class="fa-solid fa-ban"></i>
    <p class="left_shift">
        Block Manager
        <span class="badge badge-info right">{{ $blockedManagersCount ?? 6 }}</span> <!-- Dynamic count -->
    </p>
</a>
              </li>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-money-bill-1-wave"></i>
            <p class="left_shift">
                Cash Dontation
                <i class="right fas fa-angle-left"></i>
                     <span class="right badge badge-danger">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('admin.receivedonations') }}" class="nav-link">
    <i class="fa-solid fa-user-xmark"></i>
    <p class="left_shift">
        Receive Donation
        <span class="right badge badge-info">{{ $donationsCount ?? 6 }}</span>
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.receipts') }}" class="nav-link">
    <i class="fa-solid fa-circle-check"></i>
    <p class="left_shift">
        Receipt
        <span class="right badge badge-info">6</span> <!-- Dynamic count -->
    </p>
</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-circle"></i>
            <p class="left_shift">
                Visitor Certificate
                <i class="fas fa-angle-left right"></i>
                     <span class="right badge badge-info">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('admin.generatecertificate') }}" class="nav-link">
    <i class="fa-solid fa-file-lines"></i>
    <p class="left_shift">
        Generate Certificate
        <span class="right badge badge-info">6</span>
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.certifications') }}" class="nav-link">
    <i class="fa-solid fa-circle-check"></i>
    <p class="left_shift">
        Certificate
        <span class="right badge badge-info">6</span>
    </p>
</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a href="{{ route('admin.visitordonation') }}" class="nav-link">
    <i class="fa-solid fa-shield-heart"></i>
    <p class="left_shift">
        Visitor Donation
        <span class="right badge badge-danger">93</span>
    </p>
</a>
</li>

            <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-scroll"></i>
            <p class="left_shift">
                All Recipt
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('admin.membershipreceipt') }}" class="nav-link">
    <i class="fa-solid fa-people-group"></i>
    <p class="left_shift">
        Membership Receipt
        <span class="badge badge-info right">6</span>
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.userdonationreceipt') }}" class="nav-link">
    <i class="fa-solid fa-money-bill-wave"></i>
    <p class="left_shift">
        User Donation Receipt
        <span class="badge badge-info right">6</span>
    </p>
</a>
              </li>
              <li class="nav-item">
              <a href="{{ route('admin.visitordonationreceipt') }}" class="nav-link">
    <i class="fa-solid fa-hand-holding-dollar"></i>
    <p class="left_shift">
        Visitor Donation Receipt
        <span class="badge badge-info right">6</span>
    </p>
</a>

              <li class="nav-item">
              <a href="{{ route('admin.cashdonationreceipt') }}" class="nav-link">
    <i class="fa-solid fa-money-bills"></i>
    <p class="left_shift">
        Cash Donation Receipt
        <span class="badge badge-info right">6</span>
    </p>
</a>
              </li>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-download"></i>
            <p class="left_shift">
                Recipt Download
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fa-solid fa-user-pen"></i>
                <p class="left_shift">
                    New Member
                       <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                <i class="fa-solid fa-check-to-slot"></i>
                <p class="left_shift">
                    Active Member
                       <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                <i class="fa-solid fa-users-between-lines"></i>
                <p class="left_shift">
                    Membership Recipt
                       <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                <p class="left_shift">
                    User Dontation Recipt
                       <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                <i class="fa-solid fa-file-invoice"></i>
                <p class="left_shift">
                    visitor Dontation Recipt
                       <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>