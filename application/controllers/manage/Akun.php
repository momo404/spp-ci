<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('akun_model');
		is_login();
	}

	public function ubah_password()
	{
		$data['title'] = "Ubah Password";

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|matches[password2]|min_length[4]');
		$this->form_validation->set_rules('password2', 'Password Baru', 'required|matches[password1]');
		
		if ($this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/ubah-password');
			$this->load->view('templates/footer');
		} else {
			if ($this->akun_model->cek_password($this->session->userdata('username')) == 1) {
				$this->akun_model->ubah_password($this->session->userdata('id_petugas'));
				$this->session->set_flashdata('alert', '<div class="alert alert-success">Pengubahan Password Berhasil</div>');
				redirect('manage/akun/ubah_password');
			} else {
				$this->session->set_flashdata('alert', '<div class="alert alert-danger">Password Lama tidak benar!</div>');
				redirect('manage/akun/ubah_password');
			}
			
		}
	}

}