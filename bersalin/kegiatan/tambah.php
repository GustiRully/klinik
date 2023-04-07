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
                        <form id="basic-form" method="post" action="kegiatan/proses.php">

                            <div class="form-group">
                                <label>Nama kegiatan</label>
                                <input name="nama_kegiatan" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat kegiatan</label>
                                <input name="alamat_kegiatan" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Pengurus</label>
                                <input name="pengurus" type="text" class="form-control" required>
                            </div>
                             <div class="form-group">
                                <label>No Telpon</label>
                                <input name="no_telpon" type="number" class="form-control" required>
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