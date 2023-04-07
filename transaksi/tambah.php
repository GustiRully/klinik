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
                            <form id="basic-form" method="post" action="transaksi/proses.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="id_pasien">Nama Pasien</label>
                                    <select class="form-control" id="id_pasien" name="id_pasien">
                                        <option disabled selected>pilih Pasien</option>
                                        <?php
                                        $no = 1;
                                        $sql = mysqli_query($koneksi, "SELECT * from data_pasien");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['id']; ?>"><?= $data['nama_pasien']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_obat">Nama Obat</label>
                                    <select class="form-control" id="id_obat" name="id_obat">
                                        <option disabled selected>pilih obat</option>
                                        <?php
                                        $no = 1;
                                        $sql = mysqli_query($koneksi, "SELECT * from data_obat");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <option value="<?= $data['id']; ?>"><?= $data['nama_obat']; ?>--<?= $data['harga']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Layanan</label>
                                    <input name="jenis_layanan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input name="tanggal" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input name="keterangan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Total Biaya</label>
                                    <input name="total_biaya" type="text" class="form-control" required>
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