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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_kehamilan WHERE id='$id'");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="kehamilan/proses.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Pilih Pasien</label>
                                        <select name="id_pasien" id="id_pasien" class="form-control" required>
                                            <?php
                                            $sql = mysqli_query($koneksi, "SELECT * FROM data_pasien");
                                            while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                                <?php if ($data['id'] == $row['id_pasien']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama_pasien'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_pasien'] ?></option>
                                                <?php endif; ?>
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
                                                <?php if ($data['id'] == $row['id_pasien']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama_bidan'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_bidan'] ?></option>
                                                <?php endif; ?>
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
                                                <?php if ($data['id'] == $row['id_pasien']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama_obat'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_obat'] ?></option>
                                                <?php endif; ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Haid Terakhir</label>
                                        <input name="haid_terakhir" type="date" class="form-control" required value="<?= $row['haid_terakhir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Perkiraan Persalinan</label>
                                        <input name="perkiraan_persalinan" type="date" class="form-control" required value="<?= $row['perkiraan_persalinan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Lingkaran Lengan Atas</label>
                                        <input name="lingkaran_lengan_atas" type="number" class="form-control" required value="<?= $row['lingkaran_lengan_atas'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Umur Kehamilan</label>
                                        <input name="umur_kehamilan" type="number" class="form-control" required value="<?= $row['umur_kehamilan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tinggi Badan</label>
                                        <input name="tinggi_badan" type="number" class="form-control" required value="<?= $row['tinggi_badan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Hasil Pemeriksaan</label>
                                        <input name="hasil_pemeriksaan" type="text" class="form-control" required value="<?= $row['hasil_pemeriksaan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Denyut Jantung Janin</label>
                                        <input name="denyut_jantung_janin" type="text" class="form-control" required value="<?= $row['denyut_jantung_janin'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Berat Badan</label>
                                        <input name="berat_badan" type="number" class="form-control" required value="<?= $row['berat_badan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tekanan Darah</label>
                                        <input name="tekanan_darah" type="number" class="form-control" required value="<?= $row['tekanan_darah'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Keluhan</label>
                                        <input name="keluhan" type="text" class="form-control" required value="<?= $row['keluhan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Biaya</label>
                                        <input name="biaya" type="number" class="form-control" required value="<?= $row['biaya'] ?>">
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                    <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>