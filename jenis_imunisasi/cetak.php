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
            <h3 class="mb-0">Data Jenis Imunisasi</h3>
            <form method="post" action="laporan/jenis_imunisasi.php" target="_BLANK">
              <button class="btn btn-sm btn-primary mb-15" name="cetak">
                <i class="icon wb-plus" aria-hidden="true"></i> Cetak Data
              </button>
            </form>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Imunisasi</th>
                  <th>Kadaluarsa</th>
                  <th>opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM data_jenis_imunisasi");
                while ($data = mysqli_fetch_array($sql)) {
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['kadaluarsa']; ?></td>
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