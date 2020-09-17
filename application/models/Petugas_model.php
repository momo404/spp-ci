<?php 

class Petugas_model extends CI_model 
{

	public function get_petugas()
	{
		$this->db->order_by('id_petugas','DESC');
		return $this->db->get('tb_petugas')->result_array();
	}

	public function get_petugas_byId($id)
	{
		return $this->db->get_where('tb_petugas',['id_petugas' => $id])->row_array();
	}

	public function tambah_petugas()
	{
		$data = [
			'nama_petugas' => $this->input->post('nama', true),
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password1', true),
			'level' => $this->input->post('level', true)
		];
		
		$this->db->insert('tb_petugas', $data);
	}

	public function ubah_petugas($id)
	{
		$data = [
			'nama_petugas' => $this->input->post('nama', true),
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password1', true),
			'level' => $this->input->post('level', true)
		];
		
		$this->db->update('tb_petugas', $data, ['id_petugas' => $id]);
	}
	public function hapus_petugas($id)
	{
		$this->db->delete('tb_petugas', ['id_petugas' => $id]);
	}

	public function ubah_password($id)
	{
		$data = [
			'password' => $this->input->post('password1')
		];

		$this->db->update('tb_petugas', $data, ['id_petugas' => $id]);
	}
}