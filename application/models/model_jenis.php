<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jenis extends CI_Model {

	public function get_jenis( $id_jenis = false )
	{
		$this->db->select('tbl_jenis.*');
		$this->db->from('tbl_jenis');
		if( $id_jenis != false ){
			$this->db->where('id_jenis', $id_jenis);
		}
		$this->db->where('disable', 0);
		$this->db->order_by('jenis_buku', 'asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function submit( $object )
	{
		$insert 	= $this->db->insert('tbl_jenis', $object);

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
		$this->db->where('id_jenis', $object['id_jenis']);
		$update 	= $this->db->update('tbl_jenis', $object);

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

	public function delete( $id_jenis )
	{
		$object['disable'] = 1;
		$this->db->where('id_jenis', $id_jenis);
		if ($this->db->update('tbl_jenis', $object)) {
			return true;
		}
		else{
			return false;
		}
	}

}

/* End of file model_jenis.php */
/* Location: ./application/models/model_jenis.php */