<?php 

class Kelas_model extends CI_model 
{

	public function get_kelas()
	{
		$this->db->order_by('id_kelas','DESC');
		return $this->db->get('tb_kelas')->result_array();
	}

	public function get_kelas_byId($id)
	{
		return $this->db->get_where('tb_kelas',['id_kelas' => $id])->row_array();
	}

	public function tambah_kelas()
	{
		$data = [
			'nama_kelas' => $this->input->post('kelas', true),
			'kompetensi_keahlian' => $this->input->post('kompetensi', true)
		];
		
		$this->db->insert('tb_kelas', $data);
	}

	public function ubah_kelas($id)
	{
		$data = [
			'nama_kelas' => $this->input->post('kelas', true),
			'kompetensi_keahlian' => $this->input->post('kompetensi', true)
		];
		
		$this->db->update('tb_kelas', $data, ['id_kelas' => $id]);
	}
	public function hapus_kelas($id)
	{
		$this->db->delete('tb_kelas', ['id_kelas' => $id]);
	}
}