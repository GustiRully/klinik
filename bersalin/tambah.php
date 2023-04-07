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
                            <form id="basic-form" method="post" action="bersalin/proses.php">
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
                                    <label>Tanggal Lahir</label>
                                    <input name="tgl_lahir" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Berat Badan</label>
                                    <input name="berat_badan" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Panjang Badan</label>
                                    <input name="panjang_badan" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Lingkar Kepala</label>
                                    <input name="lingkar_kepala" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Lingkar Dada</label>
                                    <input name="lingkar_dada" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Anak ke</label>
                                    <input name="anak_ke" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Vitamin K</label>
                                    <select name="vit_k" id="vit_k" class="form-control">
                                        <option value="Telah Diberikan">Telah Diberikan</option>
                                        <option value="Belum Diberikan">Belum Diberikan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>HB_0</label>
                                    <select name="HB_0" id="HB_0" class="form-control">
                                        <option value="Telah Diberikan">Telah Diberikan</option>
                                        <option value="Belum Diberikan">Belum Diberikan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Salep Mata</label>
                                    <select name="salep_mata" id="salep_mata" class="form-control">
                                        <option value="Telah Diberikan">Telah Diberikan</option>
                                        <option value="Belum Diberikan">Belum Diberikan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input name="keterangan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Biaya</label>
                                    <input name="biaya" type="text" class="form-control" required>
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