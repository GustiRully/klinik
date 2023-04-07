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
                            <form id="basic-form" method="post" action="jenis_imunisasi/proses.php">
                                <div class="form-group">
                                    <label>Nama Imunisasi</label>
                                    <input name="nama" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Kadaluarsa</label>
                                    <input name="kadaluarsa" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Biaya</label>
                                    <input name="biaya" type="number" class="form-control" required>
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