<?php 

class Auth_model extends CI_model 
{

	public function login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$cek_username = $this->db->get_where('tb_petugas', ['username' => $username])->num_rows();
		$cek_password = $this->db->get_where('tb_petugas', ['username' => $username, 'password' => $password])->num_rows();
		$petugas = $this->db->get_where('tb_petugas', ['username' => $username])->row_array();
		return [$cek_username, $cek_password,$petugas];

	}

}
