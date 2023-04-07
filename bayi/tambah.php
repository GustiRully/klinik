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
                            <form id="basic-form" method="post" action="bayi/proses.php">
                                <div class="form-group">
                                    <label>Nama Bayi</label>
                                    <input name="nama_bayi" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="tanggal_lahir" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Berat Badan (kg)</label>
                                    <input name="berat_badan" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Panjang Badan (cm)</label>
                                    <input name="panjang_badan" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Persalinan</label>
                                    <input name="tempat_persalinan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input name="nama_ayah" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input name="nama_ibu" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input name="nomor_telepon" type="text" class="form-control" required>
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