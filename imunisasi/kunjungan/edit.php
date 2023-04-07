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
                        $sql = mysqli_query($koneksi,"SELECT * FROM data_kunjungan
                            INNER JOIN data_organisasi ON data_kunjungan.id_organisasi=data_organisasi.id_organisasi
                            WHERE id_kunjungan='$id'");
                        while ($data =mysqli_fetch_array($sql)){
                            ?> 
                            <form id="basic-form" method="post" action="kunjungan/proses.php">

                                <!-- RELASI START ini koding amun di database nya be id_.... (itu meambil data ditabel lain misal yg ini meambil data di organissasi)-->
                                <div class="form-group">
                                    <label class="form-label">Nama Organisasi</label>
                                    <div class="controls">
                                        <select name="id_organisasi" class="form-control">
                                            <option value="">-- Pilih Data Organisasi --</option>
                                            <option value="<?=$data['id_organisasi'];?>" selected><?=$data['nama_organisasi'];?></option>
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
                                    <input name="nama_kunjungan" type="text" class="form-control" value="<?=$data['nama_kunjungan'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Waktu</label>
                                    <input name="waktu" type="date" class="form-control" value="<?=$data['waktu'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Pelaksanaan</label>
                                    <input name="tempat_pelaksanaan" type="text" class="form-control" value="<?=$data['tempat_pelaksanaan'];?>">
                                </div>

                                <div class="form-group">
                                    <label>No Telpon</label>
                                    <input name="no_telpon" type="number" class="form-control" value="<?=$data['no_telpon'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input name="keterangan" type="date" class="form-control" value="<?=$data['keterangan'];?>">
                                </div>
                                <br>
                                <input type="hidden" name="id" value="<?=$id;?>">
                                <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>