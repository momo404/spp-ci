<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('kelas_model');
		is_login();
		is_admin();
	}

	public function index()
	{	
		$data['title'] = "Daftar Data Kelas";
		$data['kelas'] = $this->kelas_model->get_kelas();

		$this->load->view('templates/manage_header', $data);
		$this->load->view('manage/kelas/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Kelas";
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|is_unique[tb_kelas.nama_kelas]');
		$this->form_validation->set_rules('kompetensi', 'Kompetensi Keahlian', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/kelas/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->kelas_model->tambah_kelas();
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Penambahan Data Kelas Berhasil</div>');
			redirect('manage/kelas');
		}

	}

	public function ubah($id)
	{
		$data['title'] = "Ubah Data Kelas";
		$data['kelas'] = $this->kelas_model->get_kelas_byId($id);

		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('kompetensi', 'Kompetensi Keahlian', 'required');	

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/kelas/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->kelas_model->ubah_kelas($id);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Pengubahan Data Kelas Berhasil</div>');
			redirect('manage/kelas');
		}

	}

	public function hapus($id)
	{
		$this->kelas_model->hapus_kelas($id);
		$this->session->set_flashdata('alert', '<div class="alert alert-success">Penghapusan Data Kelas Berhasil</div>');
		redirect('manage/kelas');
	}

}