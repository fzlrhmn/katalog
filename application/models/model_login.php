<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function auth(){
		$user 	= $this->input->post('user');
		$pass 	= $this->input->post('password');
		$this->db->where('username',$user);
		$rs 	= $this->db->get('tbl_user');
		if($rs->num_rows() > 0){
		    $item	= $rs->row();
			$p_hash	= sha1(md5(sha1($pass)));
			if( $item->password == $p_hash ){
				$id_user		= $item->id_user;
				$data=array(
					'username'		=>$this->input->post('user')
					,'is_logged_in'	=>true
					,'id_user'		=>$id_user
					,'username'		=>$user
				);

				$this->session->set_userdata($data);

				return array('stat'=>true,'text'=>'Login Sukses. Halaman Anda Akan Dialihkan.');
		
			}
			else{
				return array('stat'=>false,'text'=>'Password Anda Salah.');
			}
		}
		else{
			return array('stat'=>false,'text'=>'Username Tidak Ditemukan.');
		}
	
  }

}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */