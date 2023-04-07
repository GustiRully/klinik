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
                          
                            $sql = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id='$id'");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="transaksi/proses.php" enctype="multipart/form-data">
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
                                        <label>Jenis layanan</label>
                                        <input name="jenis_layanan" type="text" class="form-control" required value="<?= $row['jenis_layanan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input name="tanggal" type="date" class="form-control" required value="<?= $row['tanggal'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Ketrangan</label>
                                        <input name="keterangan" type="text" class="form-control" required value="<?= $row['keterangan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Biaya</label>
                                        <input name="total_biaya" type="number" class="form-control" required value="<?= $row['total_biaya'] ?>">
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                    <button type="submit" class="btn btn-primary" name="update">Simpan</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>