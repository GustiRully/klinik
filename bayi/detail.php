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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bayi WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 200px;">Nama Bayi</th>
                                        <td><?= $data['nama_bayi'] ?></td>
                                    </tr>
                                        <th style="width: 200px;">Tempat Lahir</th>
                                        <td><?= $data['tempat_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tanggal Lahir</th>
                                        <td><?= $data['tanggal_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Berat Badan</th>
                                        <td><?= $data['berat_badan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Panjang Badan</th>
                                        <td><?= $data['panjang_badan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tempat Persalinan</th>
                                        <td><?= $data['tempat_persalinan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Nama Ayah</th>
                                        <td><?= $data['nama_ayah'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Nama Ibu</th>
                                        <td><?= $data['nama_ibu'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Alamat</th>
                                        <td><?= $data['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">No Telepon</th>
                                        <td><?= $data['nomor_telepon'] ?></td>
                                    </tr>
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>