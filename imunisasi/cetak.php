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
            <h3 class="mb-0">Data Imunisasi</h3>
            <form method="post" action="laporan/imunisasi.php" target="_BLANK">
              <button class="btn btn-sm btn-primary mb-15" name="cetak">
                <i class="icon wb-plus" aria-hidden="true"></i> Cetak
              </button>
              Cetak seluruh data imunisasi
            </form>
          </div>
          <br>
          <div style="margin-left: 20px">

            <h2>Filter tanggal waktu pemberian berdasarkan bulan dan tahun</h2>
            <form id="basic-form" method="post" action="imunisasi/proses.php" enctype="multipart/form-data" target="_blank">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <select class="form-control" id="bulan" name="bulan">
                      <option disabled selected>pilih bulan</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>                 
                   </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <select class="form-control" id="tahun" name="tahun">
                      <option disabled selected>pilih tahun</option>
                      <?php for ($i = date('Y'); $i >= date('Y') - 32; $i -= 1) { ?>
                        <option value='<?= $i; ?>'> <?= $i; ?> </option>;
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col" style="margin-top: 34px">
                  <button type="submit" class="btn btn-primary" name="cetak_filter_imunisasi">cetak</button>
                </div>
              </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Bayi</th>
                  <th>Nama Bidan</th>
                  <th>Jenis Imunisasi</th>
                  <th>Waktu Pemberian</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $query = "
                SELECT 
                data_imunisasi.*,
                data_jenis_imunisasi.nama AS jenis_imunisasi,
                data_bayi.nama_bayi,
                data_bidan.nama_bidan 
                FROM 
                data_imunisasi 
                INNER JOIN 
                data_jenis_imunisasi 
                ON 
                data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi 
                INNER JOIN 
                data_bidan 
                ON 
                data_bidan.id=data_imunisasi.id_bidan 
                INNER JOIN 
                data_bayi 
                ON 
                data_bayi.id=data_imunisasi.id_bayi 
                ";
                $sql = mysqli_query($koneksi, $query);
                while ($data = mysqli_fetch_array($sql)) {
                ?>
                  <tr class="gradeA">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_bayi']; ?></td>
                    <td><?= $data['nama_bidan']; ?></td>
                    <td><?= $data['jenis_imunisasi']; ?></td>
                    <td><?= $data['waktu_pemberian']; ?></td>
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