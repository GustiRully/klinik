<div class="main-content" id="panel">
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
          </div>
          <div class="col-lg-6 col-5 text-right">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">

          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0">Data Bayi</h3>
            <form method="post">
              <button class="btn btn-sm btn-primary mb-15" name="tambah">
                <i class="icon wb-plus" aria-hidden="true"></i> Tambah
              </button>
            </form>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table table-hover table-striped" cellspacing="0" id="pkl">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Bayi</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Berat Badan</th>
                  <th>Panjang Badan</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM data_bayi");
                while ($data = mysqli_fetch_array($sql)) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_bayi']; ?></td>
                    <td><?= $data['tempat_lahir']; ?></td>
                    <td><?= $data['tanggal_lahir']; ?></td>
                    <td><?= $data['berat_badan']; ?> KG</td>
                    <td><?= $data['panjang_badan']; ?> CM</td>

                    <td class="actions">
                      <form method="post">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                        <button name="detail" class="btn btn-sm btn-info button-detail" data-toggle="tooltip" data-original-title="Detail"><i>Detail</i></button>
                        <button name="edit" class="btn btn-sm btn-info button-edit" data-toggle="tooltip" data-original-title="Edit"><i>Edit</i></button>
                        <button name="hapus" class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Hapus"></span><i>Hapus</i></button>
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