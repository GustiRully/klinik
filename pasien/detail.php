<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Data</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_POST['id'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_pasien WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 200px;">Nama Pasien</th>
                                        <td><?= $data['nama_pasien'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Nama Suami</th>
                                        <td><?= $data['nama_suami'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tanggal Lahir</th>
                                        <td><?= $data['tanggal_lahir_suami'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Alamat</th>
                                        <td><?= $data['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">NIK</th>
                                        <td><?= $data['nik'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">KTP</th>
                                        <td> <a href="uploads/<?= $data['lampiran_ktp'] ?>" target="_blank">Lampiran Ijazah</a></td>
                                    </tr>
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>