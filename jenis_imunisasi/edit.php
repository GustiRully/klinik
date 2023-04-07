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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_jenis_imunisasi WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="jenis_imunisasi/proses.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama Imunisasi</label>
                                        <input name="nama" type="text" class="form-control" required value="<?= $data['nama'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Kadaluarsa</label>
                                        <input name="kadaluarsa" type="text" class="form-control" required value="<?= $data['kadaluarsa'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Biaya</label>
                                        <input name="biaya" type="text" class="form-control" required value="<?= $data['biaya'] ?>">
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