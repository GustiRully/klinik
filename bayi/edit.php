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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bayi WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="bayi/proses.php">
                                    <div class="form-group">
                                        <label>Nama Bayi</label>
                                        <input name="nama_bayi" type="text" class="form-control" required value="<?= $data['nama_bayi'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input name="tempat_lahir" type="text" class="form-control" required value="<?= $data['tempat_lahir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="date" class="form-control" required value="<?= $data['tanggal_lahir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Berat Badan (kg)</label>
                                        <input name="berat_badan" type="number" class="form-control" required value="<?= $data['berat_badan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Panjang Badan (cm)</label>
                                        <input name="panjang_badan" type="number" class="form-control" required value="<?= $data['panjang_badan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Persalinan</label>
                                        <input name="tempat_persalinan" type="text" class="form-control" required value="<?= $data['tempat_persalinan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input name="nama_ayah" type="text" class="form-control" required value="<?= $data['nama_ayah'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input name="nama_ibu" type="text" class="form-control" required value="<?= $data['nama_ibu'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input name="alamat" type="text" class="form-control" required value="<?= $data['alamat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="nomor_telepon" type="text" class="form-control" required value="<?= $data['nomor_telepon'] ?>">
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