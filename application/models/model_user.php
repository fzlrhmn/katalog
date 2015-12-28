<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get($id_user=false)
	{
		$this->db->select('id_user, username, password, level, disable');
		$this->db->where('disable', 0);
		if ($id_user!=false) {
			$this->db->where('id_user', $id_user);
		}
		$this->db->from('tbl_user');
		$this->db->order_by('username', 'asc');
		$query 	= $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_user_buku($id_user=false)
	{
		$this->db->select('id_user, username, password, level, disable');
		$this->db->where('disable', 0);
		if ($id_user!=false) {
			$this->db->where('id_user', $id_user);
		}
		$this->db->where('level', 1);
		$this->db->from('tbl_user');
		$this->db->order_by('username', 'asc');
		$query 	= $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function add()
	{
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$level 			= 1;
		$disable 		= 0;

		$object  	= array('username' 		=> $username,
							'password' 		=> sha1(md5(sha1($password))),
							'level' 		=> $level,
							'disable' 		=> $disable);

		$query = $this->db->insert('tbl_user', $object);

		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}

	public function update()
	{
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$level 			= 1;
		$disable 		= 0;

		if ($this->input->post('password')!='') {
			$password 	= $this->input->post('password');
			$object  	= array('username' 		=> $username,
								'password' 			=> sha1(md5(sha1($password))),
								'level' 		=> $level,
								'disable' 		=> $disable);
		}
		else{
			$object  	= array('username' 		=> $username,
								'level' 		=> $level,
								'disable' 		=> $disable);
		}
		$this->db->where('id_user', $this->input->post('id_user'));
		$query = $this->db->update('tbl_user', $object);

		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}

	public function delete($id_user)
	{
		$object = array('disable' => 1);
		$this->db->where('id_user', $id_user);
		$this->db->update('tbl_user', $object);
	}

	public function create($object)
	{
		$username 		= $object['username'];
		$password 		= $object['password'];
		$fullname 		= $object['fullname'];
		$is_admin 		= 0;
		$id_kabupaten 	= $object['id_kabupaten'];
		$email 			= $object['email'];
		$telp 			= $object['telp'];
		$nip 			= $object['nip'];

		$object  	= array('username' 		=> $username,
							'pwd' 			=> $this->encrypt->sha1($password),
							'fullname' 		=> $fullname,
							'is_admin' 		=> $is_admin,
							'id_kabupaten' 	=> $id_kabupaten,
							'email'			=> $email,
							'telp' 			=> $telp,
							'NIP' 			=> $nip );

		$query = $this->db->insert('tbl_user', $object);

		if ($query) {
			return true;
		}
		else{
			return false;
		}
	}

}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */