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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_obat WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="obat/proses.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <input name="nama_obat" type="text" class="form-control" required value="<?= $data['nama_obat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input name="harga" type="text" class="form-control" required value="<?= $data['harga'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input name="stok" type="number" min="1" class="form-control" required value="<?= $data['stok'] ?>">
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