<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_prakata extends CI_Model {

	public function get_prakata()
	{
		$this->db->select('tbl_prakata.prakata as prakata');
		$this->db->from('tbl_prakata');
		$this->db->where('id_prakata', 1);
		$query = $this->db->get();
		$result = $query->row();
		return $result->prakata;
	}

	public function update( $object )
	{
		$this->db->where('id_prakata', 1);
		$update 	= $this->db->update('tbl_prakata', $object);

		if ( $update ) {
			$data['result'] 			= true;
			$data['object']				= $object;
		}
		else{
			$data['error_number']   	= $this->db->_error_number();
   			$data['error_message'] 		= $this->db->_error_message();
   			$data['result'] 			= false;
		}

		return $data;
	}

}

/* End of file model_prakata.php */
/* Location: ./application/models/model_prakata.php */