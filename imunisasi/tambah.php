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
                            <form id="basic-form" method="post" action="imunisasi/proses.php">
                                <div class="form-group">
                                    <label>Nama Bayi</label>
                                    <select name="id_bayi" id="id_bayi" class="form-control" required>
                                        <?php
                                        $sql = mysqli_query($koneksi, "SELECT * FROM data_bayi");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['nama_bayi'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bidan</label>
                                    <select name="id_bidan" id="id_bidan" class="form-control" required>
                                        <?php
                                        $sql = mysqli_query($koneksi, "SELECT * FROM data_bidan");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['nama_bidan'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Imunisasi</label>
                                    <select name="id_jenis_imunisasi" id="id_jenis_imunisasi" class="form-control" required>
                                        <?php
                                        $sql = mysqli_query($koneksi, "SELECT * FROM data_jenis_imunisasi");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['nama'] ?>|Rp. <?= number_format($data['biaya'],0,",","."); ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Waktu Pemberian</label>
                                    <input name="waktu_pemberian" type="date" class="form-control" required>
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