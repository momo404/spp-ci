<?php 

class Akun_model extends CI_model 
{
	public function ubah_password($id)
	{
		$data = [
			'password' => $this->input->post('password1')
		];

		$this->db->update('tb_petugas', $data, ['id_petugas' => $id]);
	}

	public function cek_password($username)
	{
		$password = $this->input->post('password');
		return $this->db->get_where('tb_petugas',['username' => $username, 'password' => $password])->num_rows();
	}
}