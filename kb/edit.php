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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_kb WHERE id='$id'");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="kb/proses.php">
                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                    <div class="form-group">
                                        <label for="id_pasien">Nama Pasien</label>
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
                                        <label for="id_bidan">Nama Bidan</label>
                                        <select name="id_bidan" id="id_bidan" class="form-control" required>
                                            <?php
                                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bidan");
                                            while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                                <?php if ($data['id'] == $row['id_bidan']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama_bidan'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_bidan'] ?></option>
                                                <?php endif; ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_obat">Nama Obat</label>
                                        <select name="id_obat" id="id_obat" class="form-control" required>
                                            <?php
                                            $sql = mysqli_query($koneksi, "SELECT * FROM data_obat");
                                            while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                                <?php if ($data['id'] == $row['id_obat']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama_obat'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_obat'] ?></option>
                                                <?php endif; ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input name="tanggal" type="date" value="<?= $row['tanggal']; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lama / Baru</label>
                                        <input name="lama_baru" type="text" value="<?= $row['lama_baru']; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis KB</label>
                                        <input name="jenis_kb" type="text" value="<?= $row['jenis_kb']; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input name="tanggal_kembali" type="date" value="<?= $row['tanggal_kembali']; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Biaya</label>
                                        <input name="biaya" type="number" value="<?= $row['biaya']; ?>" class="form-control" required>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>