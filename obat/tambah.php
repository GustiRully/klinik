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
                            <form id="basic-form" method="post" action="obat/proses.php">
                                <div class="form-group">
                                    <label>Nama Obat</label>
                                    <input name="nama_obat" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input name="harga" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input name="stok" type="number" min="1" class="form-control" required>
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