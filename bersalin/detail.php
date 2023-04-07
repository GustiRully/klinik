<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Bersalin</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_POST['id'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bersalin INNER JOIN data_pasien ON data_bersalin.id_pasien=data_pasien.id INNER JOIN data_bidan ON data_bersalin.id_bidan=data_bidan.id WHERE data_bersalin.id='$id'");
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
                                        <th style="width: 200px;">Nama Pasien</th>
                                        <td><?= $data['nama_pasien'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tanggal Lahir</th>
                                        <td><?= $data['tgl_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Berat Badan</th>
                                        <td><?= $data['berat_badan'] ?> KG</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Panjang Badan</th>
                                        <td><?= $data['panjang_badan'] ?> CM</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Lingkar Kepala</th>
                                        <td><?= $data['lingkar_kepala'] ?> CM</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Lingkar Dada</th>
                                        <td><?= $data['lingkar_dada'] ?> CM</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Jenis Kelamin</th>
                                        <td><?= $data['jenis_kelamin'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Anak ke</th>
                                        <td><?= $data['anak_ke'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Vitamin K</th>
                                        <td><?= $data['vit_k'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">HB 0</th>
                                        <td><?= $data['HB_0'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Salep Mata</th>
                                        <td><?= $data['salep_mata'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Keterangan</th>
                                        <td><?= $data['keterangan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Biaya</th>
                                        <td>Rp <?= number_format($data['biaya'], 0, ",", ".") ?></td>
                                    </tr>
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>