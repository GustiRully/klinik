<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data</h3>
                        </div>
                        <div class="card-body">
                            <form id="basic-form" method="post" action="pasien/proses.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input name="nik" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Pasien</label>
                                    <input name="nama_pasien" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="tanggal_lahir" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Suami</label>
                                    <input name="nama_suami" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Suami</label>
                                    <input name="tanggal_lahir_suami" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>KTP</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="lampiran_ktp" name="lampiran_ktp">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                    <small class="form-text text-muted">File pdf dan MAX 5MB</small>
                                    <?php if (isset($_SESSION['lampiran_ktp'])) : ?>
                                        <small class="form-text">
                                            <span class="text-danger"><?= $_SESSION['lampiran_ktp'] ?></span>
                                        </small>
                                        <?php unset($_SESSION["lampiran_ktp"]); ?>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>