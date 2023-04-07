<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail KB</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_POST['id'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_kb INNER JOIN data_pasien ON data_kb.id_pasien=data_pasien.id INNER JOIN data_bidan ON data_kb.id_bidan=data_bidan.id WHERE data_kb.id='$id'");
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
                                        <th style="width: 200px;">Tanggal</th>
                                        <td><?= $data['tanggal'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Lama / Baru</th>
                                        <td><?= $data['lama_baru'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Jenis KB</th>
                                        <td><?= $data['jenis_kb'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tanggal Kembali</th>
                                        <td><?= $data['tanggal_kembali'] ?></td>
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