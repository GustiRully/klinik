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
                            <form id="basic-form" method="post" action="kehamilan/proses.php">
                                <div class="form-group">
                                    <label>Pilih Pasien</label>
                                    <select name="id_pasien" id="id_pasien" class="form-control" required>
                                        <?php
                                        $sql = mysqli_query($koneksi, "SELECT * FROM data_pasien");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['nama_pasien'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Bidan</label>
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
                                    <label>Pilih Obat</label>
                                    <select name="id_obat" id="id_obat" class="form-control" required>
                                        <?php
                                        $sql = mysqli_query($koneksi, "SELECT * FROM data_obat");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['nama_obat'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Haid Terakhir</label>
                                    <input name="haid_terakhir" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Perkiraan Persalinan</label>
                                    <input name="perkiraan_persalinan" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Lingkaran Lengan Atas</label>
                                    <input name="lingkaran_lengan_atas" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Umur Kehamilan</label>
                                    <input name="umur_kehamilan" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tinggi Badan</label>
                                    <input name="tinggi_badan" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Hasil Pemeriksaan</label>
                                    <input name="hasil_pemeriksaan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Denyut Jantung Janin</label>
                                    <input name="denyut_jantung_janin" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Berat Badan</label>
                                    <input name="berat_badan" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tekanan Darah</label>
                                    <input name="tekanan_darah" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Keluhan</label>
                                    <input name="keluhan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Biaya</label>
                                    <input name="biaya" type="number" class="form-control" required>
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