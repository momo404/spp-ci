

<!DOCTYPE html>
<html>

<head>
	<link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
	<title>Bukti Pembayaran SPP</title>

	<style>
		body {
			font-family: arial;
		}

		.print {
			margin-top: 10px;
		}

		@media print {
			.print {
				display: none;
			}
		}

		table {
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>

<body>
	<h3 align="center">SMK NEGERI 1 SELONG <b><br /><?= $title ?></b></h3>
	<br />
	<hr />
	<?php
	
	?>
	
	<table class="table table-hover mails m-0 table table-actions-bar">
		<tr>
			<td><h5><b>Nama Siswa</b></h5></td>
			<td>:</td>
			<td> <?= $siswa['nama'] ?></td>
		</tr>
		<tr>
			<td><h5><b>NISN </b></h5></td>
			<td>:</td>
			<td> <?= $siswa['nisn'] ?></td>
		</tr>
		<tr>
			<td><h5><b>Kelas </b></h5></td>
			<td>:</td>
			<td> <?= $siswa['nama_kelas'] ?></td>
		</tr>
	</table>
	<hr>
	<table class="table table-hover mails m-0 table table-actions-bar">
		<tr>
			<th>ID</th>
			<th>NAMA SISWA</th>
			<th>PEMBAYARAN BULAN</th>
			<th>PEMBAYARAN TAHUN</th>
			<th>PETUGAS</th>
			<th>JUMLAH</th>
			<th>STATUS</th>
			<th>TANGGAL DIBAYAR</th>
		</tr>

		<tr>
			<td align="center"><?= $pembayaran['id_pembayaran']; ?></td>
			<td align=""><?= $siswa['nama'] ?></td>
			<td align=""><?= $pembayaran['nama_bulan'] ?></td>
			<td align=""><?= $pembayaran['tahun'] ?></td>
			<td align=""><?= $pembayaran['nama_petugas'] ?></td>
			<td align=""><?= rupiah($pembayaran['nominal']) ?></td>
			<td align=""><?= tampil_status( $pembayaran['status']) ?></td>
			<td align=""><?= $pembayaran['tgl_bayar'] ?></td>
		</tr>


	</table>
	<table width="100%">
		<tr>
			<td></td>
			<td width="200px">
				<BR />
				<p>Selong, <?= date('d-m-Y'); ?> <br />
					Bendahara
					<br />
					<br />
					<br />
					<p>__________________________</p>
					<?= $this->session->userdata('nama_petugas'); ?>
			</td>
		</tr>
	</table>

	<center>
		<a href="#" onclick="window.print();"><button class="btn btn-default print"><i class="fa fa-print"></i> Cetak</button></a>
	</center>
	<!-- jQuery  -->
        <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/detect.js"></script>
        <script src="<?= base_url(); ?>/assets/js/fastclick.js"></script>
        <script src="<?= base_url(); ?>/assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url(); ?>/assets/js/waves.js"></script>
        <script src="<?= base_url(); ?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url(); ?>/assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?= base_url(); ?>/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?= base_url(); ?>/assets/js/jquery.core.js"></script>
        <script src="<?= base_url(); ?>/assets/js/jquery.app.js"></script>
</body>

</html>