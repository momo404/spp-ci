<?php 

class Siswa_model extends CI_model 
{

	public function get_siswa()
	{
		$this->db->order_by('id_siswa','DESC');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_siswa.id_spp');
		return $this->db->get('tb_siswa')->result_array();
	}

	public function search_siswa()
	{
		$keyword = $this->input->post('keyword');

		$this->db->order_by('id_siswa','DESC');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_siswa.id_spp');
		$this->db->like('nisn', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('nama_kelas', $keyword);
		return $this->db->get('tb_siswa')->result_array();
	}

	public function get_siswa_byId($id)
	{
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_siswa.id_spp');
		return $this->db->get_where('tb_siswa',['id_siswa' => $id])->row_array();
	}

	public function get_siswa_byNisn($nisn)
	{
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
		$this->db->join('tb_spp', 'tb_spp.id_spp = tb_siswa.id_spp');
		return $this->db->get_where('tb_siswa',['nisn' => $nisn])->row_array();
	}

	public function tambah_siswa()
	{
		$data = [
			'nisn' => $this->input->post('nisn', true),
			'nama' => $this->input->post('nama', true),
			'id_kelas' => $this->input->post('kelas', true),
			'alamat' => $this->input->post('alamat', true),
			'no_telp' => $this->input->post('no_telp', true),
			'id_spp' => $this->input->post('spp', true)
		];
		
		$this->db->insert('tb_siswa', $data);
	}

	public function ubah_siswa($id)
	{
		$data = [
			'nisn' => $this->input->post('nisn', true),
			'nama' => $this->input->post('nama', true),
			'id_kelas' => $this->input->post('kelas', true),
			'alamat' => $this->input->post('alamat', true),
			'no_telp' => $this->input->post('no_telp', true),
			'id_spp' => $this->input->post('spp', true)
		];
		
		$this->db->update('tb_siswa', $data, ['id_siswa' => $id]);
	}
	public function hapus_siswa($id)
	{
		$this->db->delete('tb_siswa', ['id_siswa' => $id]);
	}
}