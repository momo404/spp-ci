<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('auth_model');
	}

	public function login()
	{
		is_not_login();
		$data['title'] = "Login Page";

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('manage/auth/login', $data);
		} else {

			if ($this->auth_model->login()[0] !== 0) {
				if ($this->auth_model->login()[1] !== 0) {
					$data = [
						'id_petugas' => $this->auth_model->login()[2]['id_petugas'],
						'nama_petugas' => $this->auth_model->login()[2]['nama_petugas'],
						'username' => $this->auth_model->login()[2]['username'],
						'level' => $this->auth_model->login()[2]['level']
					];
					$this->session->set_userdata($data);
					redirect('manage/');

				} else {
					$this->session->set_flashdata('alert', '<div class="alert alert-danger">Password salah.</div>');
					redirect('manage/auth/login');
				}
			} else {
				$this->session->set_flashdata('alert', '<div class="alert alert-danger">Username belum terdaftar.</div>');
				redirect('manage/auth/login');
			}
		}

	}

	public function logout()
	{
		is_login();
		$data['title'] = "Logout Page";
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		$this->load->view('manage/auth/logout', $data);
	}

}