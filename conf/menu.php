<body>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="p-4 d-flex justify-content-center">
        <img src="assets/img/logo1.jpg" class="" style="height: 150px; object-fit: cover; border-radius: 50%;" alt="...">
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="beranda.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <?php if ($_SESSION['level'] == 'Admin') : ?>
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Data Master</span>
            </h6>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="bidan.php">
                  <i class="fa fa-users text-orange"></i>
                  <span class="nav-link-text">Data Bidan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jenis_imunisasi.php">
                  <i class="fa fa-users text-orange"></i>
                  <span class="nav-link-text">Data Jenis Imunisasi</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="obat.php">
                  <i class="fa fa-chalkboard-teacher text-yellow"></i>
                  <span class="nav-link-text">Data Obat</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user.php">
                  <i class="fa fa-chart-line text-default"></i>
                  <span class="nav-link-text">Data User</span>
                </a>
              </li>
            </ul>
          <?php endif; ?>

          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Data Pengunjung</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="pasien.php">
                <i class="fa fa-users text-orange"></i>
                <span class="nav-link-text">Data Pasien</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bayi.php">
                <i class="fa fa-chalkboard-teacher text-yellow"></i>
                <span class="nav-link-text">Data Bayi</span>
              </a>
            </li>
          </ul>


          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Transaksi Data</span>
          </h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="kehamilan.php">
                <i class="fa fa-user-tie text-primary"></i>
                <span class="nav-link-text">Kehamilan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bersalin.php">
                <i class="fa fa-user-tie text-primary"></i>
                <span class="nav-link-text">Bersalin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kb.php">
                <i class="fa fa-user-tie text-primary"></i>
                <span class="nav-link-text">KB</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="imunisasi.php">
                <i class="fa fa-user-tie text-primary"></i>
                <span class="nav-link-text">Imunisasi</span>
              </a>
            </li>
          </ul>

          <?php if ($_SESSION['level'] == "Admin") : ?>
            <hr class="my-3">
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Laporan</span>
            </h6>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="bidan.php?cetak">
                  <i class="ni ni-bullet-list-67 text-warning"></i>
                  <span class="nav-link-text">Bidan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="obat.php?cetak">
                  <i class="ni ni-bullet-list-67 text-primary"></i>
                  <span class="nav-link-text">Obat</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pasien.php?cetak">
                  <i class="ni ni-bullet-list-67 text-warning"></i>
                  <span class="nav-link-text">Pasien</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bayi.php?cetak">
                  <i class="ni ni-bullet-list-67 text-yellow"></i>
                  <span class="nav-link-text">Bayi</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bersalin.php?cetak">
                  <i class="ni ni-bullet-list-67 text-info"></i>
                  <span class="nav-link-text">Bersalin</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="imunisasi.php?cetak">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Imunisasi</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kehamilan.php?cetak">
                  <i class="ni ni-bullet-list-67 text-primary"></i>
                  <span class="nav-link-text">Kehamilan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jenis_imunisasi.php?cetak">
                  <i class="ni ni-bullet-list-67 text-primary"></i>
                  <span class="nav-link-text">Jenis Imunisasi</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kb.php?cetak">
                  <i class="ni ni-bullet-list-67 text-primary"></i>
                  <span class="nav-link-text">Kb</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="keuangan.php?cetak">
                  <i class="ni ni-bullet-list-67 text-primary"></i>
                  <span class="nav-link-text">Keuangan</span>
                </a>
              </li>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
  <div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <h3></h3>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <!-- <img alt="Image placeholder" src="assets/img/theme/bootstrap.jpg"> -->
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right ">
                <a href="conf/logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>