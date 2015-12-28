<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bidang extends CI_Model {

	public function get_bidang( $id_bidang = false )
	{
		$this->db->select('tbl_bidang.*');
		$this->db->from('tbl_bidang');
		if( $id_bidang != false ){
			$this->db->where('id_bidang', $id_bidang);
		}
		$this->db->where('deactive', 0);
		$this->db->order_by('bidang', 'asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function submit( $object )
	{
		$insert 	= $this->db->insert('tbl_bidang', $object);

		if ( $insert ) {
			$data['result'] 			= true;
		}
		else{
			$data['error_number']   	= $this->db->_error_number();
   			$data['error_message'] 		= $this->db->_error_message();
   			$data['result'] 			= false;
		}

		return $data;
	}

	public function update( $object )
	{
		$this->db->where('id_bidang', $object['id_bidang']);
		$update 	= $this->db->update('tbl_bidang', $object);

		if ( $update ) {
			$data['result'] 			= true;
		}
		else{
			$data['error_number']   	= $this->db->_error_number();
   			$data['error_message'] 		= $this->db->_error_message();
   			$data['result'] 			= false;
		}

		return $data;
	}

	public function delete( $id_bidang )
	{
		$object['deactive'] = 1;
		$this->db->where('id_bidang', $id_bidang);
		if ($this->db->update('tbl_bidang', $object)) {
			return true;
		}
		else{
			return false;
		}
	}
}

/* End of file model_bidang.php */
/* Location: ./application/models/model_bidang.php */