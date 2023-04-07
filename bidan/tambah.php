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
                            <form id="basic-form" method="post" action="bidan/proses.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Bidan</label>
                                    <input name="nama_bidan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto Profile</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                    <small class="form-text text-muted">Ukuran file MAX 5MB</small>
                                    <?php if (isset($_SESSION['foto'])) : ?>
                                        <small class="form-text">
                                            <span class="text-danger"><?= $_SESSION['foto'] ?></span>
                                        </small>
                                        <?php unset($_SESSION["foto"]); ?>
                                    <?php endif; ?>

                                </div>
                                <div class="form-group">
                                    <label>No Surat Izin</label>
                                    <input name="no_surat_izin" type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Lampiran Surat Izin</label>
                                    <input name="lampiran_surat_izin" type="file" class="form-control" required>
                                    <small class="form-text text-muted">File pdf dan MAX 5MB</small>
                                    <?php if (isset($_SESSION['lampiran_surat_izin'])) : ?>
                                        <small class="form-text">
                                            <span class="text-danger"><?= $_SESSION['lampiran_surat_izin'] ?></span>
                                        </small>
                                        <?php unset($_SESSION["lampiran_surat_izin"]); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <input name="pendidikan_terakhir" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Lapmiran Ijazah</label>
                                    <input name="lampiran_ijazah" type="file" class="form-control" required>
                                    <small class="form-text text-muted">File pdf dan MAX 5MB</small>
                                    <?php if (isset($_SESSION['lampiran_ijazah'])) : ?>
                                        <small class="form-text">
                                            <span class="text-danger"><?= $_SESSION['lampiran_ijazah'] ?></span>
                                        </small>
                                        <?php unset($_SESSION["lampiran_ijazah"]); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="tanggal_lahir" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input name="nomor_telepon" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>TMT</label>
                                    <input name="tmt" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>SK</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="sk" name="sk">
                                        <label class="custom-file-label" for="customFile">Pilih File</label>
                                    </div>
                                    <small class="form-text text-muted">File pdf dan MAX 5MB</small>
                                    <?php if (isset($_SESSION['sk'])) : ?>
                                        <small class="form-text">
                                            <span class="text-danger"><?= $_SESSION['sk'] ?></span>
                                        </small>
                                        <?php  unset ($_SESSION["sk"]); ?>
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