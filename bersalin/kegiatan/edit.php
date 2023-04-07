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
                           $sql = mysqli_query($koneksi,"SELECT * FROM data_kegiatan WHERE id_kegiatan='$id'");
                           while ($data =mysqli_fetch_array($sql)){
                               ?> 
                               <form id="basic-form" method="post" action="kegiatan/proses.php">
                                <div class="form-group">
                                    <label>Nama kegiatan</label>
                                    <input name="nama_kegiatan" type="text" class="form-control" value="<?=$data['nama_kegiatan'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Pengurus</label>
                                    <input name="pengurus" type="text" class="form-control" value="<?=$data['pengurus'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat kegiatan</label>
                                    <input name="alamat_kegiatan" type="text" class="form-control" value="<?=$data['alamat_kegiatan'];?>">
                                </div>
                                <div class="form-group">
                                    <label>No Telpon</label>
                                    <input name="no_telpon" type="number" class="form-control" value="<?=$data['no_telpon'];?>">
                                </div>
                                <div class="form-group">


                                </select>
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