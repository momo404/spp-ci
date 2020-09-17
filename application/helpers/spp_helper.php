<?php 

function rupiah($angka){
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
}


function is_login(){

	$ci = get_instance();

	if (!$ci->session->userdata('username')) {
		$ci->session->set_flashdata('alert','<div class="alert alert-danger">Silahkan login terlebih dahulu!</div>');
		redirect('manage/auth/login');
	}

}
function is_not_login(){

	$ci = get_instance();

	if ($ci->session->userdata('username')) {
		redirect('manage/beranda');
	}

}

function is_admin(){
	$ci = get_instance();

	if (!$ci->session->userdata('level') == "admin") {
		$ci->session->set_flashdata('alert','<div class="alert alert-danger">Anda bukan Admin ya kampang!</div>');
		redirect('manage/beranda');
	}
}

function tampil_status($status){
	if ($status == 1) {
		return "LUNAS";
	} else {
		return "BELUM LUNAS";
	}
}