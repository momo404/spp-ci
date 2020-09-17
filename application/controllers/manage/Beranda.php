<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_login();
		$this->load->model('pembayaran_model');
		$this->load->model('siswa_model');
		$this->load->model('tahun_model');
		$this->load->model('petugas_model');
		$this->load->model('beranda_model');
	}

	public function index()
	{
		
		$data['title'] = "Beranda";
		$data['pembayaran'] = $this->pembayaran_model->get_pembayaran_all();
		$data['count'] = $this->beranda_model->count_pembayaran();
		$data['tahun_tagihan'] = $this->tahun_model->get_tahun();

		$this->load->view('templates/manage_header', $data);
		$this->load->view('manage/index', $data);
		$this->load->view('templates/footer');
	}

}