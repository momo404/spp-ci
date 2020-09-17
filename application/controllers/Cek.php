<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('tahun_model');
		$this->load->model('siswa_model');
		$this->load->model('pembayaran_model');
		$this->load->model('petugas_model');
	}

	public function tagihan($nisn = FALSE, $tahun = FALSE)
	{

		$data['title'] = "Lihat Tagihan";
		$data['tahun_tagihan'] = $this->tahun_model->get_tahun();
		$data['nisn'] = $nisn;
		$data['tahun'] = $tahun;

		$data['cek_pembayaran'] = $this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[0];
		$data['siswa'] = $this->siswa_model->get_siswa_byNisn($nisn);

		$data['pembayaran'] = $this->pembayaran_model->get_pembayaran($nisn, $tahun);

		$this->form_validation->set_rules('nisn', 'NISN', 'required|max_length[10]');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/header', $data);
			$this->load->view('lihat-tagihan', $data);
			$this->load->view('templates/footer');
		} else {
			$nisn = $this->input->post('nisn', true);
			$tahun = $this->input->post('tahun', true);
			$this->_cek($nisn,$tahun);
		}
	}

	public function riwayat($nisn = false)
	{

		$data['title'] = "Riwayat Pembayaran";
		$data['nisn'] = $nisn;
		$data['siswa'] = $this->siswa_model->get_siswa_byNisn($nisn);
		$data['pembayaran'] = $this->pembayaran_model->get_pembayaran_byNisn($nisn);

		$this->form_validation->set_rules('nisn', 'NISN', 'required|max_length[10]');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/header', $data);
			$this->load->view('riwayat-pembayaran', $data);
			$this->load->view('templates/footer');
		} else {
			$nisn = $this->input->post('nisn', true);
			if ($this->pembayaran_model->validasi_pembayaran($nisn, NULL)[1] !== 0) {
				redirect('cek/riwayat/'.$nisn.'');
			} else {
				$this->session->set_flashdata('alert','<div class="alert alert-danger">NISN tidak ditemukan!</div>');
				redirect('cek/riwayat');
			}
		}
	}

	private function _cek($nisn, $tahun)
	{

		if ($this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[1] !== 0) {
			if ($this->siswa_model->get_siswa_byNisn($nisn)['tahun'] <= $tahun ) {
				if ($this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[2]['status'] == 1) {
						redirect('cek/tagihan/'.$nisn.'/'.$tahun.'');
				} else {
					if ($this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[0] !== 0){
						
						redirect('cek/tagihan/'.$nisn.'/'.$tahun.'');
					} else {
						$this->session->set_flashdata('alert','<div class="alert alert-danger">Tagihan tahun sebelumnya belum lunas!</div>');
						redirect('cek/tagihan');
					}
				}
			} else {
				$this->session->set_flashdata('alert','<div class="alert alert-danger">Siswa belum masuk sekolah di tahun '.$tahun.'!</div>');
				redirect('cek/tagihan');
			}
		} else {
			$this->session->set_flashdata('alert','<div class="alert alert-danger">NISN tidak ditemukan!</div>');
			redirect('cek/tagihan');
		}
	}


}