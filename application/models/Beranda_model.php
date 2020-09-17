<?php 

class Beranda_model extends CI_model 
{
	public function count_pembayaran()
	{
		return [
			'all' => $this->db->get('tb_pembayaran')->num_rows(),
			'harian' => $this->harian(),
			'bulanan' => $this->bulanan(),
			'tahunan' => $this->tahunan()
		];
	}

	private function harian()
	{
		$this->db->like('tgl_bayar', date("d-m-Y"));
		return $this->db->get('tb_pembayaran')->num_rows();
	}

	private function bulanan()
	{
		$this->db->like('tgl_bayar', date("m-Y"));
		return $this->db->get('tb_pembayaran')->num_rows();
	}
	
	private function tahunan()
	{
		$this->db->like('tgl_bayar', date("Y"));
		return $this->db->get('tb_pembayaran')->num_rows();
	}

	
}