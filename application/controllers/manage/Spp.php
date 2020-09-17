<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_login();
		is_admin();
		$this->load->model('Spp_model');
	}

	public function index()
	{	
		$data['title'] = "Daftar Data SPP";
		$data['spp'] = $this->Spp_model->get_spp();

		$this->load->view('templates/manage_header', $data);
		$this->load->view('manage/spp/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data SPP";
		$this->form_validation->set_rules('tahun', 'Tahun Angkatan', 'required|max_length[4]|min_length[4]|is_unique[tb_spp.tahun]');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/spp/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Spp_model->tambah_spp();
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Penambahan Data SPP Berhasil</div>');
			redirect('manage/spp');
		}

	}

	public function ubah($id)
	{
		$data['title'] = "Ubah Data SPP";
		$data['spp'] = $this->Spp_model->get_spp_byId($id);

		$this->form_validation->set_rules('tahun', 'Tahun Angkatan', 'required|max_length[4]|min_length[4]');
		$this->form_validation->set_rules('nominal', 'Nominal', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/spp/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Spp_model->ubah_spp($id);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Pengubahan Data SPP Berhasil</div>');
			redirect('manage/spp');
		}

	}

	public function hapus($id)
	{
		$this->Spp_model->hapus_spp($id);
		$this->session->set_flashdata('alert', '<div class="alert alert-success">Penghapusan Data SPP Berhasil</div>');
		redirect('manage/spp');
	}

}