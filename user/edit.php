<div class="main-content" id="panel">
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $id = $_POST['id'];
                            $sql = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <form id="basic-form" method="post" action="user/proses.php">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" type="text" class="form-control" required value="<?= $data['nama'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="date" class="form-control" required value="<?= $data['tanggal_lahir'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input name="alamat" type="text" class="form-control" required value="<?= $data['alamat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input name="no_telpon" type="text" class="form-control" required value="<?= $data['no_telpon'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>TMT</label>
                                        <input name="tmt" type="date" class="form-control" required value="<?= $data['tmt'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="text" class="form-control" required value="<?= $data['email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input name="username" type="text" class="form-control" required value="<?= $data['username'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" id="level" class="form-control">
                                            <option <?= $data['level'] === 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
                                            <option <?= $data['level'] === 'Petugas' ? 'selected' : '' ?> value="Petugas">Petugas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Aktifasi Akun</label>
                                        <select name="is_activate" id="is_activate" class="form-control">
                                            <option <?= $data['is_activate'] === '1' ? 'selected' : '' ?> value="1">Aktif</option>
                                            <option <?= $data['is_activate'] === '0' ? 'selected' : '' ?> value="0">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                    <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>