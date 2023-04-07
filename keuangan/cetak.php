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
            <h3 class="mb-0">Data Keuangan</h3>
          </div>
          <br>
          <div style="margin-left: 20px">

            <h2>Filter Laporan Keuangan Berdasarkan Tahun</h2>
            <form id="basic-form" method="get" action="laporan/filter_keuangan.php" target="_blank">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <select class="form-control" id="tahun" name="tahun">
                      <?php for ($i = date('Y'); $i >= date('Y') - 32; $i -= 1) { ?>
                        <option value='<?= $i; ?>'> <?= $i; ?> </option>;
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col" style="margin-top: 34px">
                  <button type="submit" class="btn btn-primary">cetak</button>
                </div>
              </div>
              <!-- Light table -->
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Bulan</th>
                      <th>Persalinan</th>
                      <th>KB</th>
                      <th>Imunisasi</th>
                      <th>Kehamilan</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $tahun = Date("Y");
                    $query = "
                  SELECT 
                    'Januari' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='1'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='1'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='1'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='1'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='1'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='1'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='1'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='1'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Februari' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='2'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='2'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='2'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='2'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='2'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='2'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='2'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='2'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Maret' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='3'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='3'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='3'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='3'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='3'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='3'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='3'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='3'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'April' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='4'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='4'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='4'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='4'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='4'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='4'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='4'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='4'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Mei' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='5'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='5'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='5'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='5'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='5'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='5'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='5'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='5'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Juni' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='6'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='6'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='6'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='6'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='6'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='6'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='6'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='6'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Juli' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='7'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='7'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='7'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='7'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='7'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='7'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='7'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='7'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Agustus' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='8'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='8'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='8'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='8'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='8'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='8'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='8'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='8'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'September' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='9'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='9'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='9'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='9'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='9'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='9'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='9'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='9'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Oktober' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='10'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='10'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='10'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='10'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='10'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='10'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='10'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='10'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'November' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='11'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='11'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='11'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='11'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='11'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='11'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='11'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='11'),0)) AS total
                    UNION ALL 
                    SELECT 
                    'Desember' AS bulan,
                    '$tahun' AS tahun,
                    IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='12'),0) AS kehamilan, 
                    IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='12'),0) AS bersalin, 
                    IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='12'),0) AS kb, 
                    IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='12'),0) AS imunisasi,
                    (IFNULL((SELECT SUM(biaya) FROM data_kehamilan WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='12'),0) + IFNULL((SELECT SUM(biaya) FROM data_bersalin WHERE YEAR(tgl_lahir)='" . $tahun . "' AND MONTH(tgl_lahir)='12'),0) + IFNULL((SELECT SUM(biaya) FROM data_kb WHERE YEAR(tanggal)='" . $tahun . "' AND MONTH(tanggal)='12'),0) + IFNULL((SELECT SUM(biaya) FROM data_imunisasi INNER JOIN data_jenis_imunisasi ON data_jenis_imunisasi.id=data_imunisasi.id_jenis_imunisasi WHERE YEAR(data_imunisasi.waktu_pemberian)='" . $tahun . "' AND MONTH(data_imunisasi.waktu_pemberian)='12'),0)) AS total
                ";
                    $sql = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['bulan']?></td>
                        <td>Rp. <?= number_format($data['bersalin'],0,",","."); ?></td>
                        <td>Rp. <?= number_format($data['kb'],0,",","."); ?></td>
                        <td>Rp. <?= number_format($data['imunisasi'],0,",","."); ?></td>
                        <td>Rp. <?= number_format($data['kehamilan'],0,",","."); ?></td>
                        <td>Rp. <?= number_format($data['total'],0,",","."); ?></td>
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