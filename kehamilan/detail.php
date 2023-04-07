<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Kehamilan</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_POST['id'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_kehamilan INNER JOIN data_pasien ON data_kehamilan.id_pasien=data_pasien.id INNER JOIN data_bidan ON data_kehamilan.id_bidan=data_bidan.id WHERE data_kehamilan.id='$id'");
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
                                        <th style="width: 200px;">Haid Terakhir</th>
                                        <td><?= $data['haid_terakhir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Perkiraan Persalinan</th>
                                        <td><?= $data['perkiraan_persalinan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Lingkaran Lengan Atas</th>
                                        <td><?= $data['lingkaran_lengan_atas'] ?> CM</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Umur Kehamilan</th>
                                        <td><?= $data['umur_kehamilan'] ?> Bulan</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tinggi Badan</th>
                                        <td><?= $data['tinggi_badan'] ?> CM</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Hasil Pemeriksaan</th>
                                        <td><?= $data['hasil_pemeriksaan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Denyut Jantung Janin</th>
                                        <td><?= $data['denyut_jantung_janin'] ?>x/m</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Berat Badan</th>
                                        <td><?= $data['berat_badan'] ?> KG</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tekanan Darah</th>
                                        <td><?= $data['tekanan_darah'] ?> </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Keluhan</th>
                                        <td><?= $data['keluhan'] ?></td>
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