<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('petugas_model');
		is_login();
		is_admin();
	}

	public function index()
	{	
		$data['title'] = "Daftar Data Petugas";
		$data['petugas'] = $this->petugas_model->get_petugas();

		$this->load->view('templates/manage_header', $data);
		$this->load->view('manage/petugas/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Petugas";
		$data['level'] = ['admin','petugas'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_petugas.username]');
		$this->form_validation->set_rules('password1', 'Password', 'required|min_length[4]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/petugas/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->petugas_model->tambah_petugas();
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Penambahan Data Petugas Berhasil</div>');
			redirect('manage/petugas');
		}

	}

	public function ubah($id)
	{
		$data['title'] = "Ubah Data Petugas";
		$data['level'] = ['admin','petugas'];
		$data['petugas'] = $this->petugas_model->get_petugas_byId($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password1', 'Password', 'required|min_length[4]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/petugas/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->petugas_model->ubah_petugas($id);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Pengubahan Data Petugas Berhasil</div>');
			redirect('manage/petugas');
		}

	}

	public function hapus($id)
	{
		$this->petugas_model->hapus_petugas($id);
		$this->session->set_flashdata('alert', '<div class="alert alert-success">Penghapusan Data Petugas Berhasil</div>');
		redirect('manage/petugas');
	}

}