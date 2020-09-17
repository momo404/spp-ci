<?php 

class Tahun_model extends CI_model 
{

	public function get_tahun()
	{
		$this->db->order_by('tahun','ASC');
		return $this->db->get('tb_tahun')->result_array();
	}

	public function get_tahun_byId($id)
	{
		return $this->db->get_where('tb_tahun',['id_tahun' => $id])->row_array();
	}

	public function tambah_tahun()
	{
		$data = [
			'tahun' => $this->input->post('tahun', true)
		];
		
		$this->db->insert('tb_tahun', $data);
	}

	public function ubah_tahun($id)
	{
		$data = [
			'tahun' => $this->input->post('tahun', true)
		];
		
		$this->db->update('tb_tahun', $data, ['id_tahun' => $id]);
	}
	public function hapus_tahun($id)
	{
		$this->db->delete('tb_tahun', ['id_tahun' => $id]);
	}
}