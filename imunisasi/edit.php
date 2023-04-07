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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_imunisasi WHERE id='$id'");
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="imunisasi/proses.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Pilih Bayi</label>
                                        <select name="id_bayi" id="id_bayi" class="form-control" required>
                                            <?php
                                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bayi");
                                            while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                                <?php if ($data['id'] == $row['id_bayi']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama_bayi'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_bayi'] ?></option>
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
                                                <?php if ($data['id'] == $row['id_bidan']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama_bidan'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama_bidan'] ?></option>
                                                <?php endif; ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Jenis Imunisasi</label>
                                        <select name="id_jenis_imunisasi" id="id_jenis_imunisasi" class="form-control" required>
                                            <?php
                                            $sql = mysqli_query($koneksi, "SELECT * FROM data_jenis_imunisasi");
                                            while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                                <?php if ($data['id'] == $row['id_jenis_imunisasi']) : ?>
                                                    <option selected value="<?= $data['id'] ?>"><?= $data['nama'] ?>|Rp. <?= number_format($data['biaya'],0,",","."); ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $data['id'] ?>"><?= $data['nama'] ?>|Rp. <?= number_format($data['biaya'],0,",","."); ?></option>
                                                <?php endif; ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Pemberian</label>
                                        <input name="waktu_pemberian" type="date" class="form-control" required value="<?= $row['waktu_pemberian'] ?>">
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