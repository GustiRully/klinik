            <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Kunjungan</h3>
                            </div>
                            <div class="card-body">
                                <form method="post">
                                <button class="btn btn-primary mb-15" name="tambah">
                                    <i class="icon wb-plus" aria-hidden="true"></i> Tambah
                                </button>
                                </form>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="agus">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Organisasi</th>
                                                <th>Nama Kunjungan</th>
                                                <th>Waktu </th>
                                                <th>Tempat Pelaksanaan</th>
                                                <th>No telp</th>
                                                <th>Keterangan</th>
                                                <th>opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <tbody>
                                            <?php 
                                                $no = 1;
                                                $sql = mysqli_query($koneksi,"SELECT * FROM data_kunjungan
                                                    INNER JOIN data_organisasi ON data_kunjungan.id_organisasi=data_organisasi.id_organisasi
                                                    ");
                                                while ($data = mysqli_fetch_array($sql)) {
                                             ?>
                                            <tr>
                                                <td align="center"><?=$no++?></td>
                                                <td><?=$data['nama_organisasi'];?></td>
                                                <td><?=$data['nama_kunjungan'];?></td>
                                                <td><?=$data['waktu'];?></td>
                                                <td><?=$data['tempat_pelaksanaan'];?></td>
                                                <td><?=$data['no_telpon'];?></td>
                                                <td><?=$data['keterangan'];?></td>
                                                
                                                <td class="actions">
                                                   <form method="post">
                                                    <input type="hidden" name="id" value="<?=$data['id_kunjungan'];?>">
                                                    <button name="edit" class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                    data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></button>
                                                    <button name="hapus" class="btn btn-sm btn-icon on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php 
                                            }
                                         ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div> 