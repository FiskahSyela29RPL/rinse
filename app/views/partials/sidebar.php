<div class="container-fluid page-body-wrapper">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="<?=URLROOT; ?>/images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">David Grey. H</span>
            <span class="text-secondary text-small">Project Manager</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=URLROOT; ?>">
          <span class="menu-title">Home</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../pages/icons/mdi.html">
          <span class="menu-title">Transaksi</span>
          <i class="mdi mdi-plus-circle menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Pesanan</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-comment-check menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Konfirmasi</a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Penjemputan</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Antrian</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Proses</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Siap ambil</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Siap antar</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
          aria-controls="general-pages">
          <span class="menu-title">Laporan</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-tooltip-edit menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Laporan Keuangan </a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Laporan Transaksi </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Laporan Pegawai </a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> Laporan Pelanggan </a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> Export Data </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../pages/icons/mdi.html">
          <span class="menu-title">Akun</span>
          <i class="mdi mdi-account menu-icon"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
