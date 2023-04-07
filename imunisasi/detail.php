<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Imunisasi</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_POST['id'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_imunisasi INNER JOIN data_bayi ON data_imunisasi.id_bayi=data_bayi.id INNER JOIN data_bidan ON data_imunisasi.id_bidan=data_bidan.id INNER JOIN data_jenis_imunisasi ON data_imunisasi.id_jenis_imunisasi=data_jenis_imunisasi.id WHERE data_imunisasi.id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 200px;">Nama Bidan</th>
                                        <td><?= $data['nama_bidan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Foto </th>
                                        <td>
                                            <img src="uploads/<?= $data['foto'] ?>" alt="" class="img-thumbnail" style="width:120px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Nama Bayi</th>
                                        <td><?= $data['nama_bayi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Jenis Imunisasi</th>
                                        <td><?= $data['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Jenis Imunisasi</th>
                                        <td>Rp <?= number_format($data['biaya'],0,",",".") ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tanggal Imunisasi</th>
                                        <td><?= $data['waktu_pemberian'] ?></td>
                                    </tr>
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>