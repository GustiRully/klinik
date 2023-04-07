<?php
require('../conf/koneksi.php');
?>

<head>
	<link rel="stylesheet" type="text/css" href="../assets/print.php">
	<style>
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
	<title>Cetak Data Kehamilan</title>
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

				<td style="font-size: 30px; font-weight: bold;">Data Keuangan Tahun <?= $_GET['tahun'] ?></td>
			</table>
		</center>
		<hr size="2px" color="black" style="margin-top: 1px;">
		<dv>

			<table border="1" style="width: 100%;">
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
					$tahun = $_GET['tahun'];
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
							<td>Rp. <?= number_format($data['bersalin'], 0, ",", "."); ?></td>
							<td>Rp. <?= number_format($data['kb'], 0, ",", "."); ?></td>
							<td>Rp. <?= number_format($data['imunisasi'], 0, ",", "."); ?></td>
							<td>Rp. <?= number_format($data['kehamilan'], 0, ",", "."); ?></td>
							<td>Rp. <?= number_format($data['total'], 0, ",", "."); ?></td>
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
					<th colspan="1" width="80%" align="centar">NIP. xxxxxxxxxxxxxxxx</th>
				</tr>
			</table>


</div>
</div>