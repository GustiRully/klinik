       <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Data</h3>
                            </div>
                            <div class="card-body">
                        <form id="basic-form" method="post" action="kunjungan/proses.php">

                            <!-- RELASI START ini koding amun di database nya be id_.... (itu meambil data ditabel lain misal yg ini meambil data di organissasi)-->
                            <div class="form-group">
                                <label class="form-label">Nama Organisasi</label>
                                <div class="controls">
                                    <select name="id_organisasi" class="form-control">
                                        <option value="">-- Pilih Data Organisasi --</option>
                                        <?php 
                                        $row = mysqli_query($koneksi,"SELECT * FROM data_organisasi");
                                        while ($rows = mysqli_fetch_array($row)) {
                                            ?>
                                            <option value="<?=$rows['id_organisasi'];?>"><?=$rows['nama_organisasi'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- RELASI END -->


                                    <div class="form-group">
                                        <label>Nama Kunjungan</label>
                                        <input name="nama_kunjungan" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <input name="waktu" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>tempat pelaksanaan</label>
                                        <input name="tempat_pelaksanaan" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input name="no_telpon" type="number" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input name="keterangan" type="text" class="form-control" required>
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