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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bidan WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="bidan/proses.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama Bidan</label>
                                        <input name="nama_bidan" type="text" class="form-control" required value="<?= $data['nama_bidan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>No Surat Izin</label>
                                        <input name="no_surat_izin" type="text" class="form-control" required value="<?= $data['no_surat_izin'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Lampiran Surat Izin</label>
                                        <input name="lampiran_surat_izin" type="file" class="form-control">
                                        <small class="form-text text-muted">File pdf dan MAX 5MB</small>    
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <input name="pendidikan_terakhir" type="text" class="form-control" required value="<?= $data['pendidikan_terakhir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Lapmiran Ijazah</label>
                                        <input name="lampiran_ijazah" type="file" class="form-control">
                                        <small class="form-text text-muted">File pdf dan MAX 5MB</small>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input name="tempat_lahir" type="text" class="form-control" value="<?= $data['tempat_lahir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="date" class="form-control" required value="<?= $data['tanggal_lahir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input name="alamat" type="text" class="form-control" required value="<?= $data['alamat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="nomor_telepon" type="text" class="form-control" required value="<?= $data['nomor_telepon'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>TMT</label>
                                        <input name="tmt" type="date" class="form-control" required value="<?= $data['tmt'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto">
                                            <label class="custom-file-label" for="customFile">Pilih File</label>
                                        </div>
                                        <small class="form-text text-muted">Ukuran file MAX 5MB</small>
                                    </div>
                                    <div class="form-group">
                                        <label>SK</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="sk" name="sk">
                                            <label class="custom-file-label" for="customFile">Pilih File</label>
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