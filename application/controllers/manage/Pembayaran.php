<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		is_login();
		$this->load->model('pembayaran_model');
		$this->load->model('siswa_model');
		$this->load->model('tahun_model');
		$this->load->model('petugas_model');
	}

	public function entri($nisn = FALSE, $tahun = FALSE)
	{

		$data['title'] = "Entri Pembayaran";
		$data['tahun_tagihan'] = $this->tahun_model->get_tahun();
		$data['nisn'] = $nisn;
		$data['tahun'] = $tahun;

		$data['cek_pembayaran'] = $this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[0];
		$data['siswa'] = $this->siswa_model->get_siswa_byNisn($nisn);

		$data['pembayaran'] = $this->pembayaran_model->get_pembayaran($nisn, $tahun);

		$this->form_validation->set_rules('nisn', 'NISN', 'required|max_length[10]');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		if ( $this->form_validation->run() == false ) {
			$this->load->view('templates/manage_header', $data);
			$this->load->view('manage/pembayaran/index', $data);
			$this->load->view('templates/footer');
		} else {
			$nisn = $this->input->post('nisn', true);
			$tahun = $this->input->post('tahun', true);
			$this->_proses($nisn,$tahun);
		}
	}

	private function _proses($nisn, $tahun)
	{

		if ($this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[1] !== 0) {
			if ($this->siswa_model->get_siswa_byNisn($nisn)['tahun'] <= $tahun ) {
				if ($this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[2]['status'] == 1) {
						$this->pembayaran_model->tambah_pembayaran($nisn, $tahun);
						redirect('manage/pembayaran/entri/'.$nisn.'/'.$tahun.'');
				} else {
					if ($this->pembayaran_model->validasi_pembayaran($nisn, $tahun)[0] !== 0){
						
						redirect('manage/pembayaran/entri/'.$nisn.'/'.$tahun.'');
					} else {
						$this->session->set_flashdata('alert','<div class="alert alert-danger">Tagihan tahun sebelumnya belum lunas!</div>');
						redirect('manage/pembayaran/entri');
					}
				}
			} else {
				$this->session->set_flashdata('alert','<div class="alert alert-danger">Siswa belum masuk sekolah di tahun '.$tahun.'!</div>');
				redirect('manage/pembayaran/entri');
			}
		} else {
			$this->session->set_flashdata('alert','<div class="alert alert-danger">NISN tidak ditemukan!</div>');
			redirect('manage/pembayaran/entri');
		}
	}

	public function bayar($id, $nisn, $tahun)
	{
		$this->pembayaran_model->bayar_tagihan($id);
		// $this->session->set_flashdata('message','<div class="alert alert-success">Tagihan ID #'.$id.' Berhasil <span>Dibayar</span>!</div>');
		redirect('manage/pembayaran/entri/'.$nisn.'/'.$tahun.'#tagihan');
	}

	public function batalkan($id, $nisn, $tahun)
	{
		$this->pembayaran_model->batalkan_tagihan($id);
		// $this->session->set_flashdata('message','<div class="alert alert-success">Tagihan ID #'.$id.' Berhasil Dibatalkan!</div>');
		redirect('manage/pembayaran/entri/'.$nisn.'/'.$tahun.'#tagihan');
	}

	public function riwayat()
	{
		$data['title'] = "Riwayat Pembayaran";
		$data['pembayaran'] = $this->pembayaran_model->get_pembayaran_all();

		$this->load->view('templates/manage_header', $data);
		$this->load->view('manage/pembayaran/riwayat', $data);
		$this->load->view('templates/footer');
	}

	public function cetak($id)
	{
		$data['title'] = "BUKTI PEMBAYARAN SPP";
		$data['pembayaran'] = $this->pembayaran_model->get_pembayaran_byId($id);


		$data['siswa'] = $this->siswa_model->get_siswa_byNisn($data['pembayaran']['nisn']);
		$this->load->view('manage/pembayaran/cetak', $data);
	}

}

