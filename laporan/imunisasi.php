<?php
require('../conf/koneksi.php');
?>

<head>
	<link rel="stylesheet" type="text/css" href="../assets/print.php">
	<style>
		/* media print ini Ilangin url lawan page */
		@media print {
			@page {
				size: auto;
				margin: 0;
				size: portrait
			}
		}

		table {
			font-size: 14px;

		}

		table,
		th,
		td {
			border-collapse: collapse;
		}

		thead {
			font-size: 16px;
		}

		.judul h3,
		h2,
		p {
			text-align: center;
			margin: 5px 0 5px 0;
		}

		.form-inline img {

			display: inline-block;
		}

		h2 {
			font-size: 30px;
		}

		.kop tr td {
			text-align: center;
			border: 2px solid white;
			border-collapse: collapse;
		}

		.gambar {
			margin-right: 10px;
		}

		.isi tr td {
			padding-left: 5px;
			padding-right: 5px;
		}

		.ttd {
			text-align: center;
			display: inline-block;
			float: right;
		}
	</style>

	<script>
		window.print();
	</script>
	<title>Cetak Data Imunisasi</title>
</head>

<div class="container-fluid">
	<center>
		<table class="kop">
			<tr>
				<td rowspan="5"><img src="../assets/img/logo1.jpg" height="140" alt="" class="gambar"></td>
			</tr>
			<tr>
				<td style="font-size: 20px; font-weight: bold;">KOTA BANJARMASIN</td>
			</tr>
			<tr>
				<td style="font-size: 25px; font-weight: bold;">KLINIK BIDAN LENI TRIYANA, Amd. Keb.</td>
			</tr>
			<tr>
				<td style="font-size: 15px; font-weight: bold;">JL.Ampera Gg. 20, Telaga Biru, Kec.Banjarmasin Barat, Kota Banjarmasin, Kalimantan Selatan (70712)</td>
			</tr>
			<tr>
				<td style="font-size: 15px; font-weight: bold;">Telp (0511) 4772335</td>
			</tr>
		</table>

		<hr size="2px" color="black" style="margin-bottom: 1px;">
		<hr size="2px" color="black" style="margin-top: 1px;">
		<center>
			<table class="kop">

				<td style="font-size: 30px; font-weight: bold;">Data Imunisasi</td>
			</table>
		</center>
		<hr size="2px" color="black" style="margin-top: 1px;">
		<dv>

			<table border="1" style="width: 100%;">
				<thead>
					<th>No</th>
					<th>Nama Bayi</th>
					<th>Nama Bidan</th>
					<th>Jenis Imunisasi</th>
					<th>Waktu Pemberian</th>
					</tr>
				</thead>
				<tbody>
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
			<br>
			<br>
			<br>
			<table width="100%" align="right">
				<tr>
					<th widht="20%"></th>
					<th widht="20%"></th>
					<th widht="20%"></th>
					<th widht="20%"></th>
					<th widht="20%"></th>
				</tr>
				<tr>
					<th colspan="5" width="40%"></th>
					<th colspan="2" align="right"> </th>
					<th colspan="2" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="70%" align="right"></th>
					<th colspan="5" width="70%" align="right"></th>
					<th colspan="1"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="center"></th>
					<th colspan="1" width="80%" align="centar">Kepala Klinik</th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"><br><br><br><br></th>
					<th colspan="1" width="80%" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="right"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="center"><u></u></th>
					<th colspan="1" width="80%" align="center"><u>LENI TRIYANA, Amd. Keb</u></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="centar"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="centar">NIP.xxxxxxxxxxxxxx</th>
				</tr>
			</table>


</div>
</div>