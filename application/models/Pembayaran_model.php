<?php 

class Pembayaran_model extends CI_model 
{

	public function get_pembayaran($nisn,$tahun)
	{
		//$this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
		$this->db->join('tb_bulan', 'tb_bulan.id_bulan = tb_pembayaran.id_bulan');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_pembayaran.id_spp');
		return $this->db->get_where('tb_pembayaran', ['nisn' => $nisn, 'tahun_dibayar' => $tahun])->result_array();
	}

	public function get_pembayaran_byNisn($nisn)
	{
		$this->db->order_by('id_pembayaran','DESC');
		$this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
		//$this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
		$this->db->join('tb_bulan', 'tb_bulan.id_bulan = tb_pembayaran.id_bulan');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_pembayaran.id_spp');
		return $this->db->get_where('tb_pembayaran', ['nisn' => $nisn])->result_array();
	}


	public function get_pembayaran_byId($id)
	{
		$this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
		$this->db->join('tb_bulan', 'tb_bulan.id_bulan = tb_pembayaran.id_bulan');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_pembayaran.id_spp');
		return $this->db->get_where('tb_pembayaran', ['id_pembayaran' => $id])->row_array();
	}

	public function get_pembayaran_all()
	{
		$this->db->order_by('id_pembayaran','DESC');
		$this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
		//$this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
		$this->db->join('tb_bulan', 'tb_bulan.id_bulan = tb_pembayaran.id_bulan');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_pembayaran.id_spp');
		return $this->db->get_where('tb_pembayaran')->result_array();
	}

	public function validasi_pembayaran($nisn, $tahun)
	{
		$cek_pembayaran = $this->db->get_where('tb_pembayaran', ['nisn' => $nisn, 'tahun_dibayar' => $tahun])->num_rows();

		$cek_nisn = $this->db->get_where('tb_siswa', ['nisn' => $nisn])->num_rows();

		$this->db->order_by('id_pembayaran','DESC');
		$cek_lunas = $this->db->get_where('tb_pembayaran', ['nisn' => $nisn, 'id_bulan' => 12])->row_array();


		return [$cek_pembayaran, $cek_nisn, $cek_lunas];


	}

	public function tambah_pembayaran($nisn, $tahun)
	{
		$id_spp = $this->db->get_where('tb_siswa', ['nisn' => $nisn])->row_array()['id_spp'];
		$bulan = $this->db->get('tb_bulan')->result_array();

		foreach ($bulan as $data) {
			$data = [
				'id_petugas' => NULL,
				'nisn' => $nisn,
				'tgl_bayar' => NULL,
				'id_bulan' => $data['id_bulan'],
				'tahun_dibayar' => $tahun,
				'id_spp' => $id_spp,
				'status' => 0
			];
			$this->db->insert('tb_pembayaran',$data);
		}
	}

	public function bayar_tagihan($id)
	{
		$data = [
			'id_petugas' => $this->session->userdata('id_petugas'),
			'tgl_bayar' => date('d-m-Y'),
			'status' => 1
		];
		$this->db->update('tb_pembayaran', $data, ['id_pembayaran' => $id]);
	}

	public function batalkan_tagihan($id)
	{
		$data = [
			'id_petugas' => NULL,
			'tgl_bayar' => NULL,
			'status' => 0
		];
		$this->db->update('tb_pembayaran', $data, ['id_pembayaran' => $id]);
	}

	public function get_bulan()
	{
		return $this->db->get('tb_bulan')->result_array();
	}

	public function get_pembayaran_byTgl($tanggal)
	{
		$this->db->order_by('id_pembayaran','DESC');
		$this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
		//$this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
		$this->db->join('tb_bulan', 'tb_bulan.id_bulan = tb_pembayaran.id_bulan');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_pembayaran.id_spp');
		$this->db->like('tgl_bayar', $tanggal);
		return $this->db->get('tb_pembayaran')->result_array();
	}

	

}