<?php 
require('../conf/koneksi.php');
?>

<head>
	<link rel="stylesheet" type="text/css" href="../assets/print.php">
	<style>
		table{
			font-size: 14px;

		}
		table, th, td {
			border-collapse: collapse;
		}
		thead{
			font-size: 16px;
		}
		.judul h3,h2,p{
			text-align: center;
			margin: 5px 0 5px 0;
		}
		.form-inline img{

			display: inline-block;
		}
		h2{
			font-size: 30px;
		}
		.kop tr td{
			text-align: center;
			border: 2px solid white;
			border-collapse: collapse;
		}
		.gambar{
			margin-right: 10px;
		}
		.isi tr td{
			padding-left: 5px;
			padding-right: 5px;
		}
		.ttd{
			text-align: center;
			display: inline-block;
			float: right;
		}
	</style>

	<script>window.print();</script>
	<title>Cetak Data Anggaran</title>
</head>

<div class="container-fluid">
	<center>
		<table class="kop">
			<tr>
				<td rowspan="5"><img src="../assets/img/banjarbaru.png" height="140" alt="" class="gambar"></td>
			</tr>
			<tr>
				<td style="font-size: 20px; font-weight: bold;">PEMERINTAH KOTA BANJARBARU</td>
			</tr>
			<tr>
				<td style="font-size: 25px; font-weight: bold;">DINAS PEMUDA OLAHRAGA<br>KEBUDAYAAN DAN PARIWISATA</td>
			</tr>
			<tr>
				<td style="font-size: 15px; font-weight: bold;">JL.A.Yani KM 33 No 28 Kelurahan Loktabat Selatan (70712)</td>
			</tr>
			<tr>
				<td style="font-size: 15px; font-weight: bold;">Telp (0511) 4772335</td>
			</tr>
		</table>

		<hr size="2px" color="black" style="margin-bottom: 1px;">
		<hr size="2px" color="black" style="margin-top: 1px;"> 
		<center>
			<table class="kop">

				<td style="font-size: 30px; font-weight: bold;">Data Anggaran</td>
			</table>
		</center>
		<hr size="2px" color="black" style="margin-top: 1px;">
		<dv>

			<table border="1" style="width: 100%;">
				<thead>
					<th>No</th>
					<th>Nama Kegiatan</th>
					<th>Dana</th>
					<th>Item</th>
					<th>Biaya</th>
					<th>Jumlah</th>
					<th>Total Pengeluaran</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tbody>
					<?php 
					$no = 1;
					$sql = mysqli_query($koneksi,"SELECT * FROM data_anggaran
						INNER JOIN data_kegiatan ON data_kegiatan.id_kegiatan=data_anggaran.id_kegiatan");
					while ($data = mysqli_fetch_array($sql)) {
						?>
						<tr class="gradeA">
							<td align="center"><?=$no++?></td>
							<td><?=$data['nama_kegiatan'];?></td>
							<td><?=$data['dana'];?></td>
							<td><?=$data['item'];?></td>
							<td><?=$data['biaya'];?></td>
							<td><?=$data['jumlah'];?></td>
							<td><?=$data['biaya'] * $data['jumlah'];?></td>
							<td><?=$data['keterangan'];?></td>
							
							
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
					<th colspan="1" width="80%" align="centar">Kepala Bidang Pemuda</th>
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
					<th colspan="1" width="80%" align="center"><u>ABDURRAHMAN, S.Pd. M.Pd</u></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="centar"></th>
				</tr>
				<tr>
					<th colspan="5" width="60%" align="right"></th>
					<th colspan="1" width="80%" align="centar">NIP. 19650101 198902 1 008</th>
				</tr>
			</table>


		</div>
	</div>  