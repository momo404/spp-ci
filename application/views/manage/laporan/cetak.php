
<!DOCTYPE html>
<html>

<head>
	<link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
	<title><?= $title ?></title>

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
	

	<hr>
	<table class="table table-hover mails m-0 table table-actions-bar">
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>NAMA SISWA</th>
			<th>PEMBAYARAN BULAN</th>
			<th>PEMBAYARAN TAHUN</th>
			<th>PETUGAS</th>
			<th>JUMLAH</th>
			<th>TANGGAL BAYAR</th>
			<th>STATUS</th>
		</tr>
		<?php
		$no = 1;
		foreach ($pembayaran as $data) :
		?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['id_pembayaran']; ?></td>
				<td><?= $this->siswa_model->get_siswa_byNisn($data['nisn'])['nama']; ?></td>
				<td><?= $data['nama_bulan'] ?></td>
				<td><?= $data['tahun'] ?></td>
				<td><?= $data['nama_petugas'] ?></td>
				<td><?= rupiah($data['nominal']) ?></td>
				<td><?= $data['tgl_bayar'] ?></td>
				<td><?= tampil_status( $data['status']) ?></td>
			</tr>
			<?php $no++; ?>


		<?php endforeach; ?>

	</table>
	<table width="100%">
		<tr>
			<td></td>
			<td width="200px">
				<BR />
				<p>Selong <?= date('d-m-Y'); ?> <br />
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
		<!-- <a href="#" onclick="window.print();"><button class="btn btn-default print"><i class="fa fa-download"></i> Download</button></a> -->
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