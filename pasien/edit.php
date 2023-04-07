<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_POST['id'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_pasien WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="pasien/proses.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input name="nik" type="text" class="form-control" required value="<?= $data['nik']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pasien</label>
                                        <input name="nama_pasien" type="text" class="form-control" required value="<?= $data['nama_pasien']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="date" class="form-control" required value="<?= $data['tanggal_lahir']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Suami</label>
                                        <input name="nama_suami" type="text" class="form-control" required value="<?= $data['nama_suami']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir Suami</label>
                                        <input name="tanggal_lahir_suami" type="date" class="form-control" required value="<?= $data['tanggal_lahir_suami']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input name="alamat" type="text" class="form-control" required value="<?= $data['alamat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>KTP</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="lampiran_ktp" name="lampiran_ktp">
                                            <label class="custom-file-label" for="customFile"></label>
                                        </div>
                                        <small class="form-text text-muted">File pdf dan MAX 5MB</small>
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                    <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>