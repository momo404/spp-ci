<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_login();
		is_admin();
		$this->load->model('siswa_model');
		$this->load->model('kelas_model');
		$this->load->model('spp_model');
		$this->load->model('pembayaran_model');
	}

	public function index()
	{	
		$data['title'] = "Daftar Data Siswa";
		if ($this->input->post('keyword')) {
			$data['siswa'] = $this->siswa_model->search_siswa();
		} else {
			$data['siswa'] = $this->siswa_model->get_siswa();
		}

		$this->load->view('templates/manage_header', $data);
		$this->load->view('manage/siswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Data Siswa";
		$data['kelas'] = $this->kelas_model->get_kelas();
		$data['spp'] = $this->spp_model->get_spp();

		$this->form_validation->set_rules('nisn', 'NISN', 'required|is_unique[tb_siswa.nisn]|max_length[10]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'No HP', 'required|max_length[13]');
		$this->form_validation->set_rules('spp', 'Tahun Masuk', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/siswa/tambah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->siswa_model->tambah_siswa();
			$nisn = $this->input->post('nisn', true);
			$tahun = $this->siswa_model->get_siswa_byNisn($nisn)['tahun'];
			$this->pembayaran_model->tambah_pembayaran($nisn,$tahun);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Penambahan Data Siswa Berhasil</div>');
			redirect('manage/siswa');
		}

	}

	public function ubah($id)
	{
		$data['title'] = "Ubah Data Siswa";
		$data['siswa'] = $this->siswa_model->get_siswa_byId($id);
		$data['kelas'] = $this->kelas_model->get_kelas();
		$data['spp'] = $this->spp_model->get_spp();

		$this->form_validation->set_rules('nisn', 'NISN', 'required|max_length[10]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'No HP', 'required|max_length[13]');
		$this->form_validation->set_rules('spp', 'Tahun Masuk', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/siswa/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->siswa_model->ubah_siswa($id);
			$this->session->set_flashdata('alert', '<div class="alert alert-success">Pengubahan Data Siswa Berhasil</div>');
			redirect('manage/siswa');
		}

	}

	public function hapus($id)
	{
		$this->siswa_model->hapus_siswa($id);
		$this->session->set_flashdata('alert', '<div class="alert alert-success">Penghapusan Data Siswa Berhasil</div>');
		redirect('manage/siswa');
	}

}