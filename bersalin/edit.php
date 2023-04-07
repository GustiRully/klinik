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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bersalin WHERE id='$id'");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="bersalin/proses.php" enctype="multipart/form-data">
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
                                        <label>Tanggal Lahir</label>
                                        <input name="tgl_lahir" type="date" class="form-control" required value="<?= $row['tgl_lahir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Berat Badan</label>
                                        <input name="berat_badan" type="number" class="form-control" required value="<?= $row['berat_badan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Panjang Badan</label>
                                        <input name="panjang_badan" type="number" class="form-control" required value="<?= $row['panjang_badan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Lingkar Kepala</label>
                                        <input name="lingkar_kepala" type="number" class="form-control" required value="<?= $row['lingkar_kepala'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Lingkar Dada</label>
                                        <input name="lingkar_dada" type="number" class="form-control" required value="<?= $row['lingkar_dada'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option <?= $row['jenis_kelamin'] == "Laki-Laki" ? "selected" : "" ?> value="Laki-Laki">Laki-Laki</option>
                                            <option <?= $row['jenis_kelamin'] == "Perempuan" ? "selected" : "" ?> value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Anak ke</label>
                                        <input name="anak_ke" type="number" class="form-control" required value="<?= $row['anak_ke'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Vitamin K</label>
                                        <select name="vit_k" id="vit_k" class="form-control">
                                            <option <?= $row['vit_k'] == "Telah Diberikan" ? "selected" : "" ?> value="Telah Diberikan">Telah Diberikan</option>
                                            <option <?= $row['vit_k'] == "Belum Diberikan" ? "selected" : "" ?> value="Belum Diberikan">Belum Diberikan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>HB_0</label>
                                        <select name="HB_0" id="HB_0" class="form-control">
                                            <option <?= $row['HB_0'] == "Telah Diberikan" ? "selected" : "" ?> value="Telah Diberikan">Telah Diberikan</option>
                                            <option <?= $row['HB_0'] == "Belum Diberikan" ? "selected" : "" ?> value="Belum Diberikan">Belum Diberikan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Salep Mata</label>
                                        <select name="salep_mata" id="salep_mata" class="form-control">
                                            <option <?= $row['salep_mata'] == "Telah Diberikan" ? "selected" : "" ?> value="Telah Diberikan">Telah Diberikan</option>
                                            <option <?= $row['salep_mata'] == "Belum Diberikan" ? "selected" : "" ?> value="Belum Diberikan">Belum Diberikan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input name="keterangan" type="text" class="form-control" required value="<?= $row['keterangan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Biaya</label>
                                        <input name="biaya" type="text" class="form-control" required value="<?= $row['biaya'] ?>">
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