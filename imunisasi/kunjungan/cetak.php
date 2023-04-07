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
          <h3 class="mb-0">Data Kunjungan</h3>
                   <form method="post" action="laporan/kunjungan.php" target="_BLANK">
                                <button class="btn btn-sm btn-primary mb-15" name="cetak">
                                    <i class="icon wb-plus" aria-hidden="true"></i> Cetak Data
                                </button>
                                </form>
        </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="agus">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Organisasi</th>
                                                <th>Nama Kunjungan</th>
                                                <th>Waktu </th>
                                                <th>Tempat Pelaksanaan</th>
                                                <th>No telp</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <tbody>
                                            <?php 
                                                $no = 1;
                                                $sql = mysqli_query($koneksi,"SELECT * FROM data_kunjungan
                                                    INNER JOIN data_organisasi ON data_kunjungan.id_organisasi=data_organisasi.id_organisasi
                                                    ");
                                                while ($data = mysqli_fetch_array($sql)) {
                                             ?>
                                            <tr class="gradeA">
                                                <td align="center"><?=$no++?></td>
                                                <td><?=$data['nama_organisasi'];?></td>
                                                <td><?=$data['nama_kunjungan'];?></td>
                                                <td><?=$data['waktu'];?></td>
                                                <td><?=$data['tempat_pelaksanaan'];?></td>
                                                <td><?=$data['no_telpon'];?></td>
                                                <td><?=$data['keterangan'];?></td>
                                                
                                                
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