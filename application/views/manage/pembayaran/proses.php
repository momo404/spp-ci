<?php 

include '../../include/core.php';
if (!isset($_SESSION['username'])) {
	echo "Logn dulu lah !!";
	die();
}
if ( isset($_GET['aksi']) && isset($_GET['id']) && isset($_GET['nisn']) && isset($_GET['tahun']) ) {
	$id = $_GET['id'];
	$aksi = $_GET['aksi'];
	$nisn = $_GET['nisn'];
	$tahun = $_GET['tahun'];
	$id_petugas = id_petugas($_SESSION['username']);
	if ($aksi == "bayar") {
		mysqli_query($koneksi,"UPDATE tb_pembayaran SET id_petugas = '$id_petugas', tgl_bayar = '$date', status = '1' WHERE id_pembayaran = $id");
	} elseif ($aksi == "batal") {
		mysqli_query($koneksi,"UPDATE tb_pembayaran SET id_petugas = NULL, tgl_bayar = NULL, status = '0' WHERE id_pembayaran = $id");
	}
	header("Location: index?nisn=$nisn&tahun=$tahun#tagihan");
	

}

 ?>