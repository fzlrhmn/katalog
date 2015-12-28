<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function get_master_kategori( $id_master_kategori = false )
	{
		$this->db->select('tbl_master_kategori.*');
		$this->db->from('tbl_master_kategori');
		if( $id_master_kategori != false ){
			$this->db->where('id', $id_master_kategori);
		}
		// $this->db->order_by('nama_kategori', 'asc');
		$this->db->where('deleted', 0);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_master_kategori_for_select( $id_master_kategori = false )
	{
		$this->db->select('tbl_master_kategori.id, tbl_master_kategori.nama_kategori as text');
		$this->db->from('tbl_master_kategori');
		if( $id_master_kategori != false ){
			$this->db->where('id', $id_master_kategori);
		}
		$this->db->where('deleted', 0);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function submit( $object )
	{
		$insert 	= $this->db->insert('tbl_master_kategori', $object);

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
		$this->db->where('id', $object['id']);
		$update 	= $this->db->update('tbl_master_kategori', $object);

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

	public function delete( $id_kategori )
	{
		$object['deleted'] = 1;
		$this->db->where('id', $id_kategori);
		if ($this->db->update('tbl_master_kategori', $object)) {
			return true;
		}
		else{
			return false;
		}
	}

}

/* End of file model_kategori.php */
/* Location: ./application/models/model_kategori.php */