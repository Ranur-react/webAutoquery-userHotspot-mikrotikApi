 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url(''); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Queue System <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url(''); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU xINPUT 
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>PASIEN</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Option's</h6>
            <a class="collapse-item" href="<?php echo site_url('Pasien/baruditambah'); ?>">Registrasi</a>
            <a class="collapse-item" href="<?php echo site_url('Pasien'); ?>">List Pasien</a>
            
              <a class="collapse-item" href="#"><i class="fas fa-download fa-sm"></i> View Report</a>
              <a class="collapse-item" href="#"><i class="fas fa-print fa-sm"></i> Print Report </a>
          </div>
        </div>
      </li>
      <!-- Laporan -->

  <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThre" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Antrian</span>
          </a>
          <div id="collapseThre" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Option's</h6>
              <a class="collapse-item" href="<?php echo site_url('Antrian'); ?>">List Antrian</a>
              <a class="collapse-item" href="buttons.html"><i class="fas fa-download fa-sm"></i> View Report</a>
              <a class="collapse-item" href="cards.html"><i class="fas fa-print fa-sm"></i> Print Report </a>
            </div>
          </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>ADMINISTRATOR</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Option's</h6>
            <a class="collapse-item" href="buttons.html">Account List</a>
            <a class="collapse-item" href="buttons.html">Add Account</a>
            <a class="collapse-item" href="cards.html">Cange Password</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Charts -->
   

      <!-- Nav Item - Tables -->
    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 " id="sidebarToggle"></button>
      </div>

    </ul>