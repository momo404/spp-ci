<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_login();
		is_admin();
		$this->load->model('tahun_model');
	}

	public function index()
	{	
		$data['title'] = "Daftar Data Tahun";
		$data['tahun'] = $this->tahun_model->get_tahun();

		$this->load->view('templates/manage_header', $data);
		$this->load->view('manage/tahun/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Tahun";
		$this->form_validation->set_rules('tahun', 'Tahun', 'required|max_length[4]|min_length[4]|is_unique[tb_tahun.tahun]');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/tahun/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->tahun_model->tambah_tahun();
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Penambahan Data Tahun Berhasil</div>');
			redirect('manage/tahun');
		}

	}

	public function ubah($id)
	{
		$data['title'] = "Ubah Data Tahun";
		$data['tahun'] = $this->tahun_model->get_tahun_byId($id);

		$this->form_validation->set_rules('tahun', 'Tahun', 'required|max_length[4]|min_length[4]');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/tahun/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->tahun_model->ubah_tahun($id);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Pengubahan Data Tahun Berhasil</div>');
			redirect('manage/tahun');
		}

	}

	public function hapus($id)
	{
		$this->tahun_model->hapus_tahun($id);
		$this->session->set_flashdata('alert', '<div class="alert alert-success">Penghapusan Data Tahun Berhasil</div>');
		redirect('manage/tahun');
	}

}