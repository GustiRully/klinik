<?php
include 'conf/head.php';
include 'conf/menu.php';
?>
<div class="main-content" id="panel">
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7" >
                        <h1 style="color: white;">Selamat Datang <?= $_SESSION['level'] ?></h1>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <?php $result = $koneksi->query("SELECT COUNT(*) AS jml FROM data_bidan");
                    $row = $result->fetch_assoc(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Data Bidan</h5>
                                <h3 class="pt-3"><i class="fa fa-address-card"></i> <span class="counter"><?= $row['jml'] ?></span></h3>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <?php $result = $koneksi->query("SELECT COUNT(*) AS jml FROM users");
                    $row = $result->fetch_assoc(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Data User</h5>
                                <h3 class="pt-3"><i class="fa fa-address-card"></i> <span class="counter"><?= $row['jml'] ?></span></h3>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <?php $result = $koneksi->query("SELECT COUNT(*) AS jml FROM data_pasien");
                    $row = $result->fetch_assoc(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Data Pasien</h5>
                                <h3 class="pt-3"><i class="fa fa-address-card"></i> <span class="counter"><?= $row['jml'] ?></span></h3>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                    <i class="fa fa-user-tie"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <?php $result = $koneksi->query("SELECT COUNT(*) AS jml FROM data_bayi");
                    $row = $result->fetch_assoc(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Data Bayi</h5>
                                <h3 class="pt-3"><i class="fa fa-address-card"></i> <span class="counter"><?= $row['jml'] ?></span></h3>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                    <i class="fa fa-chart-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>    <br><br><br>    <br><br><br>    <br><br><br><br><br><br>
    <div class="container-fluid mt--6">
        <hr />
        <hr />
        <?php
        include 'conf/foot.php';
        ?>