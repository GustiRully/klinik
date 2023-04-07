<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Klinik</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard" />
  <!--  Social tags      -->
  <!-- Favicon -->
  <link rel="icon" href="assets/img/logo1.jpg" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.min.css?v=1.2.0" type="text/css">
  <!-- Google Tag Manager -->

  <!-- End Google Tag Manager -->
</head>

<body class="bg-default">
  <div class="main-content">
    <form action="conf/register.php" method="post">
      <!-- Header -->
      <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
      <!-- Page content -->
      <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary border-0 mb-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <img src="assets/img/logo1.jpg" width="100px">
                  <h1>Selamat Datang!</h1>
                  <p class="text-lead">Silahkan Mendaftar untuk mengakses website.</p>
                </div>
                <form role="form">
                  <div class="form-group">
                  <label for="">Nama Lengkap</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input type="text" class="form-control" autocomplete="off" required name="nama" placeholder="Nama" value="<?= isset($_POST['submit']) ? $_POST['nama'] : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input type="date" class="form-control" autocomplete="off" required name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= isset($_POST['submit']) ? $_POST['tanggal_lahir'] : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Alamat</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input type="text" class="form-control" autocomplete="off" required name="alamat" placeholder="Alamat" value="<?= isset($_POST['submit']) ? $_POST['alamat'] : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">No Telepon</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input type="text" class="form-control" autocomplete="off" required name="no_telpon" placeholder="No Telepon" value="<?= isset($_POST['submit']) ? $_POST['no_telpon'] : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Tanggal Mulai Bekerja</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input type="date" class="form-control" autocomplete="off" required name="tmt" placeholder="Tanggal Mulai Bekerja"  value="<?= isset($_POST['submit']) ? $_POST['tmt'] : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Email</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input type="text" class="form-control" autocomplete="off" required name="email" placeholder="Email" value="<?= isset($_POST['submit']) ? $_POST['email'] : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group mb-3">
                  <label for="">Username</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input type="text" class="form-control" autocomplete="off" required name="username" placeholder="Username" value="<?= isset($_POST['submit']) ? $_POST['username'] : ''; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Password</label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input type="text" class="form-control" autocomplete="off" required name="password" placeholder="Password" value="<?= isset($_POST['submit']) ? $_POST['password'] : ''; ?>">
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span class="text-muted">Remember me</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary my-2">Register</button> <br>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.min.js?v=1.2.0"></script>
  </body>

  </html>