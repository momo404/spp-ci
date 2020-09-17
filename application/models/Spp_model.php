<?php 

class Spp_model extends CI_model 
{

	public function get_spp()
	{
		$this->db->order_by('tahun','ASC');
		return $this->db->get('tb_spp')->result_array();
	}

	public function get_spp_byId($id)
	{
		return $this->db->get_where('tb_spp',['id_spp' => $id])->row_array();
	}

	public function tambah_spp()
	{
		$data = [
			'tahun' => $this->input->post('tahun', true),
			'nominal' => $this->input->post('nominal', true)
		];
		
		$this->db->insert('tb_spp', $data);
	}

	public function ubah_spp($id)
	{
		$data = [
			'tahun' => $this->input->post('tahun', true),
			'nominal' => $this->input->post('nominal', true)
		];
		
		$this->db->update('tb_spp', $data, ['id_spp' => $id]);
	}
	public function hapus_spp($id)
	{
		$this->db->delete('tb_spp', ['id_spp' => $id]);
	}
}