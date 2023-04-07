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
                            $sql = mysqli_query($koneksi, "SELECT * FROM data_bidan WHERE id='$id'");
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
                                        <th style="width: 200px;">No Surat Izin</th>
                                        <td><?= $data['no_surat_izin'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Lampiran Surat Izin</th>
                                        <td> <a href="uploads/<?= $data['lampiran_surat_izin'] ?>" target="_blank">Lampiran Surat Izin</a></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Pendidikan Terakhir</th>
                                        <td><?= $data['pendidikan_terakhir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Lampiran Ijazah</th>
                                        <td> <a href="uploads/<?= $data['lampiran_ijazah'] ?>" target="_blank">Lampiran Ijazah</a></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tempat Lahir</th>
                                        <td><?= $data['tempat_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Tanggal Lahir</th>
                                        <td><?= $data['tanggal_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Alamat</th>
                                        <td><?= $data['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">No Telepon</th>
                                        <td><?= $data['nomor_telepon'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">tmt</th>
                                        <td><?= $data['tmt'] ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px;">Sk</th>
                                        <td> <a href="uploads/<?= $data['sk'] ?>" target="_blank">SK</a></td>
                                    </tr>
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>