<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_login();
		is_admin();
		$this->load->model('pembayaran_model');
		$this->load->model('siswa_model');
		$this->load->model('tahun_model');
		$this->load->model('petugas_model');
	}

	public function index()
	{
		$data['title'] = "Laporan";
		$data['bulan'] = $this->pembayaran_model->get_bulan();
		$data['tahun_tagihan'] = $this->tahun_model->get_tahun();

		$this->load->view('templates/manage_header',$data);
		$this->load->view('manage/laporan/index', $data);
		$this->load->view('templates/footer');

		if ($this->input->post('tanggal')) {
			$date = date_create($this->input->post('tanggal'));
			$this->_cekLaporan(date_format($date, "d-m-Y"));
		} elseif ($this->input->post('bulanan_bulan')) {
			$bulan = $this->input->post('bulanan_bulan')."-".$this->input->post('bulanan_tahun');
			$this->_cekLaporan($bulan);
		} elseif ($this->input->post('tahunan')) {
			$this->_cekLaporan($this->input->post('tahunan'));
		}

	}

	private function _cekLaporan($tanggal)
	{	

		if (empty($this->pembayaran_model->get_pembayaran_byTgl($tanggal))) {
			$this->session->set_flashdata('alert','<div class="alert alert-danger">Laporan tidak ditemukan!</div>');
			redirect('manage/laporan');
		} else {
			redirect('manage/laporan/cetak/'.$tanggal.'');
		}
		
	}	

	public function cetak($tanggal)
	{
		$data['title'] = "LAPORAN PEMBAYARAN SPP";
		$data['pembayaran'] = $this->pembayaran_model->get_pembayaran_byTgl($tanggal);

		$this->load->view('manage/laporan/cetak', $data);

	}
}